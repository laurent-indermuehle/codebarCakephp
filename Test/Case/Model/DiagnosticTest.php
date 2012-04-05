<?php
App::uses('Diagnostic', 'Model');

/**
 * Diagnostic Test Case
 *
 */
class DiagnosticTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.diagnostic', 'app.cause', 'app.devices_problem', 'app.causes_devices_problem', 'app.causes_diagnostic');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Diagnostic = ClassRegistry::init('Diagnostic');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Diagnostic);

		parent::tearDown();
	}

}
