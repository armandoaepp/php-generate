
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/region/region.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $region_controller = new RegionController();

  $nombre   = $_POST["nombre"] ;

  $params = array(
    "nombre"   => $nombre,
  );


  $response = $region_controller->save($params);

  if($response){
    header("Location: ./region.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
