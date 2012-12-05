<?php

class TemplatesController extends AppController {

	var $layout = 'default';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	} 


    public function index() {
	$this->Template->recursive = 0;
	$this->set('templates', $this->paginate());
    }

    public function view($id = null) {
        $this->Template->id = $id;
        if (!$this->Template->exists()) {
            throw new NotFoundException( ('Invalid Template') );
        }
        $this->set('template', $this->Template->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Template->create();
            if ($this->Template->save($this->request->data)) {
                $this->Session->setFlash(__('The template has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The template could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->Template->id = $id;
        if (!$this->Template->exists()) {
            throw new NotFoundException(__('Invalid template'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Template->save($this->request->data)) {
                $this->Session->setFlash(__('The template has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The template could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Template->read(null, $id);
            //unset($this->request->data['Template']['password']);
        }
    }


	public function delete( $id = null, $label ){
		if (!$this->request->is('post')) {
		    throw new MethodNotAllowedException();
		}
		$this->Template->id = $id;
		if (!$this->Template->exists()) {
		    throw new NotFoundException('Invalid template');
		}
		if ($this->Template->delete()) {
		    $this->Session->setFlash('Template deleted');
		    $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('Template was not deleted');
		$this->redirect(array('action' => 'index'));

	}

}

?>

