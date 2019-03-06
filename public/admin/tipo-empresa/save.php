
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/tipo-empresa/tipo-empresa.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $tipo_empresa_controller = new TipoEmpresaController();

  $descripcion   = $_POST["descripcion"] ;
  $glosa   = $_POST["glosa"] ;
  $params = array(
    "descripcion"   => $descripcion,
    "glosa"   => $glosa,
  );


  $response = $tipo_empresa_controller->save($params);

  if($response){
    header("Location: ./tipo-empresa.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
