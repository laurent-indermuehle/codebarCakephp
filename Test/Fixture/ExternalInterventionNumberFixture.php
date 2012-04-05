<?php
/**
 * ExternalInterventionNumberFixture
 *
 */
class ExternalInterventionNumberFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'intervention_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'partner_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'external_intervention_number_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
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
			'intervention_id' => 1,
			'partner_id' => 1,
			'external_intervention_number_type_id' => 1,
			'number' => 'Lorem ipsum dolor sit amet'
		),
	);
}
