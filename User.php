<?php
  class User {
    protected $id;
    protected $nome;
    protected $cognome;
    protected $email;
    protected $eta;
    protected $priority;
    protected $sconto;


    function __construct($id,$nome,$cognome,$email,$eta)
    {
      if (!empty($id) && !empty($nome) && !empty($nome) && !empty($eta) ) {
        $this->id = $id;
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->eta = $eta;
        $this->setPriority();
        $this->setSconto();
      }
      else {
        die('parametri non validi');
      }
    }

    public function getStringInformation()
    {
      return[
        'id' => $this->id,
        'nome' => $this->nome,
        'cognome' => $this->cognome,
        'email' => $this->email,
        'eta' => $this->eta
      ];
    }

    protected function setPriority(){
      $this->priority = 'Low';
    }

    public function getPriority(){
      return $this->priority;
    }

    protected function setSconto(){
      if ($this->eta > 60) {
        $this->sconto = '20%';
      }
      else {
        $this->sconto = '0%';
      }
    }

    public function getSconto(){
      return $this->sconto;
    }
  }

 ?>
