<?php
App::uses('AppModel', 'Model');
/**
 * Problem Model
 *
 * @property ProblemCategory $ProblemCategory
 * @property CausesDevice $CausesDevice
 * @property Intervention $Intervention
 */
class Problem extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'problem_category_id' => array(
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
		'ProblemCategory' => array(
			'className' => 'ProblemCategory',
			'foreignKey' => 'problem_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cause' => array(
			'className' => 'Cause',
			'joinTable' => 'causes_devices_problems',
			'foreignKey' => 'problem_id',
			'associationForeignKey' => 'causes_id',
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
		'Intervention' => array(
			'className' => 'Intervention',
			'joinTable' => 'interventions_problems',
			'foreignKey' => 'problem_id',
			'associationForeignKey' => 'intervention_id',
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
