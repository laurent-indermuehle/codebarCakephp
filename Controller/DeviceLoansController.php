<?php
App::uses('AppController', 'Controller');
/**
 * DeviceLoans Controller
 *
 * @property DeviceLoan $DeviceLoan
 */
class DeviceLoansController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DeviceLoan->recursive = 0;
		$this->set('deviceLoans', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DeviceLoan->id = $id;
		if (!$this->DeviceLoan->exists()) {
			throw new NotFoundException(__('Invalid device loan'));
		}
		$this->set('deviceLoan', $this->DeviceLoan->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeviceLoan->create();
			if ($this->DeviceLoan->save($this->request->data)) {
				$this->flash(__('Deviceloan saved.'), array('action' => 'index'));
			} else {
			}
		}
		$devices = $this->DeviceLoan->Device->find('list');
		$loans = $this->DeviceLoan->Loan->find('list');
		$personTechncianReturns = $this->DeviceLoan->PersonTechncianReturn->find('list');
		$this->set(compact('devices', 'loans', 'personTechncianReturns'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DeviceLoan->id = $id;
		if (!$this->DeviceLoan->exists()) {
			throw new NotFoundException(__('Invalid device loan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DeviceLoan->save($this->request->data)) {
				$this->flash(__('The device loan has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$this->request->data = $this->DeviceLoan->read(null, $id);
		}
		$devices = $this->DeviceLoan->Device->find('list');
		$loans = $this->DeviceLoan->Loan->find('list');
		$personTechncianReturns = $this->DeviceLoan->PersonTechncianReturn->find('list');
		$this->set(compact('devices', 'loans', 'personTechncianReturns'));
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
		$this->DeviceLoan->id = $id;
		if (!$this->DeviceLoan->exists()) {
			throw new NotFoundException(__('Invalid device loan'));
		}
		if ($this->DeviceLoan->delete()) {
			$this->flash(__('Device loan deleted'), array('action' => 'index'));
		}
		$this->flash(__('Device loan was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
