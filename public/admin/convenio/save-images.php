
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  // if (!isset($_POST)) {
  //   header("Location: admin/noticia/noticia.php ", true, 301);
  // }

  require_once "../../app/autoload.php";

try{

  $accion   = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

  $convenio_id  = !empty($_POST['id']) ? $_POST['id']: 0 ;
  $ids_convenio_img  = !empty($_POST['ids_convenio_img']) ? $_POST['ids_convenio_img']: [] ;

  // var_dump($ids_convenio_img);

  $convenio_img_controller = new ConvenioImgController();

   ####### SORTABLEs #############################################
   $cant_item = count($ids_convenio_img) ;
   for ($i=0; $i < $cant_item ; $i++)
   {

     $param_item = array(
       'id'   => $ids_convenio_img[$i],
       'item' => ( $i + 1 ) ,
     );

     $convenio_img_controller->updateItem($param_item);
   }

  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : [] ;
  // var_dump($file_imagen);
  // return ;

  # --------------------------------------------------------

  $imagenes = [];
  // $imagen = UploadFiles::uploadFile($file_imagen, "noticia_img") ;
  $imagenes = UploadFiles::uploadMultiFiles($file_imagen, "convenios", $convenio_id ) ;

  if($convenio_id > 0)
  {
    if(count($imagenes) > 0 )
    {
      for ($i=0; $i < count($imagenes) ; $i++) {

        $params_det = array(
          "convenio_id" => $convenio_id,
          'item'        => ( $cant_item + $i + 1 ),
          "imagen"      => $imagenes[$i] ,
          "desc_img"    => '' ,
        );

        $response = $convenio_img_controller->save($params_det);
        // echo $i;

      }
    }


  }

  # --------------------------------------------------------

    header("Location: ./edit-images.php?id=$convenio_id", true, 301);

}catch(Exception $e){
  echo "Error: {$e}" ;
}