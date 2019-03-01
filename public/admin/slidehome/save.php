
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/slidehome/slidehome.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $slidehome_controller = new SlidehomeController();

  $titulo   = $_POST["titulo"] ;
  $subtitulo   = $_POST["subtitulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "slidehome") ;

  $url = UrlHelper::urlFriendly($titulo); 

  $params = array(
    "titulo"   => $titulo,
    "subtitulo"   => $subtitulo,
    "descripcion"   => $descripcion,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
    "url"  => $url,
  );


  $response = $slidehome_controller->save($params);

  if($response){
    header("Location: ./slidehome.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
