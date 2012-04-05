<?php
App::uses('AppController', 'Controller');
/**
 * ProblemCategories Controller
 *
 * @property ProblemCategory $ProblemCategory
 */
class ProblemCategoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ProblemCategory->recursive = 0;
		$this->set('problemCategories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ProblemCategory->id = $id;
		if (!$this->ProblemCategory->exists()) {
			throw new NotFoundException(__('Invalid problem category'));
		}
		$this->set('problemCategory', $this->ProblemCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProblemCategory->create();
			if ($this->ProblemCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The problem category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The problem category could not be saved. Please, try again.'));
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
		$this->ProblemCategory->id = $id;
		if (!$this->ProblemCategory->exists()) {
			throw new NotFoundException(__('Invalid problem category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ProblemCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The problem category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The problem category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ProblemCategory->read(null, $id);
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
		$this->ProblemCategory->id = $id;
		if (!$this->ProblemCategory->exists()) {
			throw new NotFoundException(__('Invalid problem category'));
		}
		if ($this->ProblemCategory->delete()) {
			$this->Session->setFlash(__('Problem category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Problem category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
