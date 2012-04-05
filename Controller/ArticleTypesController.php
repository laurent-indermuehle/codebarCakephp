<?php
App::uses('AppController', 'Controller');
/**
 * ArticleTypes Controller
 *
 * @property ArticleType $ArticleType
 */
class ArticleTypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ArticleType->recursive = 0;
		$this->set('articleTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ArticleType->id = $id;
		if (!$this->ArticleType->exists()) {
			throw new NotFoundException(__('Invalid article type'));
		}
		$this->set('articleType', $this->ArticleType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArticleType->create();
			if ($this->ArticleType->save($this->request->data)) {
				$this->Session->setFlash(__('The article type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article type could not be saved. Please, try again.'));
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
		$this->ArticleType->id = $id;
		if (!$this->ArticleType->exists()) {
			throw new NotFoundException(__('Invalid article type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ArticleType->save($this->request->data)) {
				$this->Session->setFlash(__('The article type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ArticleType->read(null, $id);
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
		$this->ArticleType->id = $id;
		if (!$this->ArticleType->exists()) {
			throw new NotFoundException(__('Invalid article type'));
		}
		if ($this->ArticleType->delete()) {
			$this->Session->setFlash(__('Article type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Article type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
