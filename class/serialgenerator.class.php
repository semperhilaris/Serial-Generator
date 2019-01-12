<?php

class Serialgenerator {

  private $serials = array();

  //DEFAULT SETTINGS
  private $pool = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  private $part_count = 3;
  private $part_len = 5;
  private $seperator = "-";
  
  //SETTER FUNCTIONS
  public function set_pool($pool) {
    $this->pool = str_replace(' ', '', $pool);
  }
  public function set_part_count($count) {
    $this->part_count = intval($count);
  }
  public function set_part_len($len) {
    $this->part_len = intval($len);
  }
  public function set_seperator($seperator) {
    $this->seperator = $seperator;
  }
  
  //GENERATOR FUNCTIONS

  //generates one part of a serial
  private function generate_key_part() {
    $countPool = strlen($this->pool)-1;
    $serial = '' ;
    for ($i = 0 ; $i < $this->part_len ; $i++) {
        $currIndex = mt_rand(0, $countPool);
        $currChar = $this->pool[$currIndex];
        $serial .= $currChar ;
    }
    return $serial;
  }
  
  //generates a full serial key
  private function generate_key() {
    $key_parts = array();
    for ($i=0; $i<$this->part_count; $i++) {
	  $key_parts[] = $this->generate_key_part();
	}
	return implode($this->seperator, $key_parts);
  }
  
  //generates a set of unique keys
  public function generate_keys($count) {
    $this->serials = array();
    for ($i=0; $i<$count; $i++) {
      $newcode = false;
      
      while ($newcode == false) {
        $gen = $this->generate_key();
	    if (!isset($this->serials[$gen])) {
	      $this->serials[$gen] = true;
	      $newcode = true;
	    }
      }
	}
	return array_keys($this->serials);
  }
  

}

?>
