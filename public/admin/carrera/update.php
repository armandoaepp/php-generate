
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
  $detalleduracion   = $_POST["detalleduracion"] ;
  $detalledia   = $_POST["detalledia"] ;
  $detallehorario   = $_POST["detallehorario"] ;
  $detallelugar   = $_POST["detallelugar"] ;
  $detalleprecio   = $_POST["detalleprecio"] ;
  $detalleequipos   = $_POST["detalleequipos"] ;
  $detalleconsultas   = $_POST["detalleconsultas"] ;
  $detalledirigido   = $_POST["detalledirigido"] ;
  $aquien   = $_POST["aquien"] ;
  $temas   = $_POST["temas"] ;
  $nombreseo   = $_POST["nombreseo"] ;
  $orden   = $_POST["orden"] ;
  $fecha   = $_POST["fecha"] ;
  $img_bd   = !empty($_POST["img_bd"]) ? $_POST["img_bd"] : "" ;
  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $imagen  = "";
  $imagen = UploadFiles::uploadFile($file_imagen, "carrera") ;

  if (empty($imagen) ) { 
    $imagen = $img_bd ; 
  } 

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
    "detalleduracion"   => $detalleduracion,
    "detalledia"   => $detalledia,
    "detallehorario"   => $detallehorario,
    "detallelugar"   => $detallelugar,
    "detalleprecio"   => $detalleprecio,
    "detalleequipos"   => $detalleequipos,
    "detalleconsultas"   => $detalleconsultas,
    "detalledirigido"   => $detalledirigido,
    "aquien"   => $aquien,
    "temas"   => $temas,
    "nombreseo"   => $nombreseo,
    "orden"   => $orden,
    "fecha"   => $fecha,
    "imagen"  => $imagen,
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
