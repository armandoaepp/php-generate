
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/convenio-img/convenio-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $convenio_img_controller = new ConvenioImgController();

  $convenio_id   = $_POST["convenio_id"] ;
  $item   = $_POST["item"] ;
  $desc_img   = $_POST["desc_img"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "convenio-img") ;
  }


  $params = array(
    "convenio_id"   => $convenio_id,
    "item"   => $item,
    "desc_img"   => $desc_img,
    "imagen"  => $imagen,
  );


  $response = $convenio_img_controller->save($params);

  if($response){
    header("Location: ./convenio-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
