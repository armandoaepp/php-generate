
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/servicio/servicio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $servicio_controller = new ServicioController();

  $descripcion = $_POST["descripcion"] ;
  $icono       = !empty($_POST["icono"]) ? $_POST["icono"] : "" ;
  $incluye     = !empty($_POST["incluye"]) ? $_POST["incluye"] : 0 ;

  $params = array(
    "descripcion" => $descripcion,
    "icono"       => $icono,
    "incluye"     => $incluye,
  );


  $response = $servicio_controller->save($params);

  if($response){
    header("Location: ./servicio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
