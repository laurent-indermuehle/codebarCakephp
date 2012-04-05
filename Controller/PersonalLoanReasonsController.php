<?php
App::uses('AppController', 'Controller');
/**
 * PersonalLoanReasons Controller
 *
 * @property PersonalLoanReason $PersonalLoanReason
 */
class PersonalLoanReasonsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonalLoanReason->recursive = 0;
		$this->set('personalLoanReasons', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PersonalLoanReason->id = $id;
		if (!$this->PersonalLoanReason->exists()) {
			throw new NotFoundException(__('Invalid personal loan reason'));
		}
		$this->set('personalLoanReason', $this->PersonalLoanReason->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonalLoanReason->create();
			if ($this->PersonalLoanReason->save($this->request->data)) {
				$this->Session->setFlash(__('The personal loan reason has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal loan reason could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PersonalLoanReason->id = $id;
		if (!$this->PersonalLoanReason->exists()) {
			throw new NotFoundException(__('Invalid personal loan reason'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonalLoanReason->save($this->request->data)) {
				$this->Session->setFlash(__('The personal loan reason has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal loan reason could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PersonalLoanReason->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PersonalLoanReason->id = $id;
		if (!$this->PersonalLoanReason->exists()) {
			throw new NotFoundException(__('Invalid personal loan reason'));
		}
		if ($this->PersonalLoanReason->delete()) {
			$this->Session->setFlash(__('Personal loan reason deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Personal loan reason was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
