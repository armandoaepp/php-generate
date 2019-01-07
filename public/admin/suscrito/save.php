
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/suscrito/suscrito.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $suscrito_controller = new SuscritoController();

  $nombre   = $_POST["nombre"] ;
  $email   = $_POST["email"] ;
  $telefono   = $_POST["telefono"] ;
  $empresa   = $_POST["empresa"] ;
  $mensaje   = $_POST["mensaje"] ;
  $params = array(
    "nombre"   => $nombre,
    "email"   => $email,
    "telefono"   => $telefono,
    "empresa"   => $empresa,
    "mensaje"   => $mensaje,
  );


  $response = $suscrito_controller->save($params);

  if($response){
    header("Location: ./suscrito.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
