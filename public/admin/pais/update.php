
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/pais/pais.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $pais_controller = new PaisController();

  $pais_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $nombre   = $_POST["nombre"] ;
  $params = array(
    "pais_id"   => $pais_id,
    "nombre"   => $nombre,
  );


  $response = $pais_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./pais.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
