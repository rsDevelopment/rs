<?php

class RecurrentDateHelper extends AppHelper{

	var $helpers = array('Form');

	public function getDates( $inspectionStartDate, $inspectionEndDate, $inspectionRepetitionType ) {
		$dateCalculation = "";

		switch ($inspectionRepetitionType) {
			case "Weekly":
				$dateCalculation = " +1 week";
				break;
			case "Bi-Weekly":
				$dateCalculation = " +2 week";
				break;

			case "Monthly":
				$dateCalculation = " +1 month";
				break;
			default:
				$dateCalculation = "none";
		}

		$dateArray[] =  $inspectionStartDate;

		$startDay = strtotime($inspectionStartDate);
		$endDay = strtotime($inspectionEndDate );

		print_r( 'start day: ' . $startDay );
		print_r( 'start to: ' . $endDay );

		while( $startDay <= $endDay ) {
			$startDay = strtotime(date("Y-m-d", $startDay) . $dateCalculation);
			if(  $startDay <= $endDay ){
				$dateArray[] = date("Y-m-d" , $startDay);
			}
		}


		//here make above array as key in $a array
		//$a = array_fill_keys($dateArray, 'none');
		//print_r($a);
		return $dateArray;

	}


}

?>
