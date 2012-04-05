<?php
App::uses('AppController', 'Controller');
/**
 * OperationCategories Controller
 *
 * @property OperationCategory $OperationCategory
 */
class OperationCategoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->OperationCategory->recursive = 0;
		$this->set('operationCategories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->OperationCategory->id = $id;
		if (!$this->OperationCategory->exists()) {
			throw new NotFoundException(__('Invalid operation category'));
		}
		$this->set('operationCategory', $this->OperationCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OperationCategory->create();
			if ($this->OperationCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The operation category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation category could not be saved. Please, try again.'));
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
		$this->OperationCategory->id = $id;
		if (!$this->OperationCategory->exists()) {
			throw new NotFoundException(__('Invalid operation category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OperationCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The operation category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The operation category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->OperationCategory->read(null, $id);
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
		$this->OperationCategory->id = $id;
		if (!$this->OperationCategory->exists()) {
			throw new NotFoundException(__('Invalid operation category'));
		}
		if ($this->OperationCategory->delete()) {
			$this->Session->setFlash(__('Operation category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Operation category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
