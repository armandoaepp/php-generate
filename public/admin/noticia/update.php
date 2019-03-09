
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticia/noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticia_controller = new NoticiaController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo          = $_POST["titulo"] ;
  $descripcion     = $_POST["descripcion"] ;
  // $item         = $_POST["item"] ;
  $tipo_noticia_id = $_POST["tipo_noticia_id"] ; 
  $glosa           = !empty($_POST["glosa"]) ? $_POST["glosa"] : "" ;
  $publicar        = $_POST["publicar"] ;
  $img_bd          = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen     = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : '' ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "noticia") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $url = UrlHelper::urlFriendly($titulo); 

  $params = array(
    "id"              => $id,
    "titulo"          => $titulo,
    "tipo_noticia_id" => $tipo_noticia_id,
    "descripcion"     => $descripcion,
    "item"            => $item,
    "glosa"           => $glosa,
    "publicar"        => $publicar,
    "imagen"          => $imagen,
    "url"             => $url,
  );


  $response = $noticia_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./noticia.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
