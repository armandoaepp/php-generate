
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/slidehome/slidehome.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $slidehome_controller = new SlidehomeController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $subtitulo   = $_POST["subtitulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "slidehome") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $url = UrlHelper::urlFriendly($titulo); 

  $params = array(
    "id"   => $id,
    "titulo"   => $titulo,
    "subtitulo"   => $subtitulo,
    "descripcion"   => $descripcion,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
    "url"  => $url,
  );


  $response = $slidehome_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./slidehome.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
