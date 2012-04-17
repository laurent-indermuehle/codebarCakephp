<?php
App::uses('AppController', 'Controller');
/**
 * DeviceTypes Controller
 *
 * @property DeviceType $DeviceType
 */
class DeviceTypesController extends AppController {

/**
 * getBrandsByDeviceCategory method
 *
 * @return void
 */
	public function getBrandsByDeviceCategory() {
		$category = $this->request->data['Device']['device_category_id'];
		$brands = $this->DeviceType->find('all', array(
			'conditions' => array('DeviceType.device_category_id' => $category),
			'fields' => array('DISTINCT Brand.name'),
			'contain' => array('Brand')));
		$brandsList = set::combine($brands, '{n}.Brand.id', '{n}.Brand.name');
		$this->set('brandsList', $brandsList);
		$this->layout = 'ajax';
	}

/**
 * getByBrand method
 *
 * @return void
 */
	public function getByBrand() {
		$brand = $this->request->data['Device']['brand_id'];
		$category = $this->request->data['DeviceCategory']['device_category_id'];
		$deviceType = $this->DeviceType->find('list', array(
			'conditions' => array(
				'DeviceType.brand_id' => $brand,
				'DeviceType.device_category_id' => $category),
			'recursive' => -1
		));
		$this->set('deviceType', $deviceType);
		$this->layout = 'ajax';
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DeviceType->recursive = 0;
		$this->set('deviceTypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->DeviceType->id = $id;
		if (!$this->DeviceType->exists()) {
			throw new NotFoundException(__('Invalid device type'));
		}
		$this->set('deviceType', $this->DeviceType->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DeviceType->create();
			if ($this->DeviceType->save($this->request->data)) {
				$this->Session->setFlash(__('The device type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device type could not be saved. Please, try again.'));
			}
		}
		$this->set('deviceCategories', $this->DeviceType->DeviceCategory->find('list'));
		$this->set('brands', $this->DeviceType->Brand->find('list'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->DeviceType->id = $id;
		if (!$this->DeviceType->exists()) {
			throw new NotFoundException(__('Invalid device type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DeviceType->save($this->request->data)) {
				$this->Session->setFlash(__('The device type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The device type could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->DeviceType->read(null, $id);
		}
		$deviceTypes = $this->DeviceType->find('list');
		$this->set(compact('deviceTypes'));
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
		$this->DeviceType->id = $id;
		if (!$this->DeviceType->exists()) {
			throw new NotFoundException(__('Invalid device type'));
		}
		if ($this->DeviceType->delete()) {
			$this->Session->setFlash(__('Device type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Device type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
