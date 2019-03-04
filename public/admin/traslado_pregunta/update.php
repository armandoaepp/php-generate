
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/traslado_pregunta/traslado_pregunta.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $traslado_pregunta_controller = new TrasladoPreguntaController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $pregunta   = $_POST["pregunta"] ;
  $respuesta   = $_POST["respuesta"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $params = array(
    "id"   => $id,
    "pregunta"   => $pregunta,
    "respuesta"   => $respuesta,
    "orden"   => $orden,
    "fecha"   => $fecha,
  );


  $response = $traslado_pregunta_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./traslado_pregunta.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
