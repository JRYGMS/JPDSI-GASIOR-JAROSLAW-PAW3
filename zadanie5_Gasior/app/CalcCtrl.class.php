<?php


require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;   
	private $form;   
	private $result; 
    
    public function __construct(){
	
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

    public function getParams() {
        $this->form->k = isset($_REQUEST['k']) ? $_REQUEST['k'] : null;
        $this->form->l = isset($_REQUEST['l']) ? $_REQUEST['l'] : null;
        $this->form->opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
    }

    public function validate() {

        if (!(isset($this->form->k) && isset($this->form->l) && isset($this->form->opr))) {
            return false;
        }

        $this->msgs->addInfo('Przekazane parametry');

        if ($this->form->k == "") {
            $this->msgs->addError('Brak kwoty kredytu.');
        } else if (!is_numeric($this->form->k)) {
            $this->msgs->addError('Kwota nie jest wartością numeryczną.');
        } else if($this->form->k <= 0) {
            $this->msgs->addError('Kwota nie może być wartością ujemną.');
        }

        if ($this->form->l == "") {
            $this->msgs->addError('Brak ilości lat.');
        } else if (!is_numeric($this->form->l)) {
            $this->msgs->addError('Ilość lat nie jest wartością numeryczną.');
        } else if($this->form->l <= 0) {
            $this->msgs->addError('Ilość lat nie może być wartością ujemną.');
        }

        if ($this->form->opr == "") {
            $this->msgs->addError('Nie podano oprocentowania.');
        } else if (!is_numeric($this->form->opr)) {
            $this->msgs->addError('Oprocentowanie nie jest wartością numeryczną.');
        } else if($this->form->opr < 0) {
            $this->msgs->addError('Oprocentowanie nie może być wartością ujemną.');
        }

        return ! $this->msgs->isError();
    }

    public function process() {
        $this->getParams();
        if($this->validate()){
            $this->form->k = intval($this->form->k);
            $this->form->l = intval($this->form->l);
            $this->form->opr = intval($this->form->opr);
            $this->msgs->addInfo('Parametry poprawne.');
            $this->result->result = max(round(($this->form->k + ($this->form->k * ($this->form->opr/100))) / ($this->form->l * 12), 2), 0.01);
        }
        $this->generateView();
    }
    


    public function generateView(){
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Zadanie 5');
        $smarty->assign('page_description','Kalkulator Kredytowy');
        $smarty->assign('page_header','Obiektowość');


        $smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);

        $smarty->display($conf->root_path.'/app/calc_view.html');

    }
}