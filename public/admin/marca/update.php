
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/marca/marca.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $marca_controller = new MarcaController();

  $idmarca = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "idmarca"   => $idmarca,
    "nombre"   => $nombre,
    "publicar"   => $publicar,
  );


  $response = $marca_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./marca.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
