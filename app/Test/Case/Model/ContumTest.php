<?php
App::uses('Contum', 'Model');

/**
 * Contum Test Case
 *
 */
class ContumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Contum = ClassRegistry::init('Contum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contum);

		parent::tearDown();
	}

}
