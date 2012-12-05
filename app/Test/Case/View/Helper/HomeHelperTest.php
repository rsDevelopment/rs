<?php
// app/Test/Case/View/Helper/CurrencyRendererHelperTest.php

App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('HomeHelper', 'View/Helper');

class HomeHelperTest extends CakeTestCase {

    // Here we instantiate our helper
    public function setUp() {
        parent::setUp();
        $Controller = new Controller();
        $View = new View($Controller);
        $this->Home = new HomeHelper($View);
    }

    // Testing the usd() function
    public function testInspectorPulldown() {
	$inspectors = array();

	$user1 = array( 'id' => '1', 'firstname' => 'Felix', 'middlename' => 'M', 'lastname' => 'Guerrero' );
	$inspectors[] = array( 'User' => $user1 );


	$user2 = array( 'id' => '2', 'firstname' => 'Adrian', 'middlename' => 'A', 'lastname' => 'Guerrero' );
	$inspectors[] = array( 'User' => $user2 );



	$result = $this->Home->inspectorPulldownMenu( $inspectors );
        //$this->assertEquals('USD 5.30', $this->CurrencyRenderer->usd(5.30));
    }
}

?>
