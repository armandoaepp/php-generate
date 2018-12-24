
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/login_attempts/login_attempts.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $login_attempts_controller = new LoginAttemptsController();

  $ip_address   = $_POST["ip_address"] ;
  $login   = $_POST["login"] ;
  $time   = $_POST["time"] ;
  $params = array(
    "ip_address"   => $ip_address,
    "login"   => $login,
    "time"   => $time,
  );


  $response = $login_attempts_controller->save($params);

  if($response){
    header("Location: ./login_attempts.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
