
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-video/paquete-video.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_video_controller = new PaqueteVideoController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $paquete_id   = $_POST["paquete_id"] ;
  $url_video   = $_POST["url_video"] ;
  $item   = $_POST["item"] ;
  $desc_video   = $_POST["desc_video"] ;
  $params = array(
    "id"   => $id,
    "paquete_id"   => $paquete_id,
    "url_video"   => $url_video,
    "item"   => $item,
    "desc_video"   => $desc_video,
  );


  $response = $paquete_video_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./paquete-video.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
