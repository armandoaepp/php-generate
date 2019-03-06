
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-noticia/tipo-noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_noticia_controller = new TipoNoticiaController();

  $tipo_noticia_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre      = $_POST["nombre"] ;
  $publicar    = $_POST["publicar"] ;
  $img_bd      = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "tipo-noticia") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $url = UrlHelper::urlFriendly($nombre); 

  $params = array(
    "tipo_noticia_id" => $tipo_noticia_id,
    "nombre"          => $nombre,
    "publicar"        => $publicar,
    "imagen"          => $imagen,
    "url"             => $url,
  );


  $response = $tipo_noticia_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./tipo-noticia.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
