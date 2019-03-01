
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/home/home.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $home_controller = new HomeController();

  $titulo   = $_POST["titulo"] ;
  $titulo_2   = $_POST["titulo_2"] ;
  $url_2   = $_POST["url_2"] ;
  $imagen_2   = $_POST["imagen_2"] ;
  $titulo_3   = $_POST["titulo_3"] ;
  $url_3   = $_POST["url_3"] ;
  $imagen_3   = $_POST["imagen_3"] ;
  $convenios   = $_POST["convenios"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "home") ;

  $url = UrlHelper::urlFriendly($titulo); 

  $params = array(
    "titulo"   => $titulo,
    "titulo_2"   => $titulo_2,
    "url_2"   => $url_2,
    "imagen_2"   => $imagen_2,
    "titulo_3"   => $titulo_3,
    "url_3"   => $url_3,
    "imagen_3"   => $imagen_3,
    "convenios"   => $convenios,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
    "url"  => $url,
  );


  $response = $home_controller->save($params);

  if($response){
    header("Location: ./home.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
