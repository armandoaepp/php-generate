
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/reservacion/reservacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $reservacion_controller = new ReservacionController();

  $tipo_habitacion_id   = $_POST["tipo_habitacion_id"] ;
  $nombre   = $_POST["nombre"] ;
  $apellidos   = $_POST["apellidos"] ;
  $cantidad   = $_POST["cantidad"] ;
  $cuidad_origen   = $_POST["cuidad_origen"] ;
  $fecha_llegada   = $_POST["fecha_llegada"] ;
  $fecha_salida   = $_POST["fecha_salida"] ;
  $telefono   = $_POST["telefono"] ;
  $email   = $_POST["email"] ;

  $params = array(
    "tipo_habitacion_id"   => $tipo_habitacion_id,
    "nombre"   => $nombre,
    "apellidos"   => $apellidos,
    "cantidad"   => $cantidad,
    "cuidad_origen"   => $cuidad_origen,
    "fecha_llegada"   => $fecha_llegada,
    "fecha_salida"   => $fecha_salida,
    "telefono"   => $telefono,
    "email"   => $email,
  );


  $response = $reservacion_controller->save($params);

  if($response){
    header("Location: ./reservacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
