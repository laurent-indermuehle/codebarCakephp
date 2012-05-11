<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 */
class PeopleController extends AppController {

	public $helpers = array('DataTable.DataTable');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Person->recursive = 0;
		$this->set('people', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		}
		$languages = $this->Person->Language->find('list');
		$partners = $this->Person->Partner->find('list');
		$this->set(compact('languages', 'partners'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		} else {
			//$this->Person->recursive = 2;
			$this->request->data = $this->Person->read(null, $id);
		}
		$languages =  $this->Person->Language->find('list');
		$devices = $this->Person->getPersonDevices();
		$loans = $this->Person->getPersonLoans();
		$this->set(compact('languages', 'devices', 'loans'));
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
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->Person->delete()) {
			$this->Session->setFlash(__('Person deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Person was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * Components
 *
 * @var array
 */
    public $components = array(
		'DataTable.DataTable' => array(
			'columns' => array(
				'id' => false,
				'sciper' => 'Sciper',
				'first_name' => 'First name',
				'last_name' => 'Last name',
				'email' => 'Email',
				'phone_number' => 'Phone number',
				'is_technician' => 'Is technician',
				'is_banned' => 'Is banned',
				'Language.name' => 'Language',
				'partner_id' => 'Partner',
				'Actions' => null
			)
		)
	);
}