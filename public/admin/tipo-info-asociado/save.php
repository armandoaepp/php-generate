
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-info-asociado/tipo-info-asociado.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_info_asociado_controller = new TipoInfoAsociadoController();

  $descripcion   = $_POST["descripcion"] ;
  $publicar   = $_POST["publicar"] ;

  $params = array(
    "descripcion"   => $descripcion,
    "publicar"   => $publicar,
  );


  $response = $tipo_info_asociado_controller->save($params);

  if($response){
    header("Location: ./tipo-info-asociado.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
