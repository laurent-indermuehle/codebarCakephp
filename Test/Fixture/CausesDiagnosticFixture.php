<?php
/**
 * CausesDiagnosticFixture
 *
 */
class CausesDiagnosticFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'diagnostic_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'cause_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'answer' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
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
			'diagnostic_id' => 1,
			'cause_id' => 1,
			'answer' => 1
		),
	);
}
