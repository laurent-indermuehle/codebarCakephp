<?php
/**
 * DeviceFixture
 *
 */
class DeviceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'date_end_of_warranty' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'date_first_seen' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'serial_number' => array('type' => 'string', 'null' => false, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'device_type_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 6),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 8),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'date_end_of_warranty' => '2012-04-02 12:19:52',
			'date_first_seen' => '2012-04-02 12:19:52',
			'serial_number' => 'Lorem ipsum dolor sit amet',
			'device_type_id' => 1,
			'person_id' => 1
		),
	);
}
