
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/galeria-img/galeria-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $galeria_img_controller = new GaleriaImgController();

  $galeria_img_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $item   = $_POST["item"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "galeria-img") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "galeria_img_id"   => $galeria_img_id,
    "item"   => $item,
    "imagen"  => $imagen,
  );


  $response = $galeria_img_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./galeria-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
