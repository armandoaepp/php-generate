
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticia/noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticia_controller = new NoticiaController();

  $titulo      = $_POST["titulo"] ;
  $descripcion = $_POST["descripcion"] ;
  // $imagen      = $_POST["imagen"] ;
  $glosa       = $_POST["glosa"] ;
  $publicar    = $_POST["publicar"] ;

  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : "" ;

  $url = UrlHelper::urlFriendly($titulo);

  $params = array(
    "titulo"      => $titulo,
    "descripcion" => $descripcion,
    "url"         => $url,
    "glosa"       => $glosa,
    "publicar"    => $publicar,
  );

  $noticia_id = $noticia_controller->save($params);

  # --------------------------------------------------------



  $imagen  = "";
  // $imagen = UploadFiles::uploadFile($file_imagen, "noticia_img") ;
  $imagenes = UploadFiles::uploadMultiFiles($file_imagen, "noticia", $noticia_id ) ;

  if($noticia_id > 0)
  {
    $noticia_img_controller = new NoticiaImgController();

    for ($i=0; $i < count($imagenes) ; $i++) {

      $params_det = array(
        "noticia_id" => $noticia_id,
        "item"       => ($i + 1),
        "imagen"     => $imagenes[$i] ,
      );

      $response = $noticia_img_controller->save($params_det);

    }
  }





  # --------------------------------------------------------

  if($response){
    header("Location: ./noticia.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
