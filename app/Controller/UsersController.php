<?php

class UsersController extends AppController {

	public function login() { 
		$this->log("Loging starting ", 'debug');
		if ($this->request->is('post')) {
			$this->log("Loging starting Is a Post ", 'debug');
			if ($this->Auth->login()) {
				$this->log("Loging starting Successful", 'debug');
				$this->log("Loging starting redirecting to: " . $this->Auth->redirect(), 'debug');
			    	$this->redirect($this->Auth->redirect());
			} else {
				$this->log("Loging User not Authenticated ", 'debug');
			    	$this->Session->setFlash('Invalid username or password, try again');
			}
		}else{
			$this->log("Login setting layout to unauthorized", 'debug');
			$this->layout = 'notAuthorized';
			$this->log("Loging Not a post; instead a GET request", 'debug');
			
		}
	}

	public function logout() {
		$this->log("Logout being executed", 'debug');
		$this->title_for_layout = 'Logout';
		$this->layout = 'notAuthorized';
	    	$this->redirect($this->Auth->logout());
	}

	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('display', 'logout' );
		$this->Auth->allow('add', 'display', 'logout' );
    	}


	
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException( ('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash( ('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash( ('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }



    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException( ('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash( ('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash( ('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

}

?>


