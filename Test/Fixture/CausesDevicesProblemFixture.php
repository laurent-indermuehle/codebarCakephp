<?php
/**
 * CausesDevicesProblemFixture
 *
 */
class CausesDevicesProblemFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'problem_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'device_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'cause_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'problem_id' => 1,
			'device_id' => 1,
			'cause_id' => 1
		),
	);
}
