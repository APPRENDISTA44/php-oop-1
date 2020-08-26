<?php
  class User {
    public $id;
    public $nome;
    public $cognome;
    public $email;
    public $eta;

    function __construct($id,$nome,$cognome,$email,$eta)
    {
      if (!empty($id) && !empty($nome) && !empty($nome) && !empty($eta) ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->eta = $eta;
      }
      else {
        die('parametri non validi');
      }
    }

    public function getStringInformation()
    {
      $id = 'UTENTE: ' . $this->id . '<br>';
      $nome_completo = 'NOME: ' . $this->nome . ' ' . $this->cognome . '<br>';
      $email = 'EMAIL: ' . $this->email . '<br>';
      $eta = 'ETA: ' . $this->eta . '<br>';
      return $id . $nome_completo . $email . $eta . '<br>';

    }
  }

 ?>
