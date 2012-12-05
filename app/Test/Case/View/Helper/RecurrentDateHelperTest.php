<?php
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('RecurrentDateHelper', 'View/Helper');

class RecurrentDateHelperTest extends CakeTestCase {

	// Here we instantiate our helper
	public function setUp() {
		parent::setUp();
		$Controller = new Controller();
		$View = new View($Controller);
		$this->RecurrentDate = new RecurrentDateHelper($View);
	}


	public function testWeekly(){
		$eventStartDate = "2012-12-01";
		$eventEndDate = "2012-12-28";
		$eventRepetitionType = "Weekly";
		$result = $this->RecurrentDate->getDates( $eventStartDate, $eventEndDate, $eventRepetitionType );
		
		$this->assertCount( 4, $result, 'Start date: ' . $eventStartDate . '; End: ' . $eventEndDate . '; interval: ' . $eventRepetitionType );	
		
	}


	public function testBiWeekly(){
		$eventStartDate = "2012-12-1";
		$eventEndDate = "2012-12-29";
		$eventRepetitionType = "Bi-Weekly";
		$result = $this->RecurrentDate->getDates( $eventStartDate, $eventEndDate, $eventRepetitionType );
		$this->assertCount( 3, $result, 'Start date: ' . $eventStartDate . '; End: ' . $eventEndDate . '; interval: ' . $eventRepetitionType );	
	}


	public function testMonthly(){
		$eventStartDate = "2012-09-1";
		$eventEndDate = "2012-12-10";
		$eventRepetitionType = "Monthly";
		$result = $this->RecurrentDate->getDates( $eventStartDate, $eventEndDate, $eventRepetitionType );
		$this->assertCount( 4, $result, 'Start date: ' . $eventStartDate . '; End: ' . $eventEndDate . '; interval: ' . $eventRepetitionType );	
	}




}


