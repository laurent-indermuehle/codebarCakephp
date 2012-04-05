<?php
App::uses('AppController', 'Controller');
/**
 * Causes Controller
 *
 * @property Cause $Cause
 */
class CausesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cause->recursive = 0;
		$this->set('causes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cause->id = $id;
		if (!$this->Cause->exists()) {
			throw new NotFoundException(__('Invalid cause'));
		}
		$this->set('cause', $this->Cause->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cause->create();
			if ($this->Cause->save($this->request->data)) {
				$this->Session->setFlash(__('The cause has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cause could not be saved. Please, try again.'));
			}
		}
		$problems = $this->Cause->Problem->find('list');
		$devices = $this->Cause->Device->find('list');
		$diagnostics = $this->Cause->Diagnostic->find('list');
		$this->set(compact('problems', 'devices', 'diagnostics'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cause->id = $id;
		if (!$this->Cause->exists()) {
			throw new NotFoundException(__('Invalid cause'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cause->save($this->request->data)) {
				$this->Session->setFlash(__('The cause has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cause could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cause->read(null, $id);
		}
		$problems = $this->Cause->Problem->find('list');
		$devices = $this->Cause->Device->find('list');
		$diagnostics = $this->Cause->Diagnostic->find('list');
		$this->set(compact('problems', 'devices', 'diagnostics'));
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
		$this->Cause->id = $id;
		if (!$this->Cause->exists()) {
			throw new NotFoundException(__('Invalid cause'));
		}
		if ($this->Cause->delete()) {
			$this->Session->setFlash(__('Cause deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cause was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
