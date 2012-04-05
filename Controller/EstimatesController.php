<?php
App::uses('AppController', 'Controller');
/**
 * Estimates Controller
 *
 * @property Estimate $Estimate
 */
class EstimatesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Estimate->recursive = 0;
		$this->set('estimates', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Estimate->id = $id;
		if (!$this->Estimate->exists()) {
			throw new NotFoundException(__('Invalid estimate'));
		}
		$this->set('estimate', $this->Estimate->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estimate->create();
			if ($this->Estimate->save($this->request->data)) {
				$this->Session->setFlash(__('The estimate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimate could not be saved. Please, try again.'));
			}
		}
		$interventions = $this->Estimate->Intervention->find('list');
		$externalInterventionNumbers = $this->Estimate->ExternalInterventionNumber->find('list');
		$this->set(compact('interventions', 'externalInterventionNumbers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Estimate->id = $id;
		if (!$this->Estimate->exists()) {
			throw new NotFoundException(__('Invalid estimate'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Estimate->save($this->request->data)) {
				$this->Session->setFlash(__('The estimate has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estimate could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Estimate->read(null, $id);
		}
		$interventions = $this->Estimate->Intervention->find('list');
		$externalInterventionNumbers = $this->Estimate->ExternalInterventionNumber->find('list');
		$this->set(compact('interventions', 'externalInterventionNumbers'));
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
		$this->Estimate->id = $id;
		if (!$this->Estimate->exists()) {
			throw new NotFoundException(__('Invalid estimate'));
		}
		if ($this->Estimate->delete()) {
			$this->Session->setFlash(__('Estimate deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estimate was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
