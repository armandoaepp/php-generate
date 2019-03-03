
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/chef/chef.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $chef_controller = new ChefController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $apellidos   = $_POST["apellidos"] ;
  $cargo   = $_POST["cargo"] ;
  $resumen   = $_POST["resumen"] ;
  $descripcion   = $_POST["descripcion"] ;
  $item   = $_POST["item"] ;
  $publicar   = $_POST["publicar"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "chef") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "id"   => $id,
    "nombre"   => $nombre,
    "apellidos"   => $apellidos,
    "cargo"   => $cargo,
    "resumen"   => $resumen,
    "descripcion"   => $descripcion,
    "item"   => $item,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
  );


  $response = $chef_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./chef.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
