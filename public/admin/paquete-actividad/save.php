
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-actividad/paquete-actividad.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_actividad_controller = new PaqueteActividadController();

  $paquete_id   = $_POST["paquete_id"] ;
  $actividad_id   = $_POST["actividad_id"] ;
  $horas   = $_POST["horas"] ;
  $descripcion   = $_POST["descripcion"] ;

  $params = array(
    "paquete_id"   => $paquete_id,
    "actividad_id"   => $actividad_id,
    "horas"   => $horas,
    "descripcion"   => $descripcion,
  );


  $response = $paquete_actividad_controller->save($params);

  if($response){
    header("Location: ./paquete-actividad.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
