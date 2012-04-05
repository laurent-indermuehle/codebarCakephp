<?php
/**
 * ArticleFixture
 *
 */
class ArticleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'serial_number' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'part_of' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'location_id' => array('type' => 'string', 'null' => false, 'default' => 'Co171', 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'is_active' => array('type' => 'integer', 'null' => true, 'default' => '1', 'length' => 4),
		'is_available' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'article_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'etat' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date_of_purchase' => array('type' => 'date', 'null' => true, 'default' => NULL),
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
			'serial_number' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'part_of' => 'Lorem ipsum dolor sit amet',
			'location_id' => 'Lorem ipsum dolor ',
			'is_active' => 1,
			'is_available' => 1,
			'article_type_id' => 1,
			'etat' => 'Lorem ipsum dolor sit amet',
			'date_of_purchase' => '2012-04-02'
		),
	);
}
