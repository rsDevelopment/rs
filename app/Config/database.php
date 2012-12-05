<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'phpdev',
		'password' => 'webuser123',
		'database' => 'posts',
		'prefix' => ''
	);

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'phpdev',
		'password' => 'webuser123',
		'database' => 'test',
		'prefix' => ''
	);

}
