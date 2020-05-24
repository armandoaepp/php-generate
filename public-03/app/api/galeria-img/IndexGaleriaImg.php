<?php 

/**
 * [Api Index Auth  Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

  header('content-type: application/json; charset=utf-8');
  require_once '../../autoload.php';

if(isset($_GET["accion"]))
{
    $evento = $_GET["accion"];
}
elseif (isset($_POST))
{
  $inputs = json_decode(file_get_contents("php://input"));
  $evento = $inputs->accion;
}

switch($evento)
{
  case "list":
    try
    {
      $galeria_img_controller = new GaleriaImgController() ; 

       $data = $galeria_img_controller->getAll() ;

      $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "set":
    
    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();
        
      $galeria_img_controller = new GaleriaImgController($cnx) ; 
      $connection->beginTransaction();
        
      $galeria_img_id = $inputs->galeria_img_id;
      $galeria_id = $inputs->galeria_id;
      $imagen = $inputs->imagen;
      $item = $inputs->item;
      $desc_img = $inputs->desc_img;
        
      $params = array(
                'galeria_img_id'=> $galeria_img_id,
                'galeria_id'=> $galeria_id,
                'imagen'=> $imagen,
                'item'=> $item,
                'desc_img'=> $desc_img,
              ) ; 
        
      $data = $galeria_img_controller->save($params) ;
        
      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "upd":
    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();
        
      $galeria_img_controller = new GaleriaImgController($cnx) ; 
      $connection->beginTransaction();
        
      $galeria_img_id = $inputs->galeria_img_id;
      $galeria_id = $inputs->galeria_id;
      $imagen = $inputs->imagen;
      $item = $inputs->item;
      $desc_img = $inputs->desc_img;
        
      $params = array(
                'galeria_img_id'=> $galeria_img_id,
                'galeria_id'=> $galeria_id,
                'imagen'=> $imagen,
                'item'=> $item,
                'desc_img'=> $desc_img,
              ) ; 
        
      $data = $galeria_img_controller->update($params) ;
        
      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $connection->rollback();
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "updestado":
    try
    {

      $galeria_img_id = $inputs->galeria_img_id;
      $estado = $inputs->estado;

      $params = array(
                'galeria_img_id'=> $galeria_img_id,
                'estado'=> $estado,
              ) ; 

      $galeria_img_controller = new GaleriaImgController() ; 

      $data = $galeria_img_controller->updateEstado( $params ) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "find":
    try
    {

      $id = $_GET["id"] ;
      $galeria_img_controller = new GaleriaImgController() ; 

      $data = $galeria_img_controller->find( $id) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "delete":
    try
    {

      $galeria_img_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'galeria_img_id'=> $galeria_img_id,
                'estado'=> $estado,
              ) ; 

      $galeria_img_controller = new GaleriaImgController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $galeria_img = $galeria_img_controller->find( $galeria_img_id );

        $data = $galeria_img_controller->deleteById( $galeria_img_id );
				if( !empty($galeria_img) && $data )
				{
					$imagen = $galeria_img["imagen"] ;
					UploadFiles::removeFile($imagen) ;
                }

			}
			else
			{
				$data = $galeria_img_controller->updateEstado($params);
			} 

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
            $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
        $jsn  = json_encode($data);
        print_r($jsn) ;
  break;

}
