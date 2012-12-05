<?php
class ChecklistFixture extends CakeTestFixture {

      	/* Optional. Set this property to load fixtures to a different test datasource */
      	public $useDbConfig = 'test';
	public $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'templateid' => array('type' => 'string', 'length' => 45, 'null' => false),
		'homeid' => array('type' => 'string', 'length' => 45, 'null' => false),
		'required' => array('type' => 'string', 'length' => 45, 'null' => false),
		'created' => 'datetime',
		'modified' => 'datetime'
	);

	
	public $records = array(
		array('id' => 1, 'templateid' => '1', 'homeid' => '1', 'required' => 'true', 'created' => '2007-03-18 10:39:23', 'modified' => '2007-03-18 10:41:31'),
		array('id' => 2, 'templateid' => '2', 'homeid' => '1', 'required' => 'true', 'created' => '2007-03-18 10:39:23', 'modified' => '2007-03-18 10:41:31'),
		array('id' => 3, 'templateid' => '3', 'homeid' => '1', 'required' => 'true', 'created' => '2007-03-18 10:39:23', 'modified' => '2007-03-18 10:41:31'),
		array('id' => 4, 'templateid' => '4', 'homeid' => '2', 'required' => 'false', 'created' => '2007-03-18 10:39:23', 'modified' => '2007-03-18 10:41:31') );
 } 


/**
Table: checklists
Columns:
id	int(10) UN PK AI
templateid	varchar(45) 
homeid	varchar(45) 
required	varchar(10) 
modified datetime
created datetime
*/
