
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticia_img/noticia_img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticia_img_controller = new NoticiaImgController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $noticia_id   = $_POST["noticia_id"] ;
  $jerarquia   = $_POST["jerarquia"] ;
  $fecha   = $_POST["fecha"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "noticia_img") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "noticia_id"   => $noticia_id,
    "jerarquia"   => $jerarquia,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
  );


  $response = $noticia_img_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./noticia_img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
