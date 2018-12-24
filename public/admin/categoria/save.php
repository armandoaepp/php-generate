
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/categoria/categoria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $categoria_controller = new CategoriaController();

  $nombre   = $_POST["nombre"] ;
  $descripcion   = $_POST["descripcion"] ;
  $visible   = $_POST["visible"] ;
  $fechareg   = $_POST["fechareg"] ;
  $publicar   = $_POST["publicar"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "categoria") ;

  $url = UrlHelper::urlFriendly($nombre); 

  $params = array(
    "nombre"   => $nombre,
    "descripcion"   => $descripcion,
    "visible"   => $visible,
    "fechareg"   => $fechareg,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
    "url"  => $url,
  );


  $response = $categoria_controller->save($params);

  if($response){
    header("Location: ./categoria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
