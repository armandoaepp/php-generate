
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-convenio/tipo-convenio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_convenio_controller = new TipoConvenioController();

  $tipo_convenio_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $desc_convenio   = $_POST["desc_convenio"] ;
  $params = array(
    "tipo_convenio_id"   => $tipo_convenio_id,
    "desc_convenio"   => $desc_convenio,
  );


  $response = $tipo_convenio_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./tipo-convenio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
