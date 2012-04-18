<?php
/**
 * DeviceLoanFixture
 *
 */
class DeviceLoanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'device_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'loan_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'person_technician_return_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'actual_return_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
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
			'device_id' => 1,
			'loan_id' => 1,
			'person_technician_return_id' => 1,
			'actual_return_date' => '2012-04-18 13:25:47'
		),
	);
}
