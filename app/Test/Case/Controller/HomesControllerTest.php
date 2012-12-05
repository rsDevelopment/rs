<?php
	
App::uses('Checklist', 'Model' );
App::uses('Controller','Controller' );
App::uses('AppController','Controller' );
App::uses('ChecklistsController','Controller' );
App::uses('View', 'View' );

App::import( 'Controller', 'Checklists' );
App::import( 'Controller', 'AppController' );

class HomesControllerTest extends ControllerTestCase{

	public $fixtures = array( 'app.home', 'app.user' );
    	public $autoFixtures = false;

	var $name = 'HomesControllerTest';
	var $useDbConfig = 'test';


	public function setUp(){
		parent::setUp();
	}


	public function testEdit(){
        	$this->loadFixtures('Home', 'User');
		$data = array(); 
		$homeId = '2';
		$result = $this->testAction( '/homes/edit/' . $homeId, array( 'data' => $data, 'method' => 'get' ) );

		$inspectors = $this->vars[ 'inspectors' ];

		debug( print_r( $inspectors, true ) );		
		
		$this->assertCount( 2, $inspectors );

		$this->assertEquals( 'firstName', $inspectors[ 0 ]['User']['firstname'], 'Incorrect last name for user' );
	}


	public function xtestTemplateUpdatingExistingChecklistItemsPerHome(){

/**
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
*/

	}

	public function tearDown(){
		parent::tearDown();
	}



}

?>
