<?php
  class PremiumUser extends User{
    use GoldUser;
    protected $priority;

    protected function setPriority(){
      $this->priority = 'High';
    }

    protected function setSconto(){
      $this->sconto = '40%';
    }

  }

 ?>
