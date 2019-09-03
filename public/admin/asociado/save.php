
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/asociado/asociado.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $asociado_controller = new AsociadoController();

  $nombre   = $_POST["nombre"] ;
  $apellidos   = $_POST["apellidos"] ;
  $email   = $_POST["email"] ;
  $password   = $_POST["password"] ;
  $empresa   = $_POST["empresa"] ;
  $telefono   = $_POST["telefono"] ;

  $params = array(
    "nombre"   => $nombre,
    "apellidos"   => $apellidos,
    "email"   => $email,
    "password"   => $password,
    "empresa"   => $empresa,
    "telefono"   => $telefono,
  );


  $response = $asociado_controller->save($params);

  if($response){
    header("Location: ./asociado.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
