<?php
/**
 * EstimateFixture
 *
 */
class EstimateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'entry_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'deadline_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'intervention_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'external_intervention_number_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
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
			'entry_date' => '2012-04-02 12:20:13',
			'deadline_date' => '2012-04-02 12:20:13',
			'intervention_id' => 1,
			'external_intervention_number_id' => 1
		),
	);
}
