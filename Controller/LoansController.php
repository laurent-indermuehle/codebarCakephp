<?php
App::uses('AppController', 'Controller');
/**
 * Loans Controller
 *
 * @property Loan $Loan
 */
class LoansController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Loan->recursive = 0;
		$this->set('loans', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Loan->id = $id;
		if (!$this->Loan->exists()) {
			throw new NotFoundException(__('Invalid loan'));
		}
		$this->set('loan', $this->Loan->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Loan->create();
			if ($this->Loan->save($this->request->data)) {
				$this->Session->setFlash(__('The loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan could not be saved. Please, try again.'));
			}
		}
		$personCustomers = $this->Loan->PersonCustomer->find('list');
		$personTechnicians = $this->Loan->PersonTechnician->find('list');
		$personalLoans = $this->Loan->PersonalLoan->find('list');
		$technicalLoans = $this->Loan->TechnicalLoan->find('list');
		$this->set(compact('personCustomers', 'personTechnicians', 'personalLoans', 'technicalLoans'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Loan->id = $id;
		if (!$this->Loan->exists()) {
			throw new NotFoundException(__('Invalid loan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Loan->save($this->request->data)) {
				$this->Session->setFlash(__('The loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Loan->read(null, $id);
		}
		$personCustomers = $this->Loan->PersonCustomer->find('list');
		$personTechnicians = $this->Loan->PersonTechnician->find('list');
		$personalLoans = $this->Loan->PersonalLoan->find('list');
		$technicalLoans = $this->Loan->TechnicalLoan->find('list');
		$this->set(compact('personCustomers', 'personTechnicians', 'personalLoans', 'technicalLoans'));
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
		$this->Loan->id = $id;
		if (!$this->Loan->exists()) {
			throw new NotFoundException(__('Invalid loan'));
		}
		if ($this->Loan->delete()) {
			$this->Session->setFlash(__('Loan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Loan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
