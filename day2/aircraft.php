<?php 

abstract class Aircraft {
  protected $maxAmmo;
  protected $baseDemage;
  protected $ammo = 0;

  function __construct($maxAmmo, $baseDemage, $ammo){
    $this->maxAmmo = $maxAmmo;
    $this->baseDemage = $baseDemage;
    $this->ammo = $ammo;
  }

  function fight(){
    $this->ammo = 0;
    return $this->ammo*$this->baseDemage;
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

  

}

?>