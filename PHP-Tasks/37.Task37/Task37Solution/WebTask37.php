<?php
class array_sort {
    protected $_asort;
    
    public function __construct(array $asort){
        $this->_asort = $asort;
      //  print_r($asort);
   }
     
    public function alhsort() {
      $sorted = $this->_asort;  
      sort($sorted);  
      return $sorted;
     }
}
$sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
print_r($sortarray->alhsort())."\n";