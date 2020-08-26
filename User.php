<?php
  class User {
    public $id;
    public $nome;
    public $cognome;
    public $email;
    public $eta;

    function __construct($id,$nome,$cognome,$email,$eta)
    {
      $this->id = $id;
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->email = $email;
      $this->eta = $eta;
    }
  }

 ?>
