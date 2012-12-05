<?php

class HomeHelper extends AppHelper{
	var $helpers = array('Form');

	public function inspectorPulldownMenu( $inspectors ){
		$inspectorsArray = array();
        	foreach( $inspectors as $inspector ){ 
			$id = $inspector[ 'User' ]['id'];
			$name = $inspector[ 'User' ]['firstname'];
			$name = $name . ' ' . $inspector[ 'User' ]['middlename'];
			$name = $name . ' ' . $inspector[ 'User' ]['lastname'];
			$inspectorsArray[ $id ] = $name;
		}
		echo $this->Form->input('inspector_id', array( 'options' => $inspectorsArray  ));
	}

}

?>
