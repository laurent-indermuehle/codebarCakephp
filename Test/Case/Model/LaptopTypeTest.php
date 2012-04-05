<?php
/* LaptopType Test cases generated on: 2011-12-16 14:45:01 : 1324046701*/
App::uses('LaptopType', 'Model');

/**
 * LaptopType Test Case
 *
 */
class LaptopTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.laptop_type', 'app.brand', 'app.laptop');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->LaptopType = ClassRegistry::init('LaptopType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LaptopType);

		parent::tearDown();
	}

}
