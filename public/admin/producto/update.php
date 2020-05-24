
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/producto/producto.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $producto_controller = new ProductoController();

  $producto_id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $sub_categoria_id   = $_POST["sub_categoria_id"] ;
  $categoria_id   = $_POST["categoria_id"] ;
  $codigo   = $_POST["codigo"] ;
  $nombre   = $_POST["nombre"] ;
  $descripcion_corta   = $_POST["descripcion_corta"] ;
  $precio   = $_POST["precio"] ;
  $descuento   = $_POST["descuento"] ;
  $precio_descuento   = $_POST["precio_descuento"] ;
  $num_visitas   = $_POST["num_visitas"] ;
  $publicar   = $_POST["publicar"] ;

  $params = array(
    "producto_id"   => $producto_id,
    "sub_categoria_id"   => $sub_categoria_id,
    "categoria_id"   => $categoria_id,
    "codigo"   => $codigo,
    "nombre"   => $nombre,
    "descripcion_corta"   => $descripcion_corta,
    "precio"   => $precio,
    "descuento"   => $descuento,
    "precio_descuento"   => $precio_descuento,
    "num_visitas"   => $num_visitas,
    "publicar"   => $publicar,
  );


  $response = $producto_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./producto.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
