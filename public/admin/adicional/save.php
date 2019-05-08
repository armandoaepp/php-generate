
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/adicional/adicional.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $adicional_controller = new AdicionalController();

  $descripcion   = $_POST["descripcion"] ;
  $precio   = $_POST["precio"] ;

  $params = array(
    "descripcion"   => $descripcion,
    "precio"   => $precio,
  );


  $response = $adicional_controller->save($params);

  if($response){
    header("Location: ./adicional.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
