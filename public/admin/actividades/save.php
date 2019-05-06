
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/actividad/actividad.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $actividad_controller = new ActividadController();

  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $horas   = $_POST["horas"] ;

  $params = array(
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "horas"   => $horas,
  );


  $response = $actividad_controller->save($params);

  if($response){
    header("Location: ./actividades.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
