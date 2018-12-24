
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/textos/textos.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $textos_controller = new TextosController();

  $identificador   = $_POST["identificador"] ;
  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $params = array(
    "identificador"   => $identificador,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "orden"   => $orden,
    "fecha"   => $fecha,
  );


  $response = $textos_controller->save($params);

  if($response){
    header("Location: ./textos.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
