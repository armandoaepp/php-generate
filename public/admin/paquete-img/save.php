
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-img/paquete-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_img_controller = new PaqueteImgController();

  $paquete_id   = $_POST["paquete_id"] ;
  $item   = $_POST["item"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "paquete-img") ;
  }


  $params = array(
    "paquete_id"   => $paquete_id,
    "item"   => $item,
    "imagen"  => $imagen,
  );


  $response = $paquete_img_controller->save($params);

  if($response){
    header("Location: ./paquete-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
