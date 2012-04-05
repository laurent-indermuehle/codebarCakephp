<?php
App::uses('AppModel', 'Model');
/**
 * Diagnostic Model
 *
 * @property Cause $Cause
 */
class Diagnostic extends AppModel {

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cause' => array(
			'className' => 'Cause',
			'joinTable' => 'causes_diagnostics',
			'foreignKey' => 'diagnostic_id',
			'associationForeignKey' => 'cause_id',
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
