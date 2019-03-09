
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/empresa/empresa.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $empresa_controller = new EmpresaController();

  $empresa_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $tipo_empresa_id   = $_POST["tipo_empresa_id"] ;
  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $publicar   = $_POST["publicar"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "empresa") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "empresa_id"   => $empresa_id,
    "tipo_empresa_id"   => $tipo_empresa_id,
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
  );


  $response = $empresa_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./empresa.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }