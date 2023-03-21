<?php
require_once dirname(__FILE__).'/../config.php';

$k = $_REQUEST['k'];
$l = $_REQUEST['l'];
$opr = $_REQUEST['opr'];

if (!(isset($k) && isset($l) && isset($opr))) {
	$messages [] = 'Jeden bądź więcej parametrów nie zostało podane. Spróbuj ponownie.';
}

if (empty($messages)) {
	
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
}

if (empty($messages)) {
	
	$k = intval($k);
	$l = intval($l);
    $opr = intval($opr);
	
    $result = max(round(($k + ($k * ($opr/100))) / ($l * 12), 2), 0.01);
    
}

include 'calc_view.php';