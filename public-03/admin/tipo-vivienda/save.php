
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-vivienda/tipo-vivienda.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_vivienda_controller = new TipoViviendaController();

  $desc_vivienda   = $_POST["desc_vivienda"] ;

  $params = array(
    "desc_vivienda"   => $desc_vivienda,
  );


  $response = $tipo_vivienda_controller->save($params);

  if($response){
    header("Location: ./tipo-vivienda.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
