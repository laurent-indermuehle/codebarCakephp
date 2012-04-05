<?php
App::uses('AppController', 'Controller');
/**
 * Diagnostics Controller
 *
 * @property Diagnostic $Diagnostic
 */
class DiagnosticsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Diagnostic->recursive = 0;
		$this->set('diagnostics', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Diagnostic->id = $id;
		if (!$this->Diagnostic->exists()) {
			throw new NotFoundException(__('Invalid diagnostic'));
		}
		$this->set('diagnostic', $this->Diagnostic->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Diagnostic->create();
			if ($this->Diagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnostic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostic could not be saved. Please, try again.'));
			}
		}
		$causes = $this->Diagnostic->Cause->find('list');
		$this->set(compact('causes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Diagnostic->id = $id;
		if (!$this->Diagnostic->exists()) {
			throw new NotFoundException(__('Invalid diagnostic'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Diagnostic->save($this->request->data)) {
				$this->Session->setFlash(__('The diagnostic has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostic could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Diagnostic->read(null, $id);
		}
		$causes = $this->Diagnostic->Cause->find('list');
		$this->set(compact('causes'));
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
		$this->Diagnostic->id = $id;
		if (!$this->Diagnostic->exists()) {
			throw new NotFoundException(__('Invalid diagnostic'));
		}
		if ($this->Diagnostic->delete()) {
			$this->Session->setFlash(__('Diagnostic deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Diagnostic was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
