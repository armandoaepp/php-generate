
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/empresa/empresa.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $empresa_controller = new EmpresaController();

  $ruc   = $_POST["ruc"] ;
  $nombre   = $_POST["nombre"] ;

  $params = array(
    "ruc"   => $ruc,
    "nombre"   => $nombre,
  );


  $response = $empresa_controller->save($params);

  if($response){
    header("Location: ./empresa.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
