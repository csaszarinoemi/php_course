<?php 

include 'aircraft.php';

class F35 extends Aircraft{
  function __construct(){
    parent::__construct(8, 30);
  }
}
?>