
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/galeria/galeria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $galeria_controller = new GaleriaController();

  $galeria_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $params = array(
    "galeria_id"   => $galeria_id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
  );


  $response = $galeria_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./galeria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
