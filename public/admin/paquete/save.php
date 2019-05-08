
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete/paquete.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_controller = new PaqueteController();

  $ubigeo_id        = $_POST["ubigeo_id"] ;
  $nombre           = $_POST["nombre"] ;
  $descripcion      = !empty($_POST["descripcion"]) ? $_POST["descripcion"] : "" ;
  $recomendacion      = !empty($_POST["recomendacion"]) ? $_POST["recomendacion"] : "" ;
  $num_dias         = $_POST["num_dias"] ;
  $num_noches       = !empty($_POST["num_noches"]) ? $_POST["num_noches"] : 0 ;
  $precio           = $_POST["precio"] ;
  $descuento        = $_POST["descuento"] ;
  // $precio_descuento = $_POST["precio_descuento"] ;
  $fecha_ini_promo  = !empty($_POST["fecha_ini_promo"]) ? $_POST["fecha_ini_promo"] : null ;
  $fecha_fin_promo  = !empty($_POST["fecha_fin_promo"]) ? $_POST["fecha_fin_promo"] : null ;
  $num_visitas  = !empty($_POST["num_visitas"]) ? $_POST["num_visitas"] : 0 ;
  $publicar         = $_POST["publicar"] ;
  $url              = UrlHelper::urlFriendly($nombre);

  $params = array(
    "ubigeo_id"        => $ubigeo_id,
    "nombre"           => $nombre,
    "descripcion"      => $descripcion,
    "recomendacion"    => $recomendacion,
    "num_dias"         => $num_dias,
    "num_noches"       => $num_noches,
    "precio"           => $precio,
    "descuento"        => $descuento,
    // "precio_descuento" => $precio_descuento,
    "fecha_ini_promo"  => $fecha_ini_promo,
    "fecha_fin_promo"  => $fecha_fin_promo,
    "num_visitas"      => $num_visitas,
    "publicar"         => $publicar,
    "url"              => $url,
  );


  $response = $paquete_controller->save($params);

  if($response){
    header("Location: ./paquete.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
