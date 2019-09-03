
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/publicacion/publicacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $publicacion_controller = new PublicacionController();

  $publicacion_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $tipo_publicacion_id   = $_POST["tipo_publicacion_id"] ;
  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $url_file   = $_POST["url_file"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "publicacion_id"   => $publicacion_id,
    "tipo_publicacion_id"   => $tipo_publicacion_id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "url_file"   => $url_file,
    "publicar"   => $publicar,
  );


  $response = $publicacion_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./publicacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
