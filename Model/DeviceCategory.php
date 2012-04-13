<?php
App::uses('AppModel', 'Model');
/**
 * DeviceCategory Model
 *
 */
class DeviceCategory extends AppModel {

	/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DeviceTypes' => array(
			'className' => 'DeviceTypes',
			'foreignKey' => 'device_category_id',
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
