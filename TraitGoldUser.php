<?php
trait GoldUser{
  public function isGold($eta,$priorita){
    if ($eta>60 && $priorita == 'High') {
      return 'Gold';
    }
    else {
      return 'no';
    }
  }
}


 ?>
