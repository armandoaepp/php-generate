
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-convenio/paquete-convenio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_convenio_controller = new PaqueteConvenioController();

  $paquete_convenio_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $paquete_id   = $_POST["paquete_id"] ;
  $convenio_id   = $_POST["convenio_id"] ;
  $params = array(
    "paquete_convenio_id"   => $paquete_convenio_id,
    "paquete_id"   => $paquete_id,
    "convenio_id"   => $convenio_id,
  );


  $response = $paquete_convenio_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./paquete-convenio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
