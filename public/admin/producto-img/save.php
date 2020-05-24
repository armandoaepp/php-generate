
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/producto-img/producto-img.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $producto_img_controller = new ProductoImgController();

  $producto_id   = $_POST["producto_id"] ;
  $pi_jerarquia   = $_POST["pi_jerarquia"] ;
  $pi_descripcion   = $_POST["pi_descripcion"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "producto-img") ;
  }


  $params = array(
    "producto_id"   => $producto_id,
    "pi_jerarquia"   => $pi_jerarquia,
    "pi_descripcion"   => $pi_descripcion,
    "pi_imagen"  => $imagen,
  );


  $response = $producto_img_controller->save($params);

  if($response){
    header("Location: ./producto-img.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
