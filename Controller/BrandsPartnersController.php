<?php
App::uses('AppController', 'Controller');
/**
 * BrandsPartners Controller
 *
 * @property BrandsPartner $BrandsPartner
 */
class BrandsPartnersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BrandsPartner->recursive = 0;
		$this->set('brandsPartners', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->BrandsPartner->id = $id;
		if (!$this->BrandsPartner->exists()) {
			throw new NotFoundException(__('Invalid brands partner'));
		}
		$this->set('brandsPartner', $this->BrandsPartner->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BrandsPartner->create();
			if ($this->BrandsPartner->save($this->request->data)) {
				$this->Session->setFlash(__('The brands partner has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brands partner could not be saved. Please, try again.'));
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
		$this->BrandsPartner->id = $id;
		if (!$this->BrandsPartner->exists()) {
			throw new NotFoundException(__('Invalid brands partner'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->BrandsPartner->save($this->request->data)) {
				$this->Session->setFlash(__('The brands partner has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brands partner could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->BrandsPartner->read(null, $id);
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
		$this->BrandsPartner->id = $id;
		if (!$this->BrandsPartner->exists()) {
			throw new NotFoundException(__('Invalid brands partner'));
		}
		if ($this->BrandsPartner->delete()) {
			$this->Session->setFlash(__('Brands partner deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Brands partner was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
