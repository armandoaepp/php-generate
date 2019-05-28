
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/pais/pais.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $pais_controller = new PaisController();

  $nombre   = $_POST["nombre"] ;

  $params = array(
    "nombre"   => $nombre,
  );


  $response = $pais_controller->save($params);

  if($response){
    header("Location: ./pais.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }