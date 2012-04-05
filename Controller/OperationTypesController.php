<?php
App::uses('AppController', 'Controller');
/**
 * OperationTypes Controller
 *
 * @property OperationType $OperationType
 */
class OperationTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OperationType->recursive = 0;
		$this->set('operationTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OperationType->id = $id;
		if (!$this->OperationType->exists()) {
			throw new NotFoundException(__('Invalid operation type'));
		}
		$this->set('operationType', $this->OperationType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OperationType->create();
			if ($this->OperationType->save($this->request->data)) {
				$this->Session->setFlash(__('The operation type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation type could not be saved. Please, try again.'));
			}
		}
		$operationCategories = $this->OperationType->OperationCategory->find('list');
		$this->set(compact('operationCategories'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->OperationType->id = $id;
		if (!$this->OperationType->exists()) {
			throw new NotFoundException(__('Invalid operation type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OperationType->save($this->request->data)) {
				$this->Session->setFlash(__('The operation type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OperationType->read(null, $id);
		}
		$operationCategories = $this->OperationType->OperationCategory->find('list');
		$this->set(compact('operationCategories'));
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
		$this->OperationType->id = $id;
		if (!$this->OperationType->exists()) {
			throw new NotFoundException(__('Invalid operation type'));
		}
		if ($this->OperationType->delete()) {
			$this->Session->setFlash(__('Operation type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operation type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
