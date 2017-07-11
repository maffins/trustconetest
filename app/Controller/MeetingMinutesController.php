<?php
App::uses('AppController', 'Controller');
/**
 * MeetingMinutes Controller
 *
 * @property MeetingMinute $MeetingMinute
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class MeetingMinutesController extends AppController {

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
		$this->MeetingMinute->recursive = 0;
		$this->set('meetingMinutes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MeetingMinute->exists($id)) {
			throw new NotFoundException(__('Invalid meeting minute'));
		}
		$options = array('conditions' => array('MeetingMinute.' . $this->MeetingMinute->primaryKey => $id));
		$this->set('meetingMinute', $this->MeetingMinute->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MeetingMinute->create();
			if ($this->MeetingMinute->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting minute has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting minute could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$meetings = $this->MeetingMinute->Meeting->find('list');
		$this->set(compact('meetings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MeetingMinute->exists($id)) {
			throw new NotFoundException(__('Invalid meeting minute'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MeetingMinute->save($this->request->data)) {
				$this->Session->setFlash(__('The meeting minute has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meeting minute could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('MeetingMinute.' . $this->MeetingMinute->primaryKey => $id));
			$this->request->data = $this->MeetingMinute->find('first', $options);
		}
		$meetings = $this->MeetingMinute->Meeting->find('list');
		$this->set(compact('meetings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $mainid) {
		$this->MeetingMinute->id = $id;
		if (!$this->MeetingMinute->exists()) {
			throw new NotFoundException(__('Invalid meeting minute'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MeetingMinute->delete()) {
			$this->Session->setFlash(__('The meeting minute has been deleted.'), 'default', array('class' => 'alert alert-success'));

            $this->loadModel('AuditTrail');

            $auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
            $auditTrail['AuditTrail']['event_description'] = "Deleted minutes with id ".$id." ".$_SERVER['REMOTE_ADDR'];

            $auditTrail['AuditTrail']['contents'] = "Deleted minutes with id ".$id." ".$_SERVER['REMOTE_ADDR'];;
            if( !$this->AuditTrail->save($auditTrail))
            {
                die('There was a problem trying to save the audit trail for adding counsiler document '.$id." ".$_SERVER['REMOTE_ADDR']);
            }

		} else {
			$this->Session->setFlash(__('The meeting minute could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));

            $this->loadModel('AuditTrail');

            $auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
            $auditTrail['AuditTrail']['event_description'] = "Attempted to Delete minutes with id ".$id." ".$_SERVER['REMOTE_ADDR'];

            $auditTrail['AuditTrail']['contents'] = "Attempted to Delete minutes with id ".$id." ".$_SERVER['REMOTE_ADDR'];;
            if( !$this->AuditTrail->save($auditTrail))
            {
                die('There was a problem trying to save the audit trail for adding counsiler document '.$id." ".$_SERVER['REMOTE_ADDR']);
            }


        }
		return $this->redirect(array('controller' => 'CounsilorDocuments', 'action' => 'edit',$mainid));
	}
}
