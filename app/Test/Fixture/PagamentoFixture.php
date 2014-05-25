<?php
/**
 * PagamentoFixture
 *
 */
class PagamentoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'entradas_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'status_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'data_emissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_vencimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_pagamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'valor' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_pagamentos_status1_idx' => array('column' => 'status_id', 'unique' => 0),
			'fk_pagamentos_entradas1_idx' => array('column' => 'entradas_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'entradas_id' => 1,
			'status_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'data_emissao' => '2014-05-24',
			'data_vencimento' => '2014-05-24',
			'data_pagamento' => '2014-05-24',
			'valor' => 1
		),
	);

}
