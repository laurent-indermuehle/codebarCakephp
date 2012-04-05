<?php
App::uses('AppController', 'Controller');
/**
 * CausesDiagnostics Controller
 *
 * @property CausesDiagnostic $CausesDiagnostic
 */
class CausesDiagnosticsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CausesDiagnostic->recursive = 0;
		$this->set('causesDiagnostics', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CausesDiagnostic->id = $id;
		if (!$this->CausesDiagnostic->exists()) {
			throw new NotFoundException(__('Invalid causes diagnostic'));
		}
		$this->set('causesDiagnostic', $this->CausesDiagnostic->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CausesDiagnostic->create();
			if ($this->CausesDiagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('The causes diagnostic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The causes diagnostic could not be saved. Please, try again.'));
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
		$this->CausesDiagnostic->id = $id;
		if (!$this->CausesDiagnostic->exists()) {
			throw new NotFoundException(__('Invalid causes diagnostic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CausesDiagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('The causes diagnostic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The causes diagnostic could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CausesDiagnostic->read(null, $id);
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
		$this->CausesDiagnostic->id = $id;
		if (!$this->CausesDiagnostic->exists()) {
			throw new NotFoundException(__('Invalid causes diagnostic'));
		}
		if ($this->CausesDiagnostic->delete()) {
			$this->Session->setFlash(__('Causes diagnostic deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Causes diagnostic was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
