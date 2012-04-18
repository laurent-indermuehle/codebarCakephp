<?php
App::uses('AppController', 'Controller');
/**
 * DeviceDamages Controller
 *
 * @property DeviceDamage $DeviceDamage
 */
class DeviceDamagesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DeviceDamage->recursive = 0;
		$this->set('deviceDamages', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DeviceDamage->id = $id;
		if (!$this->DeviceDamage->exists()) {
			throw new NotFoundException(__('Invalid device damage'));
		}
		$this->set('deviceDamage', $this->DeviceDamage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeviceDamage->create();
			if ($this->DeviceDamage->save($this->request->data)) {
				$this->Session->setFlash(__('The device damage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device damage could not be saved. Please, try again.'));
			}
		}
		$devices = $this->DeviceDamage->Device->find('list');
		$this->set(compact('devices'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DeviceDamage->id = $id;
		if (!$this->DeviceDamage->exists()) {
			throw new NotFoundException(__('Invalid device damage'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DeviceDamage->save($this->request->data)) {
				$this->Session->setFlash(__('The device damage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device damage could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DeviceDamage->read(null, $id);
		}
		$devices = $this->DeviceDamage->Device->find('list');
		$this->set(compact('devices'));
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
		$this->DeviceDamage->id = $id;
		if (!$this->DeviceDamage->exists()) {
			throw new NotFoundException(__('Invalid device damage'));
		}
		if ($this->DeviceDamage->delete()) {
			$this->Session->setFlash(__('Device damage deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Device damage was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
