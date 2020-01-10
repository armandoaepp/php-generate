
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  // if (!isset($_POST)) {
  //   header("Location: admin/noticia/noticia.php ", true, 301);
  // }

  require_once "../../app/autoload.php";

try{

  $accion   = !empty($_POST['accion']) ? $_POST['accion'] : '' ;

  $habitacion_id  = !empty($_POST['id']) ? $_POST['id']: 0 ;
  $ids_images_db  = !empty($_POST['ids_images_db']) ? $_POST['ids_images_db']: [] ;

  // var_dump($ids_images_db);

  $paquete_img_controller = new PaqueteImgController();

   ####### SORTABLEs #############################################
   $cant_item = count($ids_images_db) ;
   for ($i=0; $i < $cant_item ; $i++)
   {

     $param_item = array(
       'id'   => $ids_images_db[$i],
       'jerarquia' => ( $i + 1 ) ,
     );

     $    ->updateItem($param_item);
   }

  $file_imagen   = !empty($_FILES["imagen"]) ? $_FILES["imagen"] : [] ;
  // var_dump($file_imagen);
  // return ;

  # --------------------------------------------------------

  $imagenes = [];
  // $imagen = UploadFiles::uploadFile($file_imagen, "noticia_img") ;
  $imagenes = UploadFiles::uploadMultiFiles($file_imagen, "paquetes", $habitacion_id ) ;

  if($habitacion_id > 0)
  {
    if(count($imagenes) > 0 )
    {
      for ($i=0; $i < count($imagenes) ; $i++) {

        $params_det = array(
          "habitacion_id" => $habitacion_id,
          'item' => ( $cant_item + $i + 1 ),
          "imagen"     => $imagenes[$i] ,
          "desc_img"   => '' ,
        );

        $response = $paquete_img_controller->save($params_det);
        // echo $i;

      }
    }


  }

  # --------------------------------------------------------

    header("Location: ./edit-images.php?id=$habitacion_id", true, 301);

}catch(Exception $e){
  echo "Error: {$e}" ;
}