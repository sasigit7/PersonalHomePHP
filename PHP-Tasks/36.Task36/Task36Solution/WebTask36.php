<?php
class MyCalculator {
	private $a, $b;
	public function __construct( $a, $b ) {
		$this->a = $a;
		$this->b = $b;
	}
	public function add() {
		return $this->a+$this->b;
	}
	public function subtract() {
        return $this->a-$this->b;
	}
	public function multiply() {
        return $this->a*$this->b;
	}
	public function divide() {
        return $this->a/$this->b;
	}
}
$calculator = new MyCalculator(12, 6); 
echo "Add function outputs: " . $calculator-> add()."\n"; // Displays 18 
echo "<br/>";
echo "Subtract function outputs: " . $calculator-> subtract()."\n"; // Displays 6
echo "<br/>";
echo "Multiply function outputs: " . $calculator-> multiply()."\n"; // Displays 72
echo "<br/>";
echo "Divide function outputs: " . $calculator-> divide()."\n"; // Displays 2