
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/etiqueta/etiqueta.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $etiqueta_controller = new EtiquetaController();

  $eti_descripcion   = $_POST["eti_descripcion"] ;
  $eti_publicar   = $_POST["eti_publicar"] ;

  $params = array(
    "eti_descripcion"   => $eti_descripcion,
    "eti_publicar"   => $eti_publicar,
  );


  $response = $etiqueta_controller->save($params);

  if($response){
    header("Location: ./etiqueta.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
