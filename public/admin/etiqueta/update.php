
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/etiqueta/etiqueta.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $etiqueta_controller = new EtiquetaController();

  $etiqueta_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $eti_descripcion   = $_POST["eti_descripcion"] ;
  $eti_publicar   = $_POST["eti_publicar"] ;

  $params = array(
    "etiqueta_id"   => $etiqueta_id,
    "eti_descripcion"   => $eti_descripcion,
    "eti_publicar"   => $eti_publicar,
  );


  $response = $etiqueta_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./etiqueta.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
