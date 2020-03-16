
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-habitacion/tipo-habitacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_habitacion_controller = new TipoHabitacionController();

  $nombre   = $_POST["nombre"] ;

  $params = array(
    "nombre"   => $nombre,
  );


  $response = $tipo_habitacion_controller->save($params);

  if($response){
    header("Location: ./tipo-habitacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
