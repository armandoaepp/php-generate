
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/galeria-img/galeria-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $galeria_img_controller = new GaleriaImgController();

  $item   = $_POST["item"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "galeria-img") ;
  }


  $params = array(
    "item"   => $item,
    "imagen"  => $imagen,
  );


  $response = $galeria_img_controller->save($params);

  if($response){
    header("Location: ./galeria-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
