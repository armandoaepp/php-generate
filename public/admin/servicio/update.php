
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/servicio/servicio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $servicio_controller = new ServicioController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $descripcion = $_POST["descripcion"] ;
  $icono       = $_POST["icono"] ;
  $incluye     = $_POST["incluye"] ;

  $params = array(
    "id"          => $id,
    "descripcion" => $descripcion,
    "icono"       => $icono,
    "incluye"     => $incluye,
  );


  $response = $servicio_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./servicio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
