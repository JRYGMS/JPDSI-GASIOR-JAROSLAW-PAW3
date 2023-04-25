<?php


namespace app\controllers;


use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	
	private $form;   
	private $result; 
    
    public function __construct(){
	
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

    public function getParams() {
        $this->form->k = getFromRequest('k');
        $this->form->l = getFromRequest('l');
        $this->form->opr = getFromRequest('opr');
    }

    public function validate() {

        if (!(isset($this->form->k) && isset($this->form->l) && isset($this->form->opr))) {
            return false;
        }

        getMessages()->addInfo('Przekazane parametry');

        if ($this->form->k == "") {
            getMessages()->addError('Brak kwoty kredytu.');
        } else if (!is_numeric($this->form->k)) {
            getMessages()->addError('Kwota nie jest wartością numeryczną.');
        } else if($this->form->k <= 0) {
            getMessages()->addError('Kwota nie może być wartością ujemną.');
        }

        if ($this->form->l == "") {
            getMessages()->addError('Brak ilości lat.');
        } else if (!is_numeric($this->form->l)) {
            getMessages()->addError('Ilość lat nie jest wartością numeryczną.');
        } else if($this->form->l <= 0) {
            getMessages()->addError('Ilość lat nie może być wartością ujemną.');
        }

        if ($this->form->opr == "") {
            getMessages()->addError('Nie podano oprocentowania.');
        } else if (!is_numeric($this->form->opr)) {
            getMessages()->addError('Oprocentowanie nie jest wartością numeryczną.');
        } else if($this->form->opr < 0) {
            getMessages()->addError('Oprocentowanie nie może być wartością ujemną.');
        }

        return ! getMessages()->isError();
    }

    public function process() {
        $this->getParams();
        if($this->validate()){
            $this->form->k = intval($this->form->k);
            $this->form->l = intval($this->form->l);
            $this->form->opr = intval($this->form->opr);
            getMessages()->addInfo('Parametry poprawne.');
            $this->result->result = max(round(($this->form->k + ($this->form->k * ($this->form->opr/100))) / ($this->form->l * 12), 2), 0.01);
        }
        $this->generateView();
    }
    


    public function generateView(){    

        getSmarty()->assign('page_title','Zadanie 6');
        getSmarty()->assign('page_description','Kalkulator Kredytowy');
        getSmarty()->assign('page_header','Kontroler główny');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);

        getSmarty()->display('calc_view.tpl');
    }
}