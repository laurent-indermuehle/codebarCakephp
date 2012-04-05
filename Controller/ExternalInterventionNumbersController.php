<?php
App::uses('AppController', 'Controller');
/**
 * ExternalInterventionNumbers Controller
 *
 * @property ExternalInterventionNumber $ExternalInterventionNumber
 */
class ExternalInterventionNumbersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExternalInterventionNumber->recursive = 0;
		$this->set('externalInterventionNumbers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ExternalInterventionNumber->id = $id;
		if (!$this->ExternalInterventionNumber->exists()) {
			throw new NotFoundException(__('Invalid external intervention number'));
		}
		$this->set('externalInterventionNumber', $this->ExternalInterventionNumber->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExternalInterventionNumber->create();
			if ($this->ExternalInterventionNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The external intervention number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The external intervention number could not be saved. Please, try again.'));
			}
		}
		$interventions = $this->ExternalInterventionNumber->Intervention->find('list');
		$partners = $this->ExternalInterventionNumber->Partner->find('list');
		$externalInterventionNumberTypes = $this->ExternalInterventionNumber->ExternalInterventionNumberType->find('list');
		$this->set(compact('interventions', 'partners', 'externalInterventionNumberTypes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ExternalInterventionNumber->id = $id;
		if (!$this->ExternalInterventionNumber->exists()) {
			throw new NotFoundException(__('Invalid external intervention number'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExternalInterventionNumber->save($this->request->data)) {
				$this->Session->setFlash(__('The external intervention number has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The external intervention number could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ExternalInterventionNumber->read(null, $id);
		}
		$interventions = $this->ExternalInterventionNumber->Intervention->find('list');
		$partners = $this->ExternalInterventionNumber->Partner->find('list');
		$externalInterventionNumberTypes = $this->ExternalInterventionNumber->ExternalInterventionNumberType->find('list');
		$this->set(compact('interventions', 'partners', 'externalInterventionNumberTypes'));
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
		$this->ExternalInterventionNumber->id = $id;
		if (!$this->ExternalInterventionNumber->exists()) {
			throw new NotFoundException(__('Invalid external intervention number'));
		}
		if ($this->ExternalInterventionNumber->delete()) {
			$this->Session->setFlash(__('External intervention number deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('External intervention number was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
