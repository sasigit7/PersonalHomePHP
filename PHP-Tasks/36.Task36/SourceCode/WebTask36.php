<?php
class MyCalculator {
	private $a, $b;
	public function __construct( $a, $b ) {
		$this->a = $a;
		$this->b = $b;
	}
	public function add() {
		
	}
	public function subtract() {

	}
	public function multiply() {

	}
	public function divide() {

	}
}
$calculator = new MyCalculator(12, 6); 
echo $mycalc-> add()."\n"; // Displays 18 
echo $mycalc-> multiply()."\n"; // Displays 72
echo $mycalc-> subtract()."\n"; // Displays 6
echo $mycalc-> divide()."\n"; // Displays 2
?>
