<?php

// KONTROLER strony kalkulatora kredytowego
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcCredForm.class.php';
require_once $conf->root_path.'/app/CalcCredResult.class.php';



class CalcCredCtrl {

private $messages;   //wiadomości dla widoku
private $form;   //dane formularza (do obliczeń i dla widoku)
private $result; //inne dane dla widoku


public function __construct(){
    
$this->messages = new Messages();
$this->form = new CalcCredForm();
$this->result = new CalcCredResult();
}

//pobranie parametrów
public function getParams(){
$this->form->value = isset($_REQUEST ['value']) ? $_REQUEST['value'] : null;
$this->form->years = isset($_REQUEST ['years']) ? $_REQUEST['years'] : null;
$this->form->percent = isset($_REQUEST ['percent']) ? $_REQUEST['percent'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(){
    
// sprawdzenie, czy parametry zostały przekazane
if (!(isset($this->form->value) && isset($this->form->years) && isset($this->form->percent))) {
return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $this->form->value == "") {
$this->messages->addError('Nie podano kwoty');
}
if ( $this->form->years == "") {
$this->messages->addError('Nie podano okresu spłaty');
}
if ( $this->form->percent == "") {
$this->messages->addError('Nie podano oprocentowania');
}

if (! $this->messages->isError()) {

if (!is_numeric( $this->form->value )) {
$this->messages->addError('Wartość kwoty nie jest liczbą');
}

if (!is_numeric( $this->form->years )) {
$this->messages->addError('Okres spłaty nie jest liczbą');
}

if (!is_numeric( $this->form->percent )) {
$this->messages->addError('Procent nie jest liczbą');
}

}
return ! $this->messages->isError();
}


public function process(){

$this->getParams();

if($this->validate()){

$this->form->value = intval($this->form->value);
$this->form->years = intval($this->form->years);
$this->form->percent = floatval($this->form->percent);
$this->result->result = (1+($this->form->percent)/100)*(($this->form->value)/(($this->form->years)*12));



}
$this->generateView();
}

public function generateView(){
    global $conf;
    $smarty = new Smarty();

$smarty->assign('conf',$conf);		
$smarty->assign('app_url', $conf->app_url);
$smarty->assign('root_path', $conf->root_path);
$smarty->assign('page_title', 'Kalkulator kredytowy');
$smarty->assign('page_description', 'Obliczanie raty kredytu nigdy nie było tak proste!');
$smarty->assign('page_header', 'Obiektowosc');


$smarty->assign('result', $this->result);
$smarty->assign('form', $this->form);
$smarty->assign('messages', $this->messages);


$smarty->display($conf->root_path.'/app/calc_cred.tpl');
}



}