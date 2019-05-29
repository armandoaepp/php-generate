
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-servicio/paquete-servicio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_servicio_controller = new PaqueteServicioController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $paquete_id   = $_POST["paquete_id"] ;
  $servicio_id   = $_POST["servicio_id"] ;
  $tipo   = $_POST["tipo"] ;
  $params = array(
    "id"   => $id,
    "paquete_id"   => $paquete_id,
    "servicio_id"   => $servicio_id,
    "tipo"   => $tipo,
  );


  $response = $paquete_servicio_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./paquete-servicio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
