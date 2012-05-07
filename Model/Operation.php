<?php
App::uses('AppModel', 'Model');
/**
 * Operation Model
 *
 * @property Intervention $Intervention
 * @property OperationType $OperationType
 * @property PersonTechnician $PersonTechnician
 * @property Location $Location
 * @property Estimate $Estimate
 */
class Operation extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'operation_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'person_technician_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'location_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Intervention' => array(
			'className' => 'Intervention',
			'foreignKey' => 'intervention_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OperationType' => array(
			'className' => 'OperationType',
			'foreignKey' => 'operation_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'PersonTechnician' => array(
			'className' => 'Person',
			'foreignKey' => 'person_technician_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Estimate' => array(
			'className' => 'Estimate',
			'foreignKey' => 'estimate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
