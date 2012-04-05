<?php
App::uses('AppController', 'Controller');
/**
 * Operations Controller
 *
 * @property Operation $Operation
 */
class OperationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Operation->recursive = 0;
		$this->set('operations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		$this->set('operation', $this->Operation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Operation->create();
			if ($this->Operation->save($this->request->data)) {
				$this->Session->setFlash(__('The operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.'));
			}
		}
		$interventions = $this->Operation->Intervention->find('list');
		$operationTypes = $this->Operation->OperationType->find('list');
		$personTechnicians = $this->Operation->PersonTechnician->find('list');
		$locations = $this->Operation->Location->find('list');
		$estimates = $this->Operation->Estimate->find('list');
		$this->set(compact('interventions', 'operationTypes', 'personTechnicians', 'locations', 'estimates'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Operation->save($this->request->data)) {
				$this->Session->setFlash(__('The operation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Operation->read(null, $id);
		}
		$interventions = $this->Operation->Intervention->find('list');
		$operationTypes = $this->Operation->OperationType->find('list');
		$personTechnicians = $this->Operation->PersonTechnician->find('list');
		$locations = $this->Operation->Location->find('list');
		$estimates = $this->Operation->Estimate->find('list');
		$this->set(compact('interventions', 'operationTypes', 'personTechnicians', 'locations', 'estimates'));
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
		$this->Operation->id = $id;
		if (!$this->Operation->exists()) {
			throw new NotFoundException(__('Invalid operation'));
		}
		if ($this->Operation->delete()) {
			$this->Session->setFlash(__('Operation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
