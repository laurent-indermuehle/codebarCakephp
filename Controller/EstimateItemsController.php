<?php
App::uses('AppController', 'Controller');
/**
 * EstimateItems Controller
 *
 * @property EstimateItem $EstimateItem
 */
class EstimateItemsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EstimateItem->recursive = 0;
		$this->set('estimateItems', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EstimateItem->id = $id;
		if (!$this->EstimateItem->exists()) {
			throw new NotFoundException(__('Invalid estimate item'));
		}
		$this->set('estimateItem', $this->EstimateItem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstimateItem->create();
			if ($this->EstimateItem->save($this->request->data)) {
				$this->Session->setFlash(__('The estimate item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimate item could not be saved. Please, try again.'));
			}
		}
		$estimates = $this->EstimateItem->Estimate->find('list');
		$this->set(compact('estimates'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EstimateItem->id = $id;
		if (!$this->EstimateItem->exists()) {
			throw new NotFoundException(__('Invalid estimate item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstimateItem->save($this->request->data)) {
				$this->Session->setFlash(__('The estimate item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimate item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EstimateItem->read(null, $id);
		}
		$estimates = $this->EstimateItem->Estimate->find('list');
		$this->set(compact('estimates'));
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
		$this->EstimateItem->id = $id;
		if (!$this->EstimateItem->exists()) {
			throw new NotFoundException(__('Invalid estimate item'));
		}
		if ($this->EstimateItem->delete()) {
			$this->Session->setFlash(__('Estimate item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estimate item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
