<?php
App::uses('AppController', 'Controller');
/**
 * InterventionsProblems Controller
 *
 * @property InterventionsProblem $InterventionsProblem
 */
class InterventionsProblemsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InterventionsProblem->recursive = 0;
		$this->set('interventionsProblems', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->InterventionsProblem->id = $id;
		if (!$this->InterventionsProblem->exists()) {
			throw new NotFoundException(__('Invalid interventions problem'));
		}
		$this->set('interventionsProblem', $this->InterventionsProblem->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InterventionsProblem->create();
			if ($this->InterventionsProblem->save($this->request->data)) {
				$this->Session->setFlash(__('The interventions problem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interventions problem could not be saved. Please, try again.'));
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
		$this->InterventionsProblem->id = $id;
		if (!$this->InterventionsProblem->exists()) {
			throw new NotFoundException(__('Invalid interventions problem'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->InterventionsProblem->save($this->request->data)) {
				$this->Session->setFlash(__('The interventions problem has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interventions problem could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->InterventionsProblem->read(null, $id);
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
		$this->InterventionsProblem->id = $id;
		if (!$this->InterventionsProblem->exists()) {
			throw new NotFoundException(__('Invalid interventions problem'));
		}
		if ($this->InterventionsProblem->delete()) {
			$this->Session->setFlash(__('Interventions problem deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Interventions problem was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
