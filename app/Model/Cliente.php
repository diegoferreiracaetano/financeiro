<?php
App::uses('AppModel', 'Model');
App::uses('Pagamento', 'Model');
App::uses('CakeNumber', 'Utility');
App::uses('CakeTime', 'Utility');
/**
 * Cliente Model
 *
 */
class Cliente extends AppModel {

	
	public function getTotalDespesas(){
		CakeNumber::addFormat('BRL', array('before' => 'R$', 'thousands' => '.', 'decimals' => ','));
		$array_dados = array();
		
		$array_result = $this->query('SELECT c.id as cliente_id,c.nome as cliente,d.id as despesa_id,d.descricao as despesa,(SUM(s.valor)) as valor
						FROM clientes c
						LEFT JOIN franquias f ON f.clientes_id = c.id
						LEFT JOIN saidas s ON s.franquias_id = f.id AND s.data_pagamento IS NOT NULL
						LEFT JOIN despesas d ON s.despesas_id = d.id
						GROUP BY c.id,d.id');
		
		
		$array_despesas = $this->query('SELECT * FROM despesas');
		
		
		foreach ($array_result as $resultado) {
			foreach ($array_despesas as $key => $despesas){
				$array_dados[$resultado['c']['cliente_id']]['CLIENTE'] =  $resultado['c']['cliente'];
				if($despesas['despesas']['id'] == $resultado['d']['despesa_id']){
					@$array_dados[$resultado['c']['cliente_id']][$despesas['despesas']['descricao']] =  $resultado['0']['valor'];
				}elseif (@$array_dados[$resultado['c']['cliente_id']][$despesas['despesas']['descricao']] != 0){
					@$array_dados[$resultado['c']['cliente_id']][$despesas['despesas']['descricao']] = $array_dados[$resultado['c']['cliente_id']][$despesas['despesas']['descricao']];
				}else{
					@$array_dados[$resultado['c']['cliente_id']][$despesas['despesas']['descricao']] = 0;
				}
			}
		}
		
		$Saida = new Saida();
		$total_saidas = $Saida->getTotalSaidas();
		
		foreach ($array_dados as $key=> $dados) {
			$Pagamento = new Pagamento();
			$entradas = $Pagamento->getTotalEntradas($key);
			
			$Saida = new Saida();
			$saidas = $Saida->getTotalSaidas($key);
		
			$array_dados[$key]['RATEIO DESPESAS ESCRITORIO'] = ($total_saidas['total']/count($array_dados));
			$array_dados[$key]['FATURAMENTO'] = $entradas['total'];
			$array_dados[$key]['DESPESAS'] = $saidas['total'];
			//$array_dados[$key]['LUCRO']=  CakeNumber::currency(($entradas['total']-$saidas['total']),'BRL');
			$array_dados[$key]['LUCRO']= ($entradas['total']-$saidas['total']);
		}
		return $array_dados;
	}
}
