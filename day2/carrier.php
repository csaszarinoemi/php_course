<?php 

include_once 'aircraft.php';
include_once 'f16.php';
include_once 'f35.php';

class Carrier{

  private $ammoStored;
  private $healthPoint;
  private $aircrafts;

  function __construct($ammoStored, $healthPoint){
    $this->ammoStored = $ammoStored;
    $this->healthPoint = $healthPoint;
    $this->aircrafts = [];
  }

  function add($aircraft){
    $this->aircrafts[] = $aircraft;
  }

  function fill(){
    if($this->ammoStored === 0){
      echo 'Carrier is out of ammo';
    } else {
      foreach ($this->aircrafts as $aircraft) {
        if($aircraft->isPriority() && $this->ammoStored > 0){
          $this->ammoStored -= $aircraft->refill($this->ammoStored);
        }
      }
      foreach ($this->aircrafts as $aircraft) {
        if(!$aircraft->isPriority() && $this->ammoStored > 0){
          $this->ammoStored -= $aircraft->refill($this->ammoStored);
        }
      }
    }
  }

  function fight($carrier){
    foreach ($this->aircrafts as $aircraft) {
      $carrier->healthPoint -= $aircraft->fight();
    }
  }

  function getStatus(){

    $status = "HP: {$this->healthPoint}, Ammo Storage: {$this->ammoStored}, Total damage: {$this->getTotalDamage()}
    Aircrafts: ";

    foreach ($this->aircrafts as $aircraft) {
      $status .= $aircraft->getStatus();
    }

    echo $this->healthPoint > 0 ? $status . "<br>" : "It's dead Jim :(";
  }

  function getTotalDamage(){
    $damage = 0;

    foreach ($this->aircrafts as $aircraft) {
      $damage += $aircraft->getAllDamage();
    }
    return $damage;
  }
}

$carrier1 = new Carrier(300, 1000);
$carrier2 = new Carrier(100, 500);

for($i = 0; $i < 5; $i++){
  $i % 2 === 0 ? $carrier1->add(new F16()) : $carrier1->add( new F35());
}

for($i = 0; $i < 5; $i++){
  $i % 2 === 0 ? $carrier2->add(new F16()) : $carrier2->add( new F35());
}

$carrier1->fill();
$carrier2->fill();

$carrier1->getStatus();
$carrier2->getStatus();

$carrier1->fight($carrier2);

$carrier1->getStatus();
$carrier2->getStatus();
?>