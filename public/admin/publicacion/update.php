
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/publicacion/publicacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $publicacion_controller = new PublicacionController();

  $publicacion_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $tipo_publicacion_id = $_POST["tipo_publicacion_id"] ;
  $titulo              = $_POST["titulo"] ;
  $descripcion         = !empty($_POST["descripcion"]) ? $_POST["descripcion"] : '' ;
  // $url_file            = $_POST["url_file"] ;
  $publicar            = $_POST["publicar"] ;

  $file_db   = !empty($_POST["file_db"]) ? $_POST["file_db"] : "" ;
  $file   = !empty($_FILES["url_file"]) ? $_FILES["url_file"] : "" ;

  $url_file  = "";
  $url_file = UploadFiles::uploadFile($file, "publicaciones") ;

  if (empty($url_file) ) {
    $url_file = $file_db ;
  }

  $params = array(
    "publicacion_id"      => $publicacion_id,
    "tipo_publicacion_id" => $tipo_publicacion_id,
    "titulo"              => $titulo,
    "descripcion"         => $descripcion,
    "url_file"            => $url_file,
    "publicar"            => $publicar,
  );


  $response = $publicacion_controller->update($params);

  if($response)
  {

    if( !empty($url_file) && $url_file != $file_db )
    {
      $status = UploadFiles::removeFile($file_db) ;
    }

    header("Location: ./publicacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
