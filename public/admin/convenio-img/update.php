
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/convenio-img/convenio-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $convenio_img_controller = new ConvenioImgController();

  $cnvenio_img_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $convenio_id   = $_POST["convenio_id"] ;
  $item   = $_POST["item"] ;
  $desc_img   = $_POST["desc_img"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "convenio-img") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "cnvenio_img_id"   => $cnvenio_img_id,
    "convenio_id"   => $convenio_id,
    "item"   => $item,
    "desc_img"   => $desc_img,
    "imagen"  => $imagen,
  );


  $response = $convenio_img_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./convenio-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
