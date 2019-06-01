
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-convenio/tipo-convenio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_convenio_controller = new TipoConvenioController();

  $desc_convenio   = $_POST["desc_convenio"] ;

  $params = array(
    "desc_convenio"   => $desc_convenio,
  );


  $response = $tipo_convenio_controller->save($params);

  if($response){
    header("Location: ./tipo-convenio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
