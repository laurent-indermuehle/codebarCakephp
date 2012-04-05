<?php
/* Laptop Test cases generated on: 2011-12-19 15:41:50 : 1324309310*/
App::uses('Laptop', 'Model');

/**
 * Laptop Test Case
 *
 */
class LaptopTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.laptop', 'app.laptop_type', 'app.brand');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Laptop = ClassRegistry::init('Laptop');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Laptop);

		parent::tearDown();
	}

}
