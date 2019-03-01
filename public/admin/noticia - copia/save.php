
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/noticia/noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticia_controller = new NoticiaController();

  $titulo   = $_POST["titulo"] ;
  $descripcion   = $_POST["descripcion"] ;
  $url   = $_POST["url"] ;
  $glosa   = $_POST["glosa"] ;
  $publicar   = $_POST["publicar"] ;

  $params = array(
    "titulo"   => $titulo,
    "descripcion"   => $descripcion,
    "url"   => $url,
    "glosa"   => $glosa,
    "publicar"   => $publicar,
  );

  $response = $noticia_controller->save($params);

  if($response){
    header("Location: ./noticia.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
