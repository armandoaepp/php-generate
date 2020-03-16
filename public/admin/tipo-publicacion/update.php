
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-publicacion/tipo-publicacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_publicacion_controller = new TipoPublicacionController();

  $tipo_publicacion_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $descripcion   = $_POST["descripcion"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "tipo_publicacion_id"   => $tipo_publicacion_id,
    "descripcion"   => $descripcion,
    "publicar"   => $publicar,
  );


  $response = $tipo_publicacion_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./tipo-publicacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
