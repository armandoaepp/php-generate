
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/plato/plato.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $plato_controller = new PlatoController();

  $categoria_id     = $_POST["categoria_id"] ;
  $nombre           = $_POST["nombre"] ;
  $descripcion      = $_POST["descripcion"] ;
  $precio           = $_POST["precio"] ;
  $descuento        = $_POST["descuento"] ;
  $precio_descuento = $_POST["precio_descuento"] ;
  // $fecha_ini_promo  = $_POST["fecha_ini_promo"] ;
  // $fecha_fin_promo  = $_POST["fecha_fin_promo"] ;
  $fechas_promo     = !empty($_POST["fechas_promo"]) ? $_POST["fechas_promo"]: null ;
  $num_visitas      = 0;
  $publicar         = $_POST["publicar"] ;
  $file_imagen      = !empty($_FILES["imagen"]) ? $_FILES["imagen"]: "" ;

  $fecha_ini_promo = NULL ;
  $fecha_fin_promo = NULL ;
  if( !empty($fechas_promo) )
  {
    $fechas = explode ( '-' , $fechas_promo ) ;
    $fecha_ini_promo = HelperDate::formatDate_dd_mm_yyyy_to_DB($fechas[0]) ;
    $fecha_fin_promo = HelperDate::formatDate_dd_mm_yyyy_to_DB($fechas[1]) ;
  }

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "platos") ;
  }


  $params = array(
    "categoria_id"     => $categoria_id,
    "nombre"           => $nombre,
    "descripcion"      => $descripcion,
    "precio"           => $precio,
    "descuento"        => $descuento,
    "precio_descuento" => $precio_descuento,
    "fecha_ini_promo"  => $fecha_ini_promo,
    "fecha_fin_promo"  => $fecha_fin_promo,
    "num_visitas"      => $num_visitas,
    "publicar"         => $publicar,
    "imagen"           => $imagen,
  );


  $response = $plato_controller->save($params);

  if($response){
    header("Location: ./plato.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
