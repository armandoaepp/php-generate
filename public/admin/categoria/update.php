
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/categoria/categoria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $categoria_controller = new CategoriaController();

  $idcategoria = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $publicar   = $_POST["publicar"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "categoria") ;

  if (empty($imagen) ) {
    $imagen = $img_bd ;
  }

  $url = UrlHelper::urlFriendly($nombre);

  $params = array(
    "idcategoria"   => $idcategoria,
    "nombre"   => $nombre,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
    "url"  => $url,
  );

  // echo "imagen: ". $imagen ."\n <br>" ;
  // echo "img_bd: ". $img_bd ."\n <br>" ;

  $response = $categoria_controller->update($params);

  var_dump($imagen);
  var_dump($img_bd);
  var_dump($response);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }
    // var_dump( $status);
    return ;

    header("Location: ./categoria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
