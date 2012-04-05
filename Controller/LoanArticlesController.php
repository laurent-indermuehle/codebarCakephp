<?php
App::uses('AppController', 'Controller');
/**
 * LoanArticles Controller
 *
 * @property LoanArticle $LoanArticle
 */
class LoanArticlesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LoanArticle->recursive = 0;
		$this->set('loanArticles', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->LoanArticle->id = $id;
		if (!$this->LoanArticle->exists()) {
			throw new NotFoundException(__('Invalid loan article'));
		}
		$this->set('loanArticle', $this->LoanArticle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LoanArticle->create();
			if ($this->LoanArticle->save($this->request->data)) {
				$this->Session->setFlash(__('The loan article has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan article could not be saved. Please, try again.'));
			}
		}
		$articles = $this->LoanArticle->Article->find('list');
		$loans = $this->LoanArticle->Loan->find('list');
		$personTechnicianReturns = $this->LoanArticle->PersonTechnicianReturn->find('list');
		$this->set(compact('articles', 'loans', 'personTechnicianReturns'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->LoanArticle->id = $id;
		if (!$this->LoanArticle->exists()) {
			throw new NotFoundException(__('Invalid loan article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LoanArticle->save($this->request->data)) {
				$this->Session->setFlash(__('The loan article has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The loan article could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LoanArticle->read(null, $id);
		}
		$articles = $this->LoanArticle->Article->find('list');
		$loans = $this->LoanArticle->Loan->find('list');
		$personTechnicianReturns = $this->LoanArticle->PersonTechnicianReturn->find('list');
		$this->set(compact('articles', 'loans', 'personTechnicianReturns'));
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
		$this->LoanArticle->id = $id;
		if (!$this->LoanArticle->exists()) {
			throw new NotFoundException(__('Invalid loan article'));
		}
		if ($this->LoanArticle->delete()) {
			$this->Session->setFlash(__('Loan article deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Loan article was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
