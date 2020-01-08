
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/habitacion/habitacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $habitacion_controller = new HabitacionController();

  $habitacion_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre          = $_POST["nombre"] ;
  $descripcion     = !empty($_POST["descripcion"]) ? $_POST["descripcion"]        : "" ;
  $caracteristicas = !empty($_POST["caracteristicas"]) ? $_POST["caracteristicas"]: "" ;
  $precio          = $_POST["precio"] ;
   $publicar       = $_POST["publicar"] ;

  $params = array(
    "habitacion_id"   => $habitacion_id,
    "nombre"          => $nombre,
    "descripcion"     => $descripcion,
    "caracteristicas" => $caracteristicas,
    "precio"          => $precio,
    "publicar"        => $publicar,
  );

  $response = $habitacion_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./habitacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
