
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/producto-img/producto-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $producto_img_controller = new ProductoImgController();

  $producto_img_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $producto_id   = $_POST["producto_id"] ;
  $pi_jerarquia   = $_POST["pi_jerarquia"] ;
  $pi_descripcion   = $_POST["pi_descripcion"] ;

  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "producto-img") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "producto_img_id"   => $producto_img_id,
    "producto_id"   => $producto_id,
    "pi_jerarquia"   => $pi_jerarquia,
    "pi_descripcion"   => $pi_descripcion,
    "pi_imagen"  => $imagen,
  );


  $response = $producto_img_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./producto-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
