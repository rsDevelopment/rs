<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
Table: users
Columns:
id	int(10) UN PK AI
username	varchar(50) 
firstname	varchar(100) 
middlename	varchar(100) 
lastname	varchar(100) 
phone1	varchar(50) 
phone2	varchar(50) 
password	varchar(50) 
role	varchar(20) 
created	datetime 
modified	datetime 
status	varchar(45) 
*/

      	public $useDbConfig = 'test';
	public $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'username' => array('type' => 'string', 'length' => 50, 'null' => false),
		'firstname' => array('type' => 'string', 'length' => 100, 'null' => false),
		'middlename' => array('type' => 'string', 'length' => 100, 'null' => false),
		'lastname' => array('type' => 'string', 'length' => 100, 'null' => false),
		'phone1' => array('type' => 'string', 'length' => 100, 'null' => false),
		'phone2' => array('type' => 'string', 'length' => 100, 'null' => false),
		'password' => array('type' => 'string', 'length' => 100, 'null' => false),
		'role' => array('type' => 'string', 'length' => 100, 'null' => false),
		'status' => array('type' => 'string', 'length' => 100, 'null' => false),
		'created' => 'datetime',
		'modified' => 'datetime'
	);

	
	public $records = array( 
		array(
			'id' => '1', 
			'username' => 'username', 
			'firstname' => 'firstName', 
			'middlename' => 'm', 
			'lastname' => 'Lastname1', 
			'phone1' => '480.326.7732_1', 
			'phone2' => '480.326.7732_2', 
			'password' => 'password', 
			'role' => 'inspector', 
			'status' => 'active', 
			'created' => '2007-03-18 10:39:23', 
			'modified' => '2007-03-18 10:41:31' ),
		array(
			'id' => '2', 
			'username' => 'username', 
			'firstname' => 'firstName', 
			'middlename' => 'm', 
			'lastname' => 'Lastname2', 
			'phone1' => '480.326.7732_1', 
			'phone2' => '480.326.7732_2', 
			'password' => 'password', 
			'role' => 'inspector', 
			'status' => 'active', 
			'created' => '2007-03-18 10:39:23', 
			'modified' => '2007-03-18 10:41:31' )
	);


}


/**

    CakePHP internal data type. Currently supported:

            string: maps to VARCHAR
            text: maps to TEXT
            integer: maps to INT
            float: maps to FLOAT
            datetime: maps to DATETIME
            timestamp: maps to TIMESTAMP
            time: maps to TIME
            date: maps to DATE
            binary: maps to BLOB

You can control when your fixtures are loaded by setting CakeTestCase::$autoFixtures to false and later load them using CakeTestCase::loadFixtures():

class ArticleTest extends CakeTestCase {
    public $fixtures = array('app.article', 'app.comment');
    public $autoFixtures = false;

    public function testMyFunction() {
        $this->loadFixtures('Article', 'Comment');
    }
}




*/


