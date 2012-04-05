<?php
App::uses('AppController', 'Controller');
/**
 * Devices Controller
 *
 * @property Device $Device
 */
class DevicesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Device->recursive = 0;
		$this->set('devices', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Device->id = $id;
		if (!$this->Device->exists()) {
			throw new NotFoundException(__('Invalid device'));
		}
		$device = $this->Device->read(null, $id);
		$this->loadModel('DeviceType');
		$brand = $this->DeviceType->find('first', array(
			'conditions' => array('DeviceType.id' => $this->Device->field('device_type_id')),
			'fields' => array('Brand.name'),
			'contain' => array('Brand')));
		$this->set(compact('device', 'brand'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Device->create();
			if ($this->Device->save($this->request->data)) {
				$this->Session->setFlash(__('The device has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device could not be saved. Please, try again.'));
			}
		}
		$deviceTypes = $this->Device->DeviceType->find('list');
		$people = $this->Device->Person->find('list');
		$brands = $this->Device->DeviceType->Brand->find('list');
		$this->set(compact('deviceTypes', 'people', 'brands'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Device->id = $id;
		if (!$this->Device->exists()) {
			throw new NotFoundException(__('Invalid device'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Device->save($this->request->data)) {
				$this->Session->setFlash(__('The device has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Device->read(null, $id);
		}
		$deviceTypes = $this->Device->DeviceType->find('list');
		$people = $this->Device->Person->find('list');
		$problems = $this->Device->Problem->find('list');
		$causes = $this->Device->Cause->find('list');
		$this->set(compact('deviceTypes', 'people', 'problems', 'causes'));
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
		$this->Device->id = $id;
		if (!$this->Device->exists()) {
			throw new NotFoundException(__('Invalid device'));
		}
		if ($this->Device->delete()) {
			$this->Session->setFlash(__('Device deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Device was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
