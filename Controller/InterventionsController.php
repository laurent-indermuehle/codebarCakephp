<?php
App::uses('AppController', 'Controller');
/**
 * Interventions Controller
 *
 * @property Intervention $Intervention
 */
class InterventionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$interventions = $this->paginate();
		$this->set(compact('interventions'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Intervention->id = $id;
		if (!$this->Intervention->exists()) {
			throw new NotFoundException(__('Invalid intervention'));
		}
		$intervention = $this->Intervention->read(null, $id);
		// retrive the device_type name.
		$this->loadModel('DeviceType');
		$deviceType = $this->DeviceType->find('first', array(
			'fields' => array('name'),
			'conditions' => array('DeviceType.id' => $this->Intervention->Device->field('device_type_id')),
			'recursive' => -1));
		$this->set(compact('intervention', 'deviceType'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Intervention->create();
			if ($this->Intervention->save($this->request->data)) {
				$this->Session->setFlash(__('The intervention has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intervention could not be saved. Please, try again.'));
			}
		}
		$devices = $this->Intervention->Device->find('list');
		$problems = $this->Intervention->Problem->find('list');
		$this->set(compact('devices', 'problems'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Intervention->id = $id;
		if (!$this->Intervention->exists()) {
			throw new NotFoundException(__('Invalid intervention'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Intervention->save($this->request->data)) {
				$this->Session->setFlash(__('The intervention has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The intervention could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Intervention->read(null, $id);
		}
		$devices = $this->Intervention->Device->find('list');
		$problems = $this->Intervention->Problem->find('list');
		$this->set(compact('devices', 'problems'));
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
		$this->Intervention->id = $id;
		if (!$this->Intervention->exists()) {
			throw new NotFoundException(__('Invalid intervention'));
		}
		if ($this->Intervention->delete()) {
			$this->Session->setFlash(__('Intervention deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Intervention was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
