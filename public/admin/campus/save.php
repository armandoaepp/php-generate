
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/campus/campus.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $campus_controller = new CampusController();

  $titulo   = $_POST["titulo"] ;
  $subtitulo   = $_POST["subtitulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "campus") ;

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


  $response = $campus_controller->save($params);

  if($response){
    header("Location: ./campus.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
