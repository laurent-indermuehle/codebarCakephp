<?php
/* Laptop Fixture generated on: 2011-12-19 15:41:47 : 1324309307 */

/**
 * LaptopFixture
 *
 */
class LaptopFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 32, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'serial_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 70, 'key' => 'unique', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'warranty_end_date' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'laptop_type_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 70, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'serial_number' => array('column' => 'serial_number', 'unique' => 1)),
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
			'serial_number' => 'Lorem ipsum dolor sit amet',
			'warranty_end_date' => 1,
			'laptop_type_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
