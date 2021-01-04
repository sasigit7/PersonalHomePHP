<?php
class factorial_of_a_number
{
  protected $_n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->_n = $n;
	}
  public function result()
    {
    //Complete this function to get the factorial of a number
    $num = $this->_n;
     $factorial = 1;
     for ($x=$num; $x>=1; $x--) {
       $factorial = $factorial * $x;
     }

	 return $factorial;
	 }
 }

$newfactorial = New factorial_of_a_number(5);
echo $newfactorial->result();