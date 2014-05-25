<?php
/**
 * SaidaFixture
 *
 */
class SaidaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'status_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'despesas_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'forma_pagamentos_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'cedentes_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'data_emissao' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_vencimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'data_pagamento' => array('type' => 'date', 'null' => true, 'default' => null),
		'recido' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'valor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_saidas_status1_idx' => array('column' => 'status_id', 'unique' => 0),
			'fk_saidas_despesas1_idx' => array('column' => 'despesas_id', 'unique' => 0),
			'fk_saidas_forma_pagamentos1_idx' => array('column' => 'forma_pagamentos_id', 'unique' => 0),
			'fk_saidas_cedentes1_idx' => array('column' => 'cedentes_id', 'unique' => 0)
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
			'status_id' => 1,
			'despesas_id' => 1,
			'forma_pagamentos_id' => 1,
			'cedentes_id' => 1,
			'data_emissao' => '2014-05-24',
			'data_vencimento' => '2014-05-24',
			'data_pagamento' => '2014-05-24',
			'recido' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'valor' => 'Lorem ipsum dolor sit amet'
		),
	);

}
