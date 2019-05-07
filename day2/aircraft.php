<?php 

abstract class Aircraft {
  protected $maxAmmo;
  protected $baseDamage;
  protected $ammo;

  function __construct($maxAmmo, $baseDamage, $ammo = 0){
    $this->maxAmmo = $maxAmmo;
    $this->baseDamage = $baseDamage;
    $this->ammo = $ammo;
  }

  function fight(){
    $damage = $this->ammo*$this->baseDamage;
    $this->ammo = 0;
    return $damage;
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

   function getAllDamage(){
    return $this->ammo * $this->baseDamage;
  }

  function getStatus(){
    echo "Type {$this->getType()}, Ammo: {$this->ammo}, Base Damage: {$this->baseDamage}, All Damage: {$this->getAllDamage()} <br>";
  }

  function isPriority(): bool {
    return get_class($this) == 'F35';
  }
}

?>