<?php
	
App::uses('Checklist', 'Model' );
App::uses('Controller','Controller' );
App::uses('AppController','Controller' );
App::uses('ChecklistsController','Controller' );
App::uses('View', 'View' );

App::import( 'Controller', 'Checklists' );
App::import( 'Controller', 'AppController' );

class ChecklistsControllerTest extends ControllerTestCase{

	public $fixtures = array( 'app.checklist' );
	var $name = 'ChecklistsControllerTest';
	var $useDbConfig = 'test';


	public function setUp(){
		parent::setUp();
	}


	public function testIndex(){
		$homeId = '1';
		$this->testAction( '/checklists/index/' . $homeId );

	}

	public function testTemplateDeselectedValuesSetToCero(){
		// The house already exists [id=2] but there is an additional record selected
		$checkListArray = array( 'homeid' => '400' ); 

		// Only one item was selected
		$requiredArray = array( '2' => '0', '3' => '3' );

		$data = array(
		    	'Checklist' => $checkListArray, 
			'required' => $requiredArray
		);

		$result = $this->testAction( '/checklists/template', array( 'data' => $data, 'method' => 'post' ) );

		$this->assertContains('/homes', $this->headers['Location']);
		$name = 'checklists';
		$checkList = $this->vars[ 'checklist' ];
		
		// We should have the original record + the newly created one
		$this->assertCount( 2, $checkList ) ; 
		$this->assertEquals( 0, $checkList[0]['Checklist']['required'], 'Required field is incorrect for first item' );
		$this->assertEquals( 1, $checkList[1]['Checklist']['required'], 'Required field is incorrect for second item'  );
	}




	public function testTemplateCreatingAdditionalRecordsWhenHouseExists(){
		// The house already exists [id=2] but there is an additional record selected
		$checkListArray = array( 'homeid' => '2' ); 

		// Only one item was selected
		$requiredArray = array( '4' => '1', '5' => '1' );

		$data = array(
		    	'Checklist' => $checkListArray, 
			'required' => $requiredArray
		);

		$result = $this->testAction( '/checklists/template', array( 'data' => $data, 'method' => 'post' ) );

		$this->assertContains('/homes', $this->headers['Location']);
		$name = 'checklists';
		$checkList = $this->vars[ 'checklist' ];

		// We should have the original record + the newly created one
		$this->assertCount( 2, $checkList ) ; 
	}


	
	public function testTemplateCreatingRecordsWhenHouseDoesNotExists(){
		// if there is no house ID then we should create the items into the database
		// the test only supports 1 and 2 for home ID
		$checkListArray = array( 'homeid' => '300' ); 

		// Only one item was selected
		$requiredArray = array( '100' => '100', '200' => '0', '300' => '0', '400' => '400' );

		$data = array(
		    	'Checklist' => $checkListArray, 
			'required' => $requiredArray
		);

		$result = $this->testAction( '/checklists/template', array( 'data' => $data, 'method' => 'post' ) );

		$this->assertContains('/homes', $this->headers['Location']);
		$name = 'checklists';
		$checkList = $this->vars[ 'checklist' ];

		// Since this is a new house, we should have 4 new entries
		$this->assertCount( 4, $checkList ) ; 
	}


	public function testTemplateUpdatingExistingChecklistItemsPerHome(){
		$checkListArray = array( 'homeid' => 1 ); 

		//required array contains the template id plus the required value
		// the default values in house id 1 are all false
		$requiredArray = array( '1' => '0', '2' => '0', '3' => '0' );

		$data = array(
		    	'Checklist' => $checkListArray, 
			'required' => $requiredArray
		);

		$result = $this->testAction( '/checklists/template', array( 'data' => $data, 'method' => 'post' ) );

		$this->assertContains('/homes', $this->headers['Location']);

		$checklistItemsInDB = $this->vars[ 'checklist' ];
		// there should be no record change. There should still be 3 items
		$this->assertCount( 3, $checklistItemsInDB ) ; 

		// and they all should be set to false
		foreach( $checklistItemsInDB as $checklistItemInDB ){
			$checklistItem = $checklistItemInDB['Checklist'];
			$templateId = $checklistItem['templateid'];
			$required = $checklistItem['required'];
			$this->assertEquals( $requiredArray[ $templateId ], '0' ); 
		}

	}

	public function testDown(){
		parent::tearDown();
	}



}

?>
