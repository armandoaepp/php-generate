
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/sub-categoria/sub-categoria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $sub_categoria_controller = new SubCategoriaController();

  $categoria_id   = $_POST["categoria_id"] ;
  $sc_nombre   = $_POST["sc_nombre"] ;
  $sc_publicar   = $_POST["sc_publicar"] ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  if($file_imagen){
    $imagen = UploadFiles::uploadFile($file_imagen, "sub-categoria") ;
  }


  $params = array(
    "categoria_id"   => $categoria_id,
    "sc_nombre"   => $sc_nombre,
    "sc_publicar"   => $sc_publicar,
    "sc_imagen"  => $imagen,
  );


  $response = $sub_categoria_controller->save($params);

  if($response){
    header("Location: ./sub-categoria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
