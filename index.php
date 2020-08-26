<?php
  require_once(__DIR__ . '/User.php');
  $users = [
    [
      'id' => 1,
      'nome' => 'Luca',
      'cognome' => 'Rossi',
      'email' => 'luca.rossi@mail.it',
      'eta' => 25
    ],
    [
      'id' => 2,
      'nome' => 'Fabio',
      'cognome' => 'Verti',
      'email' => 'fabio.verti@mail.it',
      'eta' => 29
    ],
    [
      'id' => 3,
      'nome' => 'Ernesto',
      'cognome' => 'Gialli',
      'email' => 'ernesto.gialli@mail.it',
      'eta' => 22
    ]
  ];

  foreach ($users as $user) {
    $utente = new User($user['id'],$user['nome'],$user['cognome'],$user['email'],$user['29']);
    var_dump($utente);
  }

 ?>
