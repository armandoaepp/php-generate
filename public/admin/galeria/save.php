
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/galeria/galeria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $galeria_controller = new GaleriaController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
  );


  $response = $galeria_controller->save($params);

  if($response){
    header("Location: ./galeria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
