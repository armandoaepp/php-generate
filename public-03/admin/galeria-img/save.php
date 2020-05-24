
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/galeria-img/galeria-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $galeria_img_controller = new GaleriaImgController();

  $galeria_id   = $_POST["galeria_id"] ;
  $item   = $_POST["item"] ;
  $desc_img   = $_POST["desc_img"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "galeria-img") ;
  }


  $params = array(
    "galeria_id"   => $galeria_id,
    "item"   => $item,
    "desc_img"   => $desc_img,
    "imagen"  => $imagen,
  );


  $response = $galeria_img_controller->save($params);

  if($response){
    header("Location: ./galeria-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
