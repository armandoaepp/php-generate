
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/paquete-adicional/paquete-adicional.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_adicional_controller = new PaqueteAdicionalController();

  $paquete_id   = $_POST["paquete_id"] ;
  $adicional_id   = $_POST["adicional_id"] ;

  $params = array(
    "paquete_id"   => $paquete_id,
    "adicional_id"   => $adicional_id,
  );


  $response = $paquete_adicional_controller->save($params);

  if($response){
    header("Location: ./paquete-adicional.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
