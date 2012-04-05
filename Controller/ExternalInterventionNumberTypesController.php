<?php
App::uses('AppController', 'Controller');
/**
 * ExternalInterventionNumberTypes Controller
 *
 * @property ExternalInterventionNumberType $ExternalInterventionNumberType
 */
class ExternalInterventionNumberTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExternalInterventionNumberType->recursive = 0;
		$this->set('externalInterventionNumberTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ExternalInterventionNumberType->id = $id;
		if (!$this->ExternalInterventionNumberType->exists()) {
			throw new NotFoundException(__('Invalid external intervention number type'));
		}
		$this->set('externalInterventionNumberType', $this->ExternalInterventionNumberType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExternalInterventionNumberType->create();
			if ($this->ExternalInterventionNumberType->save($this->request->data)) {
				$this->Session->setFlash(__('The external intervention number type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The external intervention number type could not be saved. Please, try again.'));
			}
		}
		$partners = $this->ExternalInterventionNumberType->Partner->find('list');
		$this->set(compact('partners'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ExternalInterventionNumberType->id = $id;
		if (!$this->ExternalInterventionNumberType->exists()) {
			throw new NotFoundException(__('Invalid external intervention number type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExternalInterventionNumberType->save($this->request->data)) {
				$this->Session->setFlash(__('The external intervention number type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The external intervention number type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ExternalInterventionNumberType->read(null, $id);
		}
		$partners = $this->ExternalInterventionNumberType->Partner->find('list');
		$this->set(compact('partners'));
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
		$this->ExternalInterventionNumberType->id = $id;
		if (!$this->ExternalInterventionNumberType->exists()) {
			throw new NotFoundException(__('Invalid external intervention number type'));
		}
		if ($this->ExternalInterventionNumberType->delete()) {
			$this->Session->setFlash(__('External intervention number type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('External intervention number type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
