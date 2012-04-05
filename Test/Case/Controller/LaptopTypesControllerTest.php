<?php
/* LaptopTypes Test cases generated on: 2011-12-18 21:20:31 : 1324243231*/
App::uses('LaptopTypesController', 'Controller');

/**
 * TestLaptopTypesController *
 */
class TestLaptopTypesController extends LaptopTypesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * LaptopTypesController Test Case
 *
 */
class LaptopTypesControllerTestCase extends CakeTestCase {
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

		$this->LaptopTypes = new TestLaptopTypesController();
		$this->LaptopTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LaptopTypes);

		parent::tearDown();
	}

}
