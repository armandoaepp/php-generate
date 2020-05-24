
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/categoria/categoria.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $categoria_controller = new CategoriaController();

  $categoria_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $cat_codigo   = $_POST["cat_codigo"] ;
  $cat_nombre   = $_POST["cat_nombre"] ;
  $cat_imagen   = $_POST["cat_imagen"] ;
  $cat_publiciar   = $_POST["cat_publiciar"] ;
  $cat_estado   = $_POST["cat_estado"] ;
  $params = array(
    "categoria_id"   => $categoria_id,
    "cat_codigo"   => $cat_codigo,
    "cat_nombre"   => $cat_nombre,
    "cat_imagen"   => $cat_imagen,
    "cat_publiciar"   => $cat_publiciar,
    "cat_estado"   => $cat_estado,
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
