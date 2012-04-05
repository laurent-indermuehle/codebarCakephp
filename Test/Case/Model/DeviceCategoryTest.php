<?php
App::uses('DeviceCategory', 'Model');

/**
 * DeviceCategory Test Case
 *
 */
class DeviceCategoryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.device_category');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DeviceCategory = ClassRegistry::init('DeviceCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DeviceCategory);

		parent::tearDown();
	}

}
