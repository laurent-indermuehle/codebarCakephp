<?php
App::uses('AppModel', 'Model');
/**
 * Cause Model
 *
 * @property DevicesProblem $DevicesProblem
 * @property Diagnostic $Diagnostic
 */
class Cause extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Problem' => array(
			'className' => 'Problem',
			'joinTable' => 'causes_devices_problems',
			'foreignKey' => 'cause_id',
			'associationForeignKey' => 'problem_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Device' => array(
			'className' => 'Device',
			'joinTable' => 'causes_devices_problems',
			'foreignKey' => 'cause_id',
			'associationForeignKey' => 'device_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Diagnostic' => array(
			'className' => 'Diagnostic',
			'joinTable' => 'causes_diagnostics',
			'foreignKey' => 'cause_id',
			'associationForeignKey' => 'diagnostic_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
