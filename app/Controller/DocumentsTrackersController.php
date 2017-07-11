<?php
App::uses('AppController', 'Controller');
/**
 * DocumentsTrackers Controller
 *
 * @property DocumentsTracker $DocumentsTracker
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DocumentsTrackersController extends AppController {

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
		$this->DocumentsTracker->recursive = 0;
		$this->set('documentsTrackers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DocumentsTracker->exists($id)) {
			throw new NotFoundException(__('Invalid documents tracker'));
		}
		$options = array('conditions' => array('DocumentsTracker.' . $this->DocumentsTracker->primaryKey => $id));
		$this->set('documentsTracker', $this->DocumentsTracker->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DocumentsTracker->create();
			if ($this->DocumentsTracker->save($this->request->data)) {
				$this->Flash->success(__('The documents tracker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The documents tracker could not be saved. Please, try again.'));
			}
		}
		$documents = $this->DocumentsTracker->Document->find('list');
		$statuses = $this->DocumentsTracker->Status->find('list');
		$levels = $this->DocumentsTracker->Level->find('list');
		$this->set(compact('documents', 'statuses', 'levels'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DocumentsTracker->exists($id)) {
			throw new NotFoundException(__('Invalid documents tracker'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DocumentsTracker->save($this->request->data)) {
				$this->Flash->success(__('The documents tracker has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The documents tracker could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DocumentsTracker.' . $this->DocumentsTracker->primaryKey => $id));
			$this->request->data = $this->DocumentsTracker->find('first', $options);
		}
		$documents = $this->DocumentsTracker->Document->find('list');
		$statuses = $this->DocumentsTracker->Status->find('list');
		$levels = $this->DocumentsTracker->Level->find('list');
		$this->set(compact('documents', 'statuses', 'levels'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DocumentsTracker->id = $id;
		if (!$this->DocumentsTracker->exists()) {
			throw new NotFoundException(__('Invalid documents tracker'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DocumentsTracker->delete()) {
			$this->Flash->success(__('The documents tracker has been deleted.'));
		} else {
			$this->Flash->error(__('The documents tracker could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
