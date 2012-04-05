<?php
App::uses('AppController', 'Controller');
/**
 * Laptops Controller
 *
 * @property Laptop $Laptop
 */
class LaptopsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Laptop->recursive = 0;
		$this->set('laptops', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Laptop->id = $id;
		if (!$this->Laptop->exists()) {
			throw new NotFoundException(__('Invalid laptop'));
		}
		$this->set('laptop', $this->Laptop->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Laptop->create();
			if ($this->Laptop->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop could not be saved. Please, try again.'));
			}
		}
		$laptopTypes = $this->Laptop->LaptopType->find('list');
		$this->set(compact('laptopTypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Laptop->id = $id;
		if (!$this->Laptop->exists()) {
			throw new NotFoundException(__('Invalid laptop'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Laptop->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Laptop->read(null, $id);
		}
		$laptopTypes = $this->Laptop->LaptopType->find('list');
		$this->set(compact('laptopTypes'));
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
		$this->Laptop->id = $id;
		if (!$this->Laptop->exists()) {
			throw new NotFoundException(__('Invalid laptop'));
		}
		if ($this->Laptop->delete()) {
			$this->Session->setFlash(__('Laptop deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Laptop was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Laptop->recursive = 0;
		$this->set('laptops', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Laptop->id = $id;
		if (!$this->Laptop->exists()) {
			throw new NotFoundException(__('Invalid laptop'));
		}
		$this->set('laptop', $this->Laptop->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Laptop->create();
			if ($this->Laptop->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop could not be saved. Please, try again.'));
			}
		}
		$laptopTypes = $this->Laptop->LaptopType->find('list');
		$this->set(compact('laptopTypes'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Laptop->id = $id;
		if (!$this->Laptop->exists()) {
			throw new NotFoundException(__('Invalid laptop'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Laptop->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Laptop->read(null, $id);
		}
		$laptopTypes = $this->Laptop->LaptopType->find('list');
		$this->set(compact('laptopTypes'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Laptop->id = $id;
		if (!$this->Laptop->exists()) {
			throw new NotFoundException(__('Invalid laptop'));
		}
		if ($this->Laptop->delete()) {
			$this->Session->setFlash(__('Laptop deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Laptop was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
