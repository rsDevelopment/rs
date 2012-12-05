<?php

class HomesController extends AppController {

	public $uses = array('Home','User');
	public $helpers = array('Form', 'Html', 'Home');

	var $layout = 'default';

	public function index() {
		$this->Home->recursive = 0;
		$this->set('homes', $this->paginate());
		$this->set('title_for_layout', "Homes Listing" );
	}

	public function checklists(){
		$this->debug("Starting checklists: ", 'debug' );
		
		$this->debug("home id: " . $this->params->data['Home']['home_id'], 'debug' );

		foreach( $this->params->data['assigned'] as $templateId ){
			$this->log( "value: " . $templateId , 'debug' );
		}

		$this->log("end checklists: ", 'debug' );
		$this->redirect(array('action' => 'index'));
	}


	public function template($id = null){
		$this->log("Template call executing. Home id: " . $id, 'debug');
		$this->log("THE SQL: start", 'debug' );

		$sql = 'SELECT templates.label, templates.category, templates.description, ';
		$sql = $sql . 'checklists.required, checklists.id checklistid, checklists.home_id homechecklistid, templates.id template_id';
		$sql = $sql . ' FROM templates left join checklists on templates.id = checklists.template_id'; 
		$sql = $sql . ' AND checklists.home_id = ' . $id;

		$myTemplates = $this->Home->query($sql);
        	$this->set('templates',$myTemplates );
		$this->log( print_r( $myTemplates, true ), 'debug' );

        	$this->set('home_id',$id );
	}



    public function view($id = null) {
        $this->Home->id = $id;
        if (!$this->Home->exists()) {
            throw new NotFoundException(__('Invalid Home'));
        }
        $this->set('home', $this->Home->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Home->create();
            if ($this->Home->save($this->request->data)) {
                $this->Session->setFlash('The home has been saved');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash( 'The home could not be saved. Please, try again.' );
            }
        }
    }

	public function delete( $id = null, $label ){
		if (!$this->request->is('post')) {
		    throw new MethodNotAllowedException();
		}
		$this->Home->id = $id;
		if (!$this->Home->exists()) {
		    throw new NotFoundException(__('Invalid home'));
		}
		if ($this->Home->delete()) {
		    $this->Session->setFlash(__('Home deleted'));
		    $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Home was not deleted'));
		$this->redirect(array('action' => 'index'));

	}




	public function edit($id = null) {
		$this->Home->id = $id;
		if (!$this->Home->exists()) {
			throw new NotFoundException('Invalid home');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Home->save($this->request->data)) {
				$this->Session->setFlash('The home has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The home could not be saved. Please, try again.');
			}
		} else {

			$this->request->data = $this->Home->read(null, $id);
			
			$params = array(
				'conditions' => array( 'User.role' => 'inspector' ),
				'fields' => array( 'User.id','User.firstname','User.middlename','User.lastname'),
				'order' => array( 'User.lastname' )			
			);
			$result = $this->User->find( 'all', $params ); 

			$this->set('inspectors', $result );
		}
	}

	protected function debug( $message ){
		$this->log( '> ' . $message, 'debug' );
	}




}

/**

array(
    'conditions' => array('Model.field' => $thisValue), //array of conditions
    'recursive' => 1, //int
    'fields' => array('Model.field1', 'DISTINCT Model.field2'), //array of field names
    'order' => array('Model.created', 'Model.field3 DESC'), //string or array defining order
    'group' => array('Model.field'), //fields to GROUP BY
    'limit' => n, //int
    'page' => n, //int
    'offset' => n, //int
    'callbacks' => true //other possible values are false, 'before', 'after'
)

*/


?>


