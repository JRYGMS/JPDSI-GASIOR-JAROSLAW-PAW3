<?php
require_once dirname(__FILE__).'/../../config.php';

function getParamsLogin(&$form){
	$form['log'] = isset($_REQUEST['log']) ? $_REQUEST['log'] : null;
	$form['pw'] = isset($_REQUEST['pw']) ? $_REQUEST['pw'] : null;
}

function validateLogin(&$form,&$messages){

	if (!(isset($form['log']) && isset($form['pw']))) {
		return false;
	}

	if ($form['log'] == "") {
		$messages [] = 'Nie podano loginu';
	}
	if ($form['pw'] == "") {
		$messages [] = 'Nie podano hasła';
	}

	if (count($messages) > 0) return false;

	if ($form['log'] == "admin" && $form['pw'] == "admin") {
		session_start();
		$_SESSION['rola'] = 'administrator';
		return true;
	}
	if ($form['log'] == "user" && $form['pw'] == "user") {
		session_start();
		$_SESSION['rola'] = 'użytkownik';
		return true;
	}
	
	$messages [] = 'Niepoprawny login lub hasło';
	return false; 
}

$form = array();
$messages = array();

getParamsLogin($form);

if (!validateLogin($form,$messages)) {
	include _ROOT_PATH.'/app/security/login_view.php';
} 
else { 
	header("Location: "._APP_URL);
}