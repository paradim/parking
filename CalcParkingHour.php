<?php

	public function calcParkingHour($timeIn, $timeOut){
		$min = round(abs($timIn - $timeOut) / 60,2);
		echo "$min";
		$hr = floor( $remain / 60);
		return $hr;
	}

calcParkingHour(strtotime("2008-12-13 10:21:00"), strtotime("2008-12-13 10:42:00"));


?>