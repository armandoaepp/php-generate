
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/video/video.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $video_controller = new VideoController();

  $video_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $tipo_video   = $_POST["tipo_video"] ;
  $url = UrlHelper::urlFriendly($titulo); 

  $params = array(
    "video_id"   => $video_id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "tipo_video"   => $tipo_video,
    "url"  => $url,
  );


  $response = $video_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./video.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
