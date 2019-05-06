
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/actividad/actividad.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $actividad_controller = new ActividadController();

  $tipo_paquete_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $horas   = $_POST["horas"] ;
  $params = array(
    "tipo_paquete_id"   => $tipo_paquete_id,
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "horas"   => $horas,
  );


  $response = $actividad_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./actividades.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
