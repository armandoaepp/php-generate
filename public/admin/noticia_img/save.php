
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticia_img/noticia_img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticia_img_controller = new NoticiaImgController();

  $noticia_id   = $_POST["noticia_id"] ;
  $item   = $_POST["item"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "noticia_img") ;

  $params = array(
    "noticia_id"   => $noticia_id,
    "item"   => $item,
    "imagen"  => $imagen,
  );


  $response = $noticia_img_controller->save($params);

  if($response){
    header("Location: ./noticia_img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
