
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/login_attempts/login_attempts.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $login_attempts_controller = new LoginAttemptsController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $ip_address   = $_POST["ip_address"] ;
  $login   = $_POST["login"] ;
  $time   = $_POST["time"] ;
  $params = array(
    "id"   => $id,
    "ip_address"   => $ip_address,
    "login"   => $login,
    "time"   => $time,
  );


  $response = $login_attempts_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./login_attempts.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
