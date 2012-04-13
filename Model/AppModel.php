<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	public $actsAs = array('Containable');

	// -- ---------- --
	// -- HUMAN DATE -- BEGIN
	// -- ---------- --

	// We want to have human date in views
	public function afterFind($results, $primary) {

		// Let parent do his job
		$results = parent::afterFind($results, $primary);

		// Return the modified results array
		return $this->doAfterFind($results);
	}

	// Implementation function for afterFind()
	private function doAfterFind($results) {

		// Loop on the results of the find() function
		foreach ($results as $key => $value) {

			// If it is a sub-array, call this function recusively
			if(is_array($value))
				$results[$key] = $this->doAfterFind($value);

			// Else if we found 'date' in the name of the table's field
			// (case insensitive)
			else if(stripos($key, 'date') !== false) {

				// Change the timestamp in a human date
				// (if it's not a valid timestamp, change to a empty string)
				$timestamp = (int)$value;
				$results[$key] = $timestamp ? date('D d M Y H:i', $timestamp) : '';
			}
		}

		// Return the modified results array
		return $results;
	}

	// We want to be able to use human date in form
	public function beforeValidate() {

		// Pass the form datas
		$this->data = $this->doBeforeValidate($this->data);

		// All OK, we changed all dates to timestamp
		// And let parent do his job
		return parent::beforeValidate();
	}

	// Implementation function for beforeValidate()
	private function doBeforeValidate($data) {

		// Loop on the form datas
		foreach ($data as $key => $value) {

			// If it is a sub-array, call this function recusively
			if(is_array($value))
				$data[$key] = $this->doBeforeValidate($value);

			// Else if we found 'date' in the name of the form's field
			// (case insensitive)
			else if(stripos($key, 'date') !== false) {

				// Change the human date to timestamp
				$data[$key] = (string)strtotime($value);
			}
		}

		// Return the modified form datas
		return $data;
	}

	// -- ---------- --
	// -- HUMAN DATE -- END
	// -- ---------- --
}
