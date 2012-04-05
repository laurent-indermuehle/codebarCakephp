<?php
App::uses('AppController', 'Controller');
/**
 * PersonalLoans Controller
 *
 * @property PersonalLoan $PersonalLoan
 */
class PersonalLoansController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PersonalLoan->recursive = 0;
		$this->set('personalLoans', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PersonalLoan->id = $id;
		if (!$this->PersonalLoan->exists()) {
			throw new NotFoundException(__('Invalid personal loan'));
		}
		$this->set('personalLoan', $this->PersonalLoan->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PersonalLoan->create();
			if ($this->PersonalLoan->save($this->request->data)) {
				$this->Session->setFlash(__('The personal loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal loan could not be saved. Please, try again.'));
			}
		}
		$loans = $this->PersonalLoan->Loan->find('list');
		$personalLoanReasons = $this->PersonalLoan->PersonalLoanReason->find('list');
		$this->set(compact('loans', 'personalLoanReasons'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->PersonalLoan->id = $id;
		if (!$this->PersonalLoan->exists()) {
			throw new NotFoundException(__('Invalid personal loan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PersonalLoan->save($this->request->data)) {
				$this->Session->setFlash(__('The personal loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The personal loan could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PersonalLoan->read(null, $id);
		}
		$loans = $this->PersonalLoan->Loan->find('list');
		$personalLoanReasons = $this->PersonalLoan->PersonalLoanReason->find('list');
		$this->set(compact('loans', 'personalLoanReasons'));
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
		$this->PersonalLoan->id = $id;
		if (!$this->PersonalLoan->exists()) {
			throw new NotFoundException(__('Invalid personal loan'));
		}
		if ($this->PersonalLoan->delete()) {
			$this->Session->setFlash(__('Personal loan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Personal loan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
