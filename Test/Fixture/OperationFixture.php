<?php
/**
 * OperationFixture
 *
 */
class OperationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'intervention_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'operation_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'person_technician_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'date' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'estimate_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'intervention' => array('column' => array('intervention_id', 'operation_type_id'), 'unique' => 0)),
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
			'intervention_id' => 1,
			'operation_type_id' => 1,
			'person_technician_id' => 1,
			'date' => 1,
			'location_id' => 1,
			'estimate_id' => 1
		),
	);
}
