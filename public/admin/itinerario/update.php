
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/itinerario/itinerario.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $itinerario_controller = new ItinerarioController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $paquete_id   = $_POST["paquete_id"] ;
  $dia   = $_POST["dia"] ;
  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $params = array(
    "id"   => $id,
    "paquete_id"   => $paquete_id,
    "dia"   => $dia,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
  );


  $response = $itinerario_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./itinerario.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
