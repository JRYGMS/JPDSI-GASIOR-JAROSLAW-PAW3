<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$k, &$l, &$opr) {
    $k = isset($_REQUEST['k']) ? $_REQUEST['k'] : null;
    $l = isset($_REQUEST['l']) ? $_REQUEST['l'] : null;
    $opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}

function validate(&$k, &$l, &$opr, &$messages) {

    if (!(isset($k) && isset($l) && isset($opr))) {
	    return false;
    }
	
    if ($k == "") {
        $messages [] = 'Brak kwoty kredytu.';
    } else if (!is_numeric($k)) {
		$messages [] = 'Kwota nie jest wartością numeryczną.';
	} else if($k <= 0) {
        $messages [] = 'Kwota nie może być wartością ujemną.';
    }
	if ($l == "") {
        $messages [] = 'Brak ilości rat.';
    } else if (!is_numeric($l)) {
		$messages [] = 'Ilość lat nie jest wartością numeryczną.';
	} else if($l <= 0) {
        $messages [] = 'Ilość lat nie może być wartością ujemną.';
    }
    if ($opr == "") {
        $messages [] = 'Nie podano oprocentowania.';
    } else if (!is_numeric($opr)) {
		$messages [] = 'Oprocentowanie nie jest wartością numeryczną.';
	} else if($opr < 0) {
        $messages [] = 'Oprocentowanie nie może być wartością ujemną.';
    }
	
    if (count($messages) != 0) return false;
    else return true;
}

function process(&$k,&$l,&$opr,&$messages,&$result) {
	global $rola;

    $k = intval($k);
    $l = intval($l);
    $opr = intval($opr);

    if($rola == "użytkownik") {
        if($k > 10000) {
            $messages [] = "Tylko administrator może brać kredyt większy niż 10000";
        } else {
            $result = max(round(($k + ($k * ($opr/100))) / ($l * 12), 2), 0.01);
        }
    } else {
        $result = max(round(($k + ($k * ($opr/100))) / ($l * 12), 2), 0.01);
    }
    
}

$k = null;
$l = null;
$opr = null;
$result = null;
$messages = array();

getParams($k, $l, $opr);
if(validate($k, $l, $opr, $messages)) {
    process($k,$l,$opr,$messages,$result);
}

include 'calc_view.php';