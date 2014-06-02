<?php
App::uses('AppController', 'Controller');
App::uses('Cliente', 'Model');
App::uses('Pagamento', 'Model');
App::uses('Saida', 'Model');
App::uses('CakeNumber', 'Utility');
App::uses('CakeTime', 'Utility');

class RelatoriosController extends AppController {

	//public $components = array('RequestHandler');
	
	
	public function index(){
		CakeNumber::addFormat('BRL', array('before' => 'R$', 'thousands' => '.', 'decimals' => ','));	
		
		
		$Pagamento = new Pagamento();
		$this->set('entradas',$Pagamento->getTotalEntradas());
		
		
		$Saida = new Saida();
		$this->set('saidas',$Saida->getTotalSaidas());
		
		$Cliente = new Cliente();
		$this->set('faturamentos',$Cliente->getTotalDespesas());
		
	}
	
	
	public function gerarGrafico(){

		$Cliente = new Cliente();
		$this->set('dados',$Cliente->getTotalDespesas());
	  	$this->layout = 'ajax';
	}
}