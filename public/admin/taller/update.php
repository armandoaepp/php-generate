
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/taller/taller.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $taller_controller = new TallerController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $chef_id   = $_POST["chef_id"] ;
  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $certificacion   = $_POST["certificacion"] ;
  $titulos   = $_POST["titulos"] ;
  $titulacion   = $_POST["titulacion"] ;
  $duracion   = $_POST["duracion"] ;
  $dia   = $_POST["dia"] ;
  $horario   = $_POST["horario"] ;
  $lugar   = $_POST["lugar"] ;
  $precio   = $_POST["precio"] ;
  $dirigido   = $_POST["dirigido"] ;
  $sesiones   = $_POST["sesiones"] ;
  $temas   = $_POST["temas"] ;
  $item   = $_POST["item"] ;
  $glosa   = $_POST["glosa"] ;
  $publicar   = $_POST["publicar"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "taller") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

  $url = UrlHelper::urlFriendly($chef_id); 

  $params = array(
    "id"   => $id,
    "chef_id"   => $chef_id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "certificacion"   => $certificacion,
    "titulos"   => $titulos,
    "titulacion"   => $titulacion,
    "duracion"   => $duracion,
    "dia"   => $dia,
    "horario"   => $horario,
    "lugar"   => $lugar,
    "precio"   => $precio,
    "dirigido"   => $dirigido,
    "sesiones"   => $sesiones,
    "temas"   => $temas,
    "item"   => $item,
    "glosa"   => $glosa,
    "publicar"   => $publicar,
    "imagen"  => $imagen,
    "url"  => $url,
  );


  $response = $taller_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./taller.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
