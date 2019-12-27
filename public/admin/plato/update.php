
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/plato/plato.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $plato_controller = new PlatoController();

  $plato_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $categoria_id   = $_POST["categoria_id"] ;
  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $precio   = $_POST["precio"] ;
  $descuento   = $_POST["descuento"] ;
  $precio_descuento   = $_POST["precio_descuento"] ;
  $fecha_ini_promo   = $_POST["fecha_ini_promo"] ;
  $fecha_fin_promo   = $_POST["fecha_fin_promo"] ;
  $num_visitas   = $_POST["num_visitas"] ;
  $publicar   = $_POST["publicar"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "plato") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "plato_id"   => $plato_id,
    "categoria_id"   => $categoria_id,
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "precio"   => $precio,
    "descuento"   => $descuento,
    "precio_descuento"   => $precio_descuento,
    "fecha_ini_promo"   => $fecha_ini_promo,
    "fecha_fin_promo"   => $fecha_fin_promo,
    "num_visitas"   => $num_visitas,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
  );


  $response = $plato_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./plato.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
