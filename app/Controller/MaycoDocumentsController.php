<?php
App::uses('AppController', 'Controller');
/**
 * MaycoDocuments Controller
 *
 * @property MaycoDocument $MaycoDocument
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MaycoDocumentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MaycoDocument->recursive = 0;
		$this->set('maycoDocuments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MaycoDocument->exists($id)) {
			throw new NotFoundException(__('Invalid mayco document'));
		}
		$options = array('conditions' => array('MaycoDocument.' . $this->MaycoDocument->primaryKey => $id));
		$this->set('maycoDocument', $this->MaycoDocument->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MaycoDocument->create();
			if ($this->MaycoDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The mayco document has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mayco document could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->MaycoDocument->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MaycoDocument->exists($id)) {
			throw new NotFoundException(__('Invalid mayco document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MaycoDocument->save($this->request->data)) {
				$this->Session->setFlash(__('The mayco document has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mayco document could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('MaycoDocument.' . $this->MaycoDocument->primaryKey => $id));
			$this->request->data = $this->MaycoDocument->find('first', $options);
		}
		$users = $this->MaycoDocument->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MaycoDocument->id = $id;
		if (!$this->MaycoDocument->exists()) {
			throw new NotFoundException(__('Invalid mayco document'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MaycoDocument->delete()) {
			$this->Session->setFlash(__('The mayco document has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The mayco document could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
