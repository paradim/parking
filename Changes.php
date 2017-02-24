<?php 

class Changes {
	public $n500 = 0;
	public $n100 = 0;
	public $n50 = 0;
	public $n20 = 0;
	public $c10 = 0;
	public $fee = 0;
	public $paid = 0;
	public $change = 0;

	function __construct($paid, $fee) {
		$this->paid = $paid;
		$this->fee = $fee;
		print "paid: ".$this->paid."<br/>fee: ".$this->fee;
	}

	public function calcChange(){
		if ($this->paid < $this->fee){
			return;
		}
		$change = $this->paid - $this->fee;
		$remain = $change;
		echo "remain: $remain.<br/>";
		$this->n500 =floor( $remain / 500);
		$remain -= $this->n500 * 500;
		echo "remain: $remain.<br/>";
		$this->n100 =floor( $remain / 100);
		$remain -= $this->n100 * 100;
		echo "remain: $remain.<br/>";
		$this->n50 =floor( $remain / 50);
		$remain -= $this->n50 * 50;
		echo "remain: $remain.<br/>";
		$this->c10 =floor( $remain / 10);
		$remain -= $this->c10 * 10;
		echo "remain: $remain.<br/>";
		
		$this->change = $change;
	}

	public function toString(){
		$str = "";
		
		$str .= "Fee : ".$this->fee."<br/>";
		$str .= "Paid : ".$this->paid."<br/>";
		$str .= "Change : ".$this->change."<br/>";
		$str .= "<br/>";
		$str .= "Note 500: ".$this->n500."<br/>";
		$str .= "Note 100: ".$this->n100."<br/>";
		$str .= "Note 50: ".$this->n50."<br/>";
		$str .= "Note 20: ".$this->n20."<br/>";
		$str .= "Coin 10: ".$this->c10."<br/>";
		
		return $str;
	}

}

?>