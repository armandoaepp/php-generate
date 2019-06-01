
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-video/paquete-video.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_video_controller = new PaqueteVideoController();

  $paquete_id   = $_POST["paquete_id"] ;
  $url_video   = $_POST["url_video"] ;
  $item   = $_POST["item"] ;
  $desc_video   = $_POST["desc_video"] ;

  $params = array(
    "paquete_id"   => $paquete_id,
    "url_video"   => $url_video,
    "item"   => $item,
    "desc_video"   => $desc_video,
  );


  $response = $paquete_video_controller->save($params);

  if($response){
    header("Location: ./paquete-video.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
