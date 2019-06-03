
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  if (!isset($_POST)) {
    header("Location: admin/convenio/convenio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $convenio_controller = new ConvenioController();

  $tipo_convenio_id = $_POST["tipo_convenio_id"] ;
  $nombre           = $_POST["nombre"] ;
  $caracteristica   = !empty($_POST["caracteristica"]) ? $_POST["caracteristica"] : "" ;
  $precio           = !empty($_POST["precio"]) ? $_POST["precio"] : 0 ;
  $glosa            = !empty($_POST["glosa"]) ? $_POST["glosa"] : "" ;
  $publicar         = !empty($_POST["publicar"]) ? $_POST["publicar"] : "N" ;

  $file_imagenes     = !empty($_FILES["imagenes"]) ? $_FILES["imagenes"]: [] ;

  $params = array(
    "tipo_convenio_id" => $tipo_convenio_id,
    "nombre"           => $nombre,
    "caracteristica"   => $caracteristica,
    "precio"           => $precio,
    "glosa"            => $glosa,
    "publicar"         => $publicar,
  );


  $convenio_id = $convenio_controller->save($params);

  # ===================================================================
    // $imagenes = [];
    $imagenes = UploadFiles::uploadMultiFiles($file_imagenes, "convenios", $convenio_id ) ;

    if($convenio_id > 0)
    {
      $convenio_img_controller = new ConvenioImgController();

      for ($i=0; $i < count($imagenes) ; $i++)
      {

        $params_det = array(
          "convenio_id" => $convenio_id,
          "item"       => ($i + 1),
          "imagen"     => $imagenes[$i] ,
          "desc_img"   => '' ,
        );

        $response = $convenio_img_controller->save($params_det);

      }
    }

    # ===================================================================
// return ;
  if($response){
    header("Location: ./convenio.php ", true, 301);
  }
  else {
  echo "A Sucedido un Error al Rehgistrar". $response ;
  }
