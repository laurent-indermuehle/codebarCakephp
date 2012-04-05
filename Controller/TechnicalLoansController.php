<?php
App::uses('AppController', 'Controller');
/**
 * TechnicalLoans Controller
 *
 * @property TechnicalLoan $TechnicalLoan
 */
class TechnicalLoansController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TechnicalLoan->recursive = 0;
		$this->set('technicalLoans', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TechnicalLoan->id = $id;
		if (!$this->TechnicalLoan->exists()) {
			throw new NotFoundException(__('Invalid technical loan'));
		}
		$this->set('technicalLoan', $this->TechnicalLoan->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TechnicalLoan->create();
			if ($this->TechnicalLoan->save($this->request->data)) {
				$this->Session->setFlash(__('The technical loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technical loan could not be saved. Please, try again.'));
			}
		}
		$interventions = $this->TechnicalLoan->Intervention->find('list');
		$loans = $this->TechnicalLoan->Loan->find('list');
		$this->set(compact('interventions', 'loans'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->TechnicalLoan->id = $id;
		if (!$this->TechnicalLoan->exists()) {
			throw new NotFoundException(__('Invalid technical loan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TechnicalLoan->save($this->request->data)) {
				$this->Session->setFlash(__('The technical loan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technical loan could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TechnicalLoan->read(null, $id);
		}
		$interventions = $this->TechnicalLoan->Intervention->find('list');
		$loans = $this->TechnicalLoan->Loan->find('list');
		$this->set(compact('interventions', 'loans'));
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
		$this->TechnicalLoan->id = $id;
		if (!$this->TechnicalLoan->exists()) {
			throw new NotFoundException(__('Invalid technical loan'));
		}
		if ($this->TechnicalLoan->delete()) {
			$this->Session->setFlash(__('Technical loan deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Technical loan was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
