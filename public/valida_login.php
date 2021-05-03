<?php
  session_start();

  $user_auth = false;

  $user_app = array(
    array( 'user' => 'rodrigo', 'password' => '131004'),
    array( 'user' => 'marcio', 'password' => '101078'),
    array( 'user' => 'gustavo', 'password' => '511505'),
  );
  
  foreach($user_app as $users) {
    if($users['user'] == $_POST['user'] && $users['password'] == $_POST['password']) {
      $user_auth = true;
    };
  };

  if($user_auth) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php');

  }else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
  };
  
?>