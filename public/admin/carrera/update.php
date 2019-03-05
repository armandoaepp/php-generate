
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/carrera/carrera.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $carrera_controller = new CarreraController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $slide   = $_POST["slide"] ;
  $presentacion   = $_POST["presentacion"] ;
  $porque   = $_POST["porque"] ;
  $donde   = $_POST["donde"] ;
  $certificacion   = $_POST["certificacion"] ;
  $titulos   = $_POST["titulos"] ;
  $inversion   = $_POST["inversion"] ;
  $titulacion   = $_POST["titulacion"] ;
  $duracion   = $_POST["duracion"] ;
  $dia   = $_POST["dia"] ;
  $horario   = $_POST["horario"] ;
  $lugar   = $_POST["lugar"] ;
  $precio   = $_POST["precio"] ;
  $equipos   = $_POST["equipos"] ;
  $consultas   = $_POST["consultas"] ;
  $dirigido   = $_POST["dirigido"] ;
  $aquien   = $_POST["aquien"] ;
  $temas   = $_POST["temas"] ;
  $item   = $_POST["item"] ;
  $publicar   = $_POST["publicar"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "carrera") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $url = UrlHelper::urlFriendly($titulo); 

  $params = array(
    "id"   => $id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "slide"   => $slide,
    "presentacion"   => $presentacion,
    "porque"   => $porque,
    "donde"   => $donde,
    "certificacion"   => $certificacion,
    "titulos"   => $titulos,
    "inversion"   => $inversion,
    "titulacion"   => $titulacion,
    "duracion"   => $duracion,
    "dia"   => $dia,
    "horario"   => $horario,
    "lugar"   => $lugar,
    "precio"   => $precio,
    "equipos"   => $equipos,
    "consultas"   => $consultas,
    "dirigido"   => $dirigido,
    "aquien"   => $aquien,
    "temas"   => $temas,
    "item"   => $item,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
    "url"  => $url,
  );


  $response = $carrera_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./carrera.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
