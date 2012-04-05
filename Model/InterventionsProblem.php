<?php
App::uses('AppModel', 'Model');
/**
 * InterventionsProblem Model
 *
 * @property Problem $Problem
 * @property Intervention $Intervention
 */
class InterventionsProblem extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'problem_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'intervention_id' => array(
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
		'Problem' => array(
			'className' => 'Problem',
			'foreignKey' => 'problem_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Intervention' => array(
			'className' => 'Intervention',
			'foreignKey' => 'intervention_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
