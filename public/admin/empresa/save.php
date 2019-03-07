
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/empresa/empresa.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $empresa_controller = new EmpresaController();

  $tipo_empresa_id   = $_POST["tipo_empresa_id"] ;
  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $publicar   = $_POST["publicar"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "empresa") ;
  }

  $params = array(
    "tipo_empresa_id"   => $tipo_empresa_id,
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
  );


  $response = $empresa_controller->save($params);

  if($response){
    header("Location: ./empresa.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
