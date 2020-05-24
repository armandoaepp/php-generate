
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/video/video.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $video_controller = new VideoController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $tipo_video   = $_POST["tipo_video"] ;
  $url = UrlHelper::urlFriendly($titulo); 

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "tipo_video"   => $tipo_video,
    "url"  => $url,
  );


  $response = $video_controller->save($params);

  if($response){
    header("Location: ./video.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
