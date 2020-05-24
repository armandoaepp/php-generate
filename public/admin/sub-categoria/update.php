
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/sub-categoria/sub-categoria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $sub_categoria_controller = new SubCategoriaController();

  $sub_categoria_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $categoria_id   = $_POST["categoria_id"] ;
  $sc_nombre   = $_POST["sc_nombre"] ;
  $sc_publicar   = $_POST["sc_publicar"] ;

  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "sub-categoria") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $params = array(
    "sub_categoria_id"   => $sub_categoria_id,
    "categoria_id"   => $categoria_id,
    "sc_nombre"   => $sc_nombre,
    "sc_publicar"   => $sc_publicar,
    "sc_imagen"  => $imagen,
  );


  $response = $sub_categoria_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./sub-categoria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
