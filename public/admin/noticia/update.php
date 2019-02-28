
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticia/noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticia_controller = new NoticiaController();

  $id = !empty($_POST["id"]) ? $_POST["id"]: 0 ;

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $url_seo   = $_POST["url_seo"] ;
  $glosa   = $_POST["glosa"] ;
  $publicar   = $_POST["publicar"] ;
  $params = array(
    "id"   => $id,
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "url_seo"   => $url_seo,
    "glosa"   => $glosa,
    "publicar"   => $publicar,
  );


  $response = $noticia_controller->update($params);

  if($response)
  {

    if( !empty($imagen) && $imagen != $img_bd )
    {
      $status = UploadFiles::removeFile($img_bd) ;
    }

    header("Location: ./noticia.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
