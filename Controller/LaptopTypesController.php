<?php
App::uses('AppController', 'Controller');
/**
 * LaptopTypes Controller
 *
 * @property LaptopType $LaptopType
 */
class LaptopTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LaptopType->recursive = 0;
		$this->set('laptopTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->LaptopType->id = $id;
		if (!$this->LaptopType->exists()) {
			throw new NotFoundException(__('Invalid laptop type'));
		}
		$this->set('laptopType', $this->LaptopType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LaptopType->create();
			if ($this->LaptopType->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop type could not be saved. Please, try again.'));
			}
		}
		$brands = $this->LaptopType->Brand->find('list');
		$this->set(compact('brands'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->LaptopType->id = $id;
		if (!$this->LaptopType->exists()) {
			throw new NotFoundException(__('Invalid laptop type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LaptopType->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LaptopType->read(null, $id);
		}
		$brands = $this->LaptopType->Brand->find('list');
		$this->set(compact('brands'));
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
		$this->LaptopType->id = $id;
		if (!$this->LaptopType->exists()) {
			throw new NotFoundException(__('Invalid laptop type'));
		}
		if ($this->LaptopType->delete()) {
			$this->Session->setFlash(__('Laptop type deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Laptop type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LaptopType->recursive = 0;
		$this->set('laptopTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->LaptopType->id = $id;
		if (!$this->LaptopType->exists()) {
			throw new NotFoundException(__('Invalid laptop type'));
		}
		$this->set('laptopType', $this->LaptopType->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LaptopType->create();
			if ($this->LaptopType->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop type could not be saved. Please, try again.'));
			}
		}
		$brands = $this->LaptopType->Brand->find('list');
		$this->set(compact('brands'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->LaptopType->id = $id;
		if (!$this->LaptopType->exists()) {
			throw new NotFoundException(__('Invalid laptop type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LaptopType->save($this->request->data)) {
				$this->Session->setFlash(__('The laptop type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The laptop type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LaptopType->read(null, $id);
		}
		$brands = $this->LaptopType->Brand->find('list');
		$this->set(compact('brands'));
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
		$this->LaptopType->id = $id;
		if (!$this->LaptopType->exists()) {
			throw new NotFoundException(__('Invalid laptop type'));
		}
		if ($this->LaptopType->delete()) {
			$this->Session->setFlash(__('Laptop type deleted'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Laptop type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
