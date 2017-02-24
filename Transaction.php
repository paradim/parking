<?php

class Transaction {
	public $transId;
	public $carLicense;
	public $province;
	public $timeIn;
	public $timeOut;
	public $totalHr;
	public $status;
	
	public function calcParkingHour(){
		$min = round(abs($this->timIn - $this->timeOut) / 60,2);
		echo "$min";
		$this->totalHr = floor( $remain / 60) + 1;
		return $this->totalHr;
	}

	public function calcFee(){
		$hr = $this->totalHr;
		if($hr < 2){
			return 0;
		}else if ($hr >2 && $hr <= 4)
		return 20;
	}else {
		$fee = 20;
		return 20 + ($hr - 4) * 10;
	}
} 

	// calcParkingHour(strtotime("2008-12-13 10:21:00"), strtotime("2008-12-13 10:42:00"));


?>