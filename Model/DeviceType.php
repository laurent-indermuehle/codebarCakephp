<?php
App::uses('AppModel', 'Model');
/**
 * DeviceType Model
 *
 * @property DeviceBrand $DeviceBrand
 * @property DeviceCategory $DeviceCategory
 * @property Device $Device
 */
class DeviceType extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	public $actsAs = array('Containable');

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Brand' => array(
			'className' => 'Brand',
			'foreignKey' => 'brand_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DeviceCategory' => array(
			'className' => 'DeviceCategory',
			'foreignKey' => 'device_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Device' => array(
			'className' => 'Device',
			'foreignKey' => 'device_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
