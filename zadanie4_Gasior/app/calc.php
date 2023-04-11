<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/Smarty.class.php';

function getParams(&$k, &$l, &$opr) {
    $k = isset($_REQUEST['k']) ? $_REQUEST['k'] : null;
    $l = isset($_REQUEST['l']) ? $_REQUEST['l'] : null;
    $opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}

function validate(&$k, &$l, &$opr, &$messages, &$infos) {

    if (!(isset($k) && isset($l) && isset($opr))) {
	    return false;
    }

    $infos[] = 'Przekazane parametry';

    if ($k == "") {
        $messages [] = 'Brak kwoty kredytu.';
    } else if (!is_numeric($k)) {
	    $messages [] = 'Kwota nie jest wartością numeryczną.';
	} else if($k <= 0) {
        $messages [] = 'Kwota nie może być wartością ujemną.';
    }

	if ($l == "") {
        $messages [] = 'Brak ilości lat.';
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

function process(&$k,&$l,&$opr,&$messages,&$result,&$infos) {
	global $rola;

    $infos[] = 'Parametry poprawne. Wykonuję obliczenia';

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
$info = array();

getParams($k, $l, $opr);
if(validate($k, $l, $opr, $messages, $infos)) {
    process($k,$l,$opr,$messages,$result, $infos);
}


$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Zadanie 4');
$smarty->assign('page_description','Kalkulator Kredytowy');
$smarty->assign('page_header','Proste szablonowanie Smarty');


$smarty->assign('k',$k);
$smarty->assign('l',$l);
$smarty->assign('opr',$opr);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

$smarty->display(_ROOT_PATH.'/app/calc_view.html');
