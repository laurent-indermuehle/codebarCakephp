<?php
App::uses('AppController', 'Controller');
/**
 * CausesDevicesProblems Controller
 *
 * @property CausesDevicesProblem $CausesDevicesProblem
 */
class CausesDevicesProblemsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CausesDevicesProblem->recursive = 0;
		$this->set('causesDevicesProblems', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CausesDevicesProblem->id = $id;
		if (!$this->CausesDevicesProblem->exists()) {
			throw new NotFoundException(__('Invalid causes devices problem'));
		}
		$this->set('causesDevicesProblem', $this->CausesDevicesProblem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CausesDevicesProblem->create();
			if ($this->CausesDevicesProblem->save($this->request->data)) {
				$this->Session->setFlash(__('The causes devices problem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The causes devices problem could not be saved. Please, try again.'));
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
		$this->CausesDevicesProblem->id = $id;
		if (!$this->CausesDevicesProblem->exists()) {
			throw new NotFoundException(__('Invalid causes devices problem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CausesDevicesProblem->save($this->request->data)) {
				$this->Session->setFlash(__('The causes devices problem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The causes devices problem could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CausesDevicesProblem->read(null, $id);
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
		$this->CausesDevicesProblem->id = $id;
		if (!$this->CausesDevicesProblem->exists()) {
			throw new NotFoundException(__('Invalid causes devices problem'));
		}
		if ($this->CausesDevicesProblem->delete()) {
			$this->Session->setFlash(__('Causes devices problem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Causes devices problem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
