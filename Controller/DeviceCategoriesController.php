<?php
App::uses('AppController', 'Controller');
/**
 * DeviceCategories Controller
 *
 * @property DeviceCategory $DeviceCategory
 */
class DeviceCategoriesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DeviceCategory->recursive = 0;
		$this->set('deviceCategories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DeviceCategory->id = $id;
		if (!$this->DeviceCategory->exists()) {
			throw new NotFoundException(__('Invalid device category'));
		}
		$this->set('deviceCategory', $this->DeviceCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeviceCategory->create();
			if ($this->DeviceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The device category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device category could not be saved. Please, try again.'));
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
		$this->DeviceCategory->id = $id;
		if (!$this->DeviceCategory->exists()) {
			throw new NotFoundException(__('Invalid device category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DeviceCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The device category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DeviceCategory->read(null, $id);
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
		$this->DeviceCategory->id = $id;
		if (!$this->DeviceCategory->exists()) {
			throw new NotFoundException(__('Invalid device category'));
		}
		if ($this->DeviceCategory->delete()) {
			$this->Session->setFlash(__('Device category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Device category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
