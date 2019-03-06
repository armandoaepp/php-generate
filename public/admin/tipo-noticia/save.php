
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-noticia/tipo-noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_noticia_controller = new TipoNoticiaController();

  $nombre   = $_POST["nombre"] ;
  $publicar   = $_POST["publicar"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "tipo-noticia") ;
  }

  $url = UrlHelper::urlFriendly($nombre); 

  $params = array(
    "nombre"   => $nombre,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
    "url"  => $url,
  );


  $response = $tipo_noticia_controller->save($params);

  if($response){
    header("Location: ./tipo-noticia.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
