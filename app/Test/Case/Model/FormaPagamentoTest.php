<?php
App::uses('FormaPagamento', 'Model');

/**
 * FormaPagamento Test Case
 *
 */
class FormaPagamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.forma_pagamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormaPagamento = ClassRegistry::init('FormaPagamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormaPagamento);

		parent::tearDown();
	}

}
