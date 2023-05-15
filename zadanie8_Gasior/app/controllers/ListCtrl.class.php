<?php

namespace app\controllers;

class ListCtrl {

    private $records;

    public function action_showList() {

	$this->records = getDB()->select("wyniki", ["ID_wynik","kwota","ile_lat","oprocentowanie","rata_miesieczna","data",]);
		
        getSmarty()->assign('page_title','Zadanie 8');
        getSmarty()->assign('page_description','Wyniki');
        getSmarty()->assign('page_header','DB');

        if(isset($_SESSION['user'])) {
            getSmarty()->assign('user',unserialize($_SESSION['user']));
        }
		getSmarty()->assign('wyniki',$this->records);
		getSmarty()->display('ListView.tpl');
    }
}