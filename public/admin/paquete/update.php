
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete/paquete.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_controller = new PaqueteController();

  $paquete_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $ubigeo_id   = $_POST["ubigeo_id"] ;
  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $recomendacion   = $_POST["recomendacion"] ;
  $num_dias   = $_POST["num_dias"] ;
  $num_noches   = $_POST["num_noches"] ;
  $precio   = $_POST["precio"] ;
  $descuento   = $_POST["descuento"] ;
  $precio_descuento   = $_POST["precio_descuento"] ;
  $fecha_ini_promo   = $_POST["fecha_ini_promo"] ;
  $fecha_fin_promo   = $_POST["fecha_fin_promo"] ;
  $num_visitas   = $_POST["num_visitas"] ;
  $publicar   = $_POST["publicar"] ;
  $url = UrlHelper::urlFriendly($ubigeo_id); 

  $params = array(
    "paquete_id"   => $paquete_id,
    "ubigeo_id"   => $ubigeo_id,
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "recomendacion"   => $recomendacion,
    "num_dias"   => $num_dias,
    "num_noches"   => $num_noches,
    "precio"   => $precio,
    "descuento"   => $descuento,
    "precio_descuento"   => $precio_descuento,
    "fecha_ini_promo"   => $fecha_ini_promo,
    "fecha_fin_promo"   => $fecha_fin_promo,
    "num_visitas"   => $num_visitas,
    "publicar"   => $publicar,
    "url"  => $url,
  );


  $response = $paquete_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./paquete.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
