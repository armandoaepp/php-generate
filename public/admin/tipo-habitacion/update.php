
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-habitacion/tipo-habitacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_habitacion_controller = new TipoHabitacionController();

  $tipo_habitacion_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $params = array(
    "tipo_habitacion_id"   => $tipo_habitacion_id,
    "nombre"   => $nombre,
  );


  $response = $tipo_habitacion_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./tipo-habitacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
