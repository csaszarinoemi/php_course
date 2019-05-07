<?php 

abstract class Aircraft {
  protected $maxAmmo;
  protected $baseDamage;
  protected $ammo = 0;

  function __construct($maxAmmo, $baseDamage, $ammo){
    $this->maxAmmo = $maxAmmo;
    $this->baseDamage = $baseDamage;
    $this->ammo = $ammo;
  }

  function fight(){
    $this->ammo = 0;
    return $this->ammo*$this->baseDamage;
  }

  function refill($amountToRefill){
    if($amountToRefill > $this->maxAmmo){
      $amountToRefill - $this->maxAmmo;
      $this->ammo = $this->maxAmmo;
      return $amountToRefill;
    } else {
      $this->ammo = $amountToRefill;
      return $amountToRefill = 0;
    }
  }

  private function getType(){
    return get_class($this);
  }

  function __get($fieldName){
    return $this->$fieldName;
  }

  private function getAllDamage(){
    return $this->ammo * $this->baseDamage;
  }

  function getStatus(){
    echo "Type {$this->getType()}, Ammo: {$this->ammo}, Base Damage: {$this->baseDamage}, All Damage: {$this->getAllDamage()}";
  }

}

?>