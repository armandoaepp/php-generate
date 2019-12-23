
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/categoria/categoria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $categoria_controller = new CategoriaController();

  $categoria_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $desc_categoria   = $_POST["desc_categoria"] ;
  $params = array(
    "categoria_id"   => $categoria_id,
    "desc_categoria"   => $desc_categoria,
  );


  $response = $categoria_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./categoria.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
