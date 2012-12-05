<?php
/**
template_id
home_id	
required

*/
App::uses('AppController','Controller' );

/**
*
The purpose of a checklist is to display a scheduled calendar of all the checklists that need to be executed by
an inspector
*/

class ChecklistsController extends AppController {

	public function index( $homeId ){
		$conditions = array( 'conditions' => array( 'Checklist.home_id = ' => $homeId ) );
		$checklistItemsInDB = $this->Checklist->find( 'all', $conditions );
		$this->set('checklist', $result );

	}

	public function template(){
		$homeId = $this->request->data[ 'Checklist' ][ 'home_id'];
		$templateIdArray = $this->request->data[ 'required' ];
		$conditions = array( 'conditions' => array( 'Checklist.home_id = ' => $homeId ) );
		$checklistItemsInDB = $this->Checklist->find( 'all', $conditions );

		if( count( $checklistItemsInDB ) > 0 ){
			// house exists
			foreach( $checklistItemsInDB as $checklistItemDB ){
				$templateId = $checklistItemDB[ 'Checklist']['template_id'];
				$id = $checklistItemDB[ 'Checklist']['id'];

				//verify if the current key exists as part of the template_ids
				if( array_key_exists( $templateId, $templateIdArray ) ) {
					$data = array( 'Checklist' => Array ( 
						'id' => $id, 
						'template_id' => $templateId,
						'required' => $this->processRequiredCheckbox( $templateIdArray[ $templateId ] )
					    )
					);
					$this->Checklist->save( $data );
					//purge the item frorm the templateId array
					unset( $templateIdArray[ $templateId ] );
				}

			}
			if( count( $templateIdArray ) > 0 ){
				$this->insertNewRecords( $templateIdArray, $homeId );
			}
			$this->storeUpdates( $homeId );
			$this->redirect(array( 'controller' => 'homes', 'action' => 'index'));
		}else{
			// House does not exist; enter records into the database
			$this->insertNewRecords( $templateIdArray, $homeId );
			$this->storeUpdates( $homeId );
			return $this->redirect(array( 'controller' => 'homes', 'action' => 'index'));
		}	
	}

	protected function insertNewRecords( $templateIdArray, $homeId ){
		$data = array( 'Checklist' => array() );
		foreach( $templateIdArray as $templateId => $status ){
			$item = array(
				'template_id' => $templateId ,
				'home_id' => $homeId,
				'required' => $this->processRequiredCheckbox( $status )
			);
			$data['Checklist'][] = $item;
		}
		$this->Checklist->saveAll( $data[ 'Checklist' ] ); 
	}

	protected function storeUpdates( $homeId ){
		$params = array(
    			'conditions' => array('Checklist.home_id' => $homeId )
		);
		$result = $this->Checklist->find( 'all', $params );
		$this->set('checklist', $result );
	}

	protected function debug( $message ){
		$this->log( '> ' . $message, 'debug' );
	}

	protected function processRequiredCheckbox( $value ){
		if( intval( $value ) > 0 ){
			return 1;
		}else{
			return 0;
		}
	}
	
}

