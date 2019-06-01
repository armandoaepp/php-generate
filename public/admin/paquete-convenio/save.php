
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-convenio/paquete-convenio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_convenio_controller = new PaqueteConvenioController();

  $paquete_paquete_id   = $_POST["paquete_paquete_id"] ;
  $convenio_convenio_id   = $_POST["convenio_convenio_id"] ;

  $params = array(
    "paquete_paquete_id"   => $paquete_paquete_id,
    "convenio_convenio_id"   => $convenio_convenio_id,
  );


  $response = $paquete_convenio_controller->save($params);

  if($response){
    header("Location: ./paquete-convenio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
