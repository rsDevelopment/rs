<?php
App::uses('Controller', 'Controller' );

class AppController extends Controller{

	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
			'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home',
			'authorize' => array('Controller') )
		)
	);

	public function isAuthorized( $user ){
		$this->log("Authorization in AppController invoked", 'debug');
		return true; 
	}
}

?>
