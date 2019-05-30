
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete/paquete.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_controller = new PaqueteController();

  $ubigeo_id           = $_POST["ubigeo_id"] ;
  $nombre              = $_POST["nombre"] ;
  $descripcion         = !empty($_POST["descripcion"]) ? $_POST["descripcion"]: "" ;
  $recomendacion       = !empty($_POST["recomendacion"]) ? $_POST["recomendacion"] : "" ;
  $num_dias            = $_POST["num_dias"] ;
  $num_noches          = !empty($_POST["num_noches"]) ? $_POST["num_noches"] : 0 ;
  $precio              = $_POST["precio"] ;
  $descuento           = $_POST["descuento"] ;
  // $precio_descuento = $_POST["precio_descuento"] ;
  // $fecha_ini_promo     = !empty($_POST["fecha_ini_promo"]) ? $_POST["fecha_ini_promo"]: null ;
  // $fecha_fin_promo     = !empty($_POST["fecha_fin_promo"]) ? $_POST["fecha_fin_promo"]: null ;
  $fechas_promo     = !empty($_POST["fechas_promo"]) ? $_POST["fechas_promo"]: null ;

  // $num_visitas         = !empty($_POST["num_visitas"]) ? $_POST["num_visitas"] : 0 ;
  $publicar            = $_POST["publicar"] ;
  $url                 = UrlHelper::urlFriendly($nombre);
  $file_imagenes     = !empty($_FILES["imagenes"]) ? $_FILES["imagenes"]: [] ;

  $actividad_ids    = !empty($_POST["actividad_ids"]) ? $_POST["actividad_ids"] : [] ;
  $actividad_horas  = !empty($_POST["actividad_horas"]) ? $_POST["actividad_horas"] : [] ;

  $adicional_ids    = !empty($_POST["adicional_ids"]) ? $_POST["adicional_ids"] : [] ;
  $adicional_precios  = !empty($_POST["adicional_precios"]) ? $_POST["adicional_precios"] : [] ;


  $servicio_ids_incluye = !empty($_POST["servicio_ids_incluye"]) ? $_POST["servicio_ids_incluye"]: [] ;
  // $adicionales_ids      = !empty($_POST["adicionales_ids"]) ? $_POST["adicionales_ids"]          : [] ;

  $fecha_ini_promo = NULL ;
  $fecha_fin_promo = NULL ;
  if( !empty($fechas_promo) )
  {
    $fechas = explode ( '-' , $fechas_promo ) ;
    $fecha_ini_promo = HelperDate::formatDate_dd_mm_yyyy_to_DB($fechas[0]) ;
    $fecha_fin_promo = HelperDate::formatDate_dd_mm_yyyy_to_DB($fechas[1]) ;
  }


  $params = array(
    "ubigeo_id"            => $ubigeo_id,
    "nombre"               => $nombre,
    "descripcion"          => $descripcion,
    "recomendacion"        => $recomendacion,
    "num_dias"             => $num_dias,
    "num_noches"           => $num_noches,
    "precio"               => $precio,
    "descuento"            => $descuento,
    // "precio_descuento"  => $precio_descuento,
    "fecha_ini_promo"      => $fecha_ini_promo,
    "fecha_fin_promo"      => $fecha_fin_promo,
    // "num_visitas"       => $num_visitas,
    "publicar"             => $publicar,
    "url"                  => $url,
    // "actividad_ids"        => $actividad_ids,
    // "servicio_ids_incluye" => $servicio_ids_incluye,

  );
  // var_dump($params);
  $paquete_id = $paquete_controller->save($params);

  if($paquete_id > 0 )
  {
    ## Itinerario
    if($num_dias > 0)
    {
      $itinerario_ctrl = new ItinerarioController() ;
      for ($i=0; $i < $num_dias ; $i++)
      {
        $params_itinerario = array(
          'paquete_id'  => $paquete_id,
          'dia'         => ( $i + 1),
          'titulo'      => "",
          'descripcion' => "",
        ) ;

        $itinerario_ctrl->save( $params_itinerario) ;
      }
    }

    ## Actividades Paquete
    $paquete_actividad_ctrl = new PaqueteActividadController() ;
    $actividad_ctrl = new ActividadController() ;

    for ($i=0; $i < count($actividad_ids) ; $i++)
    {
      $actividad_id = $actividad_ids[$i];
      $horas = $actividad_horas[$i];

      // $actividad_default = $actividad_ctrl->find($actividad_id) ;

      // $paquete_id = $paquete_id;
      // $actividad_id = $actividad_id ;
      // $horas = $actividad_default->horas ;
      $descripcion = "";

      $params_acti = array(
        'paquete_id'   => $paquete_id,
        'actividad_id' => $actividad_id,
        'horas'        => $horas,
        'descripcion'  => $descripcion,
      ) ;

      $paquete_actividad_ctrl->save( $params_acti) ;

    }

    ## Servicios Paquete(Servivio incluye: TIPO 1)
    $paquete_servicio_ctrl = new PaqueteServicioController() ;
    $tipo = 1 ;

    for ($i=0; $i < count($servicio_ids_incluye) ; $i++)
    {
      $servicio_id = $servicio_ids_incluye[$i];

      $descripcion = "";

      $params_serv = array(
        'paquete_id'  => $paquete_id,
        'servicio_id' => $servicio_id,
        'tipo'        => 1,
        'descripcion' => $descripcion,
      ) ;

      $paquete_servicio_ctrl->save( $params_serv) ;

    }

    ## Adicionales Paquete
    $paquete_adicional_ctrl = new PaqueteAdicionalController() ;

    for ($i=0; $i < count($adicional_ids) ; $i++)
    {
      $adicional_id = $adicional_ids[$i];
      $precio = $adicional_precios[$i];

      $descripcion = "";

      $params_serv = array(
        'paquete_id'  => $paquete_id,
        'adicional_id' => $adicional_id,
        'precio' => $precio,
      ) ;

      $paquete_adicional_ctrl->save( $params_serv) ;

    }



    # ===================================================================

    // $imagenes = [];
    $imagenes = UploadFiles::uploadMultiFiles($file_imagenes, "paquetes", $paquete_id ) ;

    if($paquete_id > 0)
    {
      $paquete_img_controller = new PaqueteImgController();

      for ($i=0; $i < count($imagenes) ; $i++)
      {

        $params_det = array(
          "paquete_id" => $paquete_id,
          "item"       => ($i + 1),
          "imagen"     => $imagenes[$i] ,
        );

        $response = $paquete_img_controller->save($params_det);

      }
    }

    # ===================================================================

  }


  if($paquete_id>0){
    header("Location: ./paquete.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Registrar". $response ;
  }
