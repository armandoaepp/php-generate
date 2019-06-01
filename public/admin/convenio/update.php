
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/convenio/convenio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $convenio_controller = new ConvenioController();

  $convenio_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $tipo_convenio_id   = $_POST["tipo_convenio_id"] ;
  $nombre   = $_POST["nombre"] ;
  $caracteristica   = $_POST["caracteristica"] ;
  $precio   = $_POST["precio"] ;
  $glosa   = $_POST["glosa"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "convenio_id"   => $convenio_id,
    "tipo_convenio_id"   => $tipo_convenio_id,
    "nombre"   => $nombre,
    "caracteristica"   => $caracteristica,
    "precio"   => $precio,
    "glosa"   => $glosa,
    "publicar"   => $publicar,
  );


  $response = $convenio_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./convenio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
