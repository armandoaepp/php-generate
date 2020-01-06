
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/habitacion/habitacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $habitacion_controller = new HabitacionController();

  $nombre          = $_POST["nombre"] ;
  $descripcion     = !empty($_POST["descripcion"]) ? $_POST["descripcion"]        : "" ;
  $caracteristicas = !empty($_POST["caracteristicas"]) ? $_POST["caracteristicas"]: "" ;
  $precio          = $_POST["precio"] ;
  $num_visitas     = !empty($_POST["num_visitas"]) ? $_POST["num_visitas"]        : 0 ;
  $publicar        = $_POST["publicar"] ;
  $file_imagenes     = !empty($_FILES["imagenes"]) ? $_FILES["imagenes"]: [] ;

  $params = array(
    "nombre"          => $nombre,
    "descripcion"     => $descripcion,
    "caracteristicas" => $caracteristicas,
    "precio"          => $precio,
    "num_visitas"     => $num_visitas,
    "publicar"        => $publicar,
  );

  // $response = $habitacion_controller->save($params);
  $habitacion_id = $habitacion_controller->save($params);

  # ===================================================================
    // $imagenes = [];
    $imagenes = UploadFiles::uploadMultiFiles($file_imagenes, "habitaciones", $habitacion_id ) ;

    if($habitacion_id > 0)
    {
      $habitacion_img_controller = new HabitacionImgController();

      for ($i=0; $i < count($imagenes) ; $i++)
      {

        $params_det = array(
          "habitacion_id" => $habitacion_id,
          "jerarquia"     => ($i + 1),
          "imagen"        => $imagenes[$i] ,
          "desc_img"      => '' ,
        );

        $response = $habitacion_img_controller->save($params_det);

      }
    }

  # ===================================================================


  if($response){
    header("Location: ./habitacion.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
