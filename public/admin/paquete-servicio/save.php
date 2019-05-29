
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-servicio/paquete-servicio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_servicio_controller = new PaqueteServicioController();

  $paquete_id   = $_POST["paquete_id"] ;
  $servicio_id   = $_POST["servicio_id"] ;
  $tipo   = $_POST["tipo"] ;

  $params = array(
    "paquete_id"   => $paquete_id,
    "servicio_id"   => $servicio_id,
    "tipo"   => $tipo,
  );


  $response = $paquete_servicio_controller->save($params);

  if($response){
    header("Location: ./paquete-servicio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
