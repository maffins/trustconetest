<?php
App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
  
  public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout', 'delete', 'edit', 'permision');
    }
    
  public function login() {

      $this->layout = 'login-layout';

      if ($this->Auth->user('id')) {
          return $this->redirect(array(
              'controller' => 'users',
              'action' => 'logout'
          ));
      }

      if ($this->request->is('post')) {
		  $this->loadModel('AuditTrail');

		  //Save the audit trail
		  $this->loadModel('AuditTrail');

		  $auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
		  $auditTrail['AuditTrail']['event_description'] = "Trying to login with username ".$this->request->data['User']['username']." and password ".$this->request->data['User']['password'];
		 // debug($this->Auth->login()); die();
		  if ($this->Auth->login()) {
		      $authuser = $this->Auth->user();
			  $auditTrail['AuditTrail']['contents'] = "Successful login";

			  if( !$this->AuditTrail->save($auditTrail))
			  {
                  debug($this->AuditTrail->invalidFields());
				//  die('There was a problem trying to save the audit trail');
			  }//echo "Did i log in and audit trailed";
              //return $this->redirect($this->Auth->redirectUrl());
//echo $this->Auth->user()['user_type_id'];die;
              if ($authuser['user_type_id'] == 6)
              {
                  return $this->redirect(array(
                      'controller' => 'pages',
                      'action' => 'report'
                  ));
              }
              return $this->redirect(array(
				  'controller' => 'documents',
				  'action' => 'index'
			  ));
          }
		  $auditTrail['AuditTrail']['contents'] = "Invalid username or password, try again";
		  if( !$this->AuditTrail->save($auditTrail))
		  {
			  die('There was a problem trying to save the audit trail');
		  }
          $this->Flash->error(__('Invalid username or password, try again'));
      }
  }

  public function logout() {

	  //Save the audit trail
	  $this->loadModel('AuditTrail');

	  $auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
	  $auditTrail['AuditTrail']['event_description'] = "User with username ".$this->Auth->user('username')." logged out";


	  $auditTrail['AuditTrail']['contents'] = "Successfully logged out";
		  if( !$this->AuditTrail->save($auditTrail))
		  {
			  die('There was a problem trying to save the audit trail');
		  }


      return $this->redirect($this->Auth->logout());
  }

  public function permissions() {

  }

/**
 * index method
 *
 * @return void
 */
  public function permision($id) {
    if ($this->request->is(array('post', 'put'))) {
      $this->request->data['User']['permissions'] = serialize($this->request->data['User']['permissions']);
      if ($this->User->save($this->request->data)) {

          $this->loadModel('AuditTrail');

          $auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
          $auditTrail['AuditTrail']['event_description'] = "Setting permissions for user with id ".$id;

          $auditTrail['AuditTrail']['contents'] = "Permissions for user set";
          if( !$this->AuditTrail->save($auditTrail))
          {
              die('There was a problem trying to save the audit trail');
          }


          $this->Flash->success(__('User permission have been set.'));
        return $this->redirect(array('action' => 'index'));
      } else {
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
    }  
     $user = $this->User->findById($id);
     $this->set('user', $user);
  } 
  
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		//$this->set('users', $this->Paginator->paginate());
		$this->set('users', $this->User->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}

		$this->loadModel('AuditTrail');

		$auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
		$auditTrail['AuditTrail']['event_description'] = "Viewing user with id ".$id;

		$auditTrail['AuditTrail']['contents'] = "Opened user for viewing";
		if( !$this->AuditTrail->save($auditTrail))
		{
			die('There was a problem trying to save the audit trail');
		}


		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		date_default_timezone_set('UTC');
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {

                $this->loadModel('AuditTrail');

                $auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
                $auditTrail['AuditTrail']['event_description'] = "Creating user with name ".$this->request->data['User']['fname'].' '.$this->request->data['User']['sname'];

                $auditTrail['AuditTrail']['contents'] = "New user created";
                if( !$this->AuditTrail->save($auditTrail))
                {
                    die('There was a problem trying to save the audit trail');
                }


                $this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$departments = $this->User->Department->find('list');
		$userTypes = $this->User->UserType->find('list');
		$this->set(compact('departments', 'userTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		} 
	
		//debug($this->request->data);die;

		if ($this->request->is(array('post', 'put'))) {
		    if(empty($this->request->data['User']['password']))
            {
                unset($this->request->data['User']['password']);
            } else {
               //$this->request->data['User']['password'] = AuthComponent::password($this->request->data['User']['password']);
            }
            
            //print_r($this->request->data);die;
			if ($this->User->save($this->request->data)) {

                $this->loadModel('AuditTrail');

                $auditTrail['AuditTrail']['user_id'] = $this->Auth->user('id');
                $auditTrail['AuditTrail']['event_description'] = "Edited user with id ".$this->request->data['User']['id'].' and surname '.$this->request->data['User']['sname'];

                $auditTrail['AuditTrail']['contents'] = "Edted user";
                if( !$this->AuditTrail->save($auditTrail))
                {
                    die('There was a problem trying to save the audit trail');
                }

				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$departments = $this->User->Department->find('list');
		$userTypes = $this->User->UserType->find('list');
		$this->set(compact('departments', 'userTypes'));
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
