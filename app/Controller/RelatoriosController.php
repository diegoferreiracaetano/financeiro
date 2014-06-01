<?php
App::uses('AppController', 'Controller');
App::uses('Pagamento', 'Model');
App::uses('Saida', 'Model');
App::uses('CakeNumber', 'Utility');
App::uses('CakeTime', 'Utility');

class RelatoriosController extends AppController {

	
	
	public function index(){
		CakeNumber::addFormat('BRL', array('before' => 'R$', 'thousands' => '.', 'decimals' => ','));	
		
		
		$Pagamento = new Pagamento();
		$this->set('entradas',$Pagamento->getTotalEntradas());
		
		
		$Saida = new Saida();
		$this->set('saidas',$Saida->getTotalSaidas());
	}
}