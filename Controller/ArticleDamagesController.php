<?php
App::uses('AppController', 'Controller');
/**
 * ArticleDamages Controller
 *
 * @property ArticleDamage $ArticleDamage
 */
class ArticleDamagesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ArticleDamage->recursive = 0;
		$this->set('articleDamages', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ArticleDamage->id = $id;
		if (!$this->ArticleDamage->exists()) {
			throw new NotFoundException(__('Invalid article damage'));
		}
		$this->set('articleDamage', $this->ArticleDamage->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ArticleDamage->create();
			if ($this->ArticleDamage->save($this->request->data)) {
				$this->Session->setFlash(__('The article damage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article damage could not be saved. Please, try again.'));
			}
		}
		$articles = $this->ArticleDamage->Article->find('list');
		$this->set(compact('articles'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ArticleDamage->id = $id;
		if (!$this->ArticleDamage->exists()) {
			throw new NotFoundException(__('Invalid article damage'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ArticleDamage->save($this->request->data)) {
				$this->Session->setFlash(__('The article damage has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article damage could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ArticleDamage->read(null, $id);
		}
		$articles = $this->ArticleDamage->Article->find('list');
		$this->set(compact('articles'));
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
		$this->ArticleDamage->id = $id;
		if (!$this->ArticleDamage->exists()) {
			throw new NotFoundException(__('Invalid article damage'));
		}
		if ($this->ArticleDamage->delete()) {
			$this->Session->setFlash(__('Article damage deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Article damage was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
