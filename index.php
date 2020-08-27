<h2>Base Users</h2>
<?php
  require_once(__DIR__ . '/TraitGoldUser.php');
  require_once(__DIR__ . '/User.php');
  require_once(__DIR__ . '/PremiumUser.php');
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
      'eta' => 65
    ]
  ];

  foreach ($users as $user) {
    $utente = new User($user['id'],$user['nome'],$user['cognome'],$user['email'],$user['eta']);
    $user_information = $utente->getStringInformation();
?>

  <div class="utente">

    <ul>
      <li> Id: <?php echo $user_information['id'] ?> </li>
      <li> Nome: <?php echo $user_information['nome'] ?> </li>
      <li> Cognome: <?php echo $user_information['cognome'] ?> </li>
      <li> Email: <?php echo $user_information['email'] ?> </li>
      <li> Eta: <?php echo $user_information['eta'] ?> </li>
      <li> Priorità: <?php echo $utente->getPriority() ?> </li>
      <li> Sconto: <?php echo $utente->getSconto() ?> </li>

    </ul>

  </div>

<?php } ?>

<h2>Premium Users</h2>
<?php
foreach ($users as $user) {
  $utentePremium = new PremiumUser($user['id'],$user['nome'],$user['cognome'],$user['email'],$user['eta']);
  $user_information = $utentePremium->getStringInformation();
?>


<div class="utente">

  <ul>
    <li> Id: <?php echo $user_information['id'] ?> </li>
    <li> Nome: <?php echo $user_information['nome'] ?> </li>
    <li> Cognome: <?php echo $user_information['cognome'] ?> </li>
    <li> Email: <?php echo $user_information['email'] ?> </li>
    <li> Eta: <?php echo $user_information['eta'] ?> </li>
    <li> Priorità: <?php echo $utentePremium->getPriority() ?> </li>
    <li> Sconto: <?php echo $utentePremium->getSconto() ?> </li>
    <li> Utente oro: <?php echo $utentePremium->isGold($user_information['eta'],$utentePremium->getPriority()) ?> </li>

  </ul>

</div>

<?php } ?>
