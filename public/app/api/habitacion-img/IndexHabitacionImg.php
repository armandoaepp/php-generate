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
      $habitacion_img_controller = new HabitacionImgController() ; 

       $data = $habitacion_img_controller->getAll() ;

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
        
      $habitacion_img_controller = new HabitacionImgController($cnx) ; 
      $connection->beginTransaction();
        
      $habitacion_img_id = $inputs->habitacion_img_id;
      $habitacion_id = $inputs->habitacion_id;
      $jerarquia = $inputs->jerarquia;
      $imagen = $inputs->imagen;
      $desc_imagen = $inputs->desc_imagen;
        
      $params = array(
                'habitacion_img_id'=> $habitacion_img_id,
                'habitacion_id'=> $habitacion_id,
                'jerarquia'=> $jerarquia,
                'imagen'=> $imagen,
                'desc_imagen'=> $desc_imagen,
              ) ; 
        
      $data = $habitacion_img_controller->save($params) ;
        
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
        
      $habitacion_img_controller = new HabitacionImgController($cnx) ; 
      $connection->beginTransaction();
        
      $habitacion_img_id = $inputs->habitacion_img_id;
      $habitacion_id = $inputs->habitacion_id;
      $jerarquia = $inputs->jerarquia;
      $imagen = $inputs->imagen;
      $desc_imagen = $inputs->desc_imagen;
        
      $params = array(
                'habitacion_img_id'=> $habitacion_img_id,
                'habitacion_id'=> $habitacion_id,
                'jerarquia'=> $jerarquia,
                'imagen'=> $imagen,
                'desc_imagen'=> $desc_imagen,
              ) ; 
        
      $data = $habitacion_img_controller->update($params) ;
        
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

      $habitacion_img_id = $inputs->habitacion_img_id;
      $estado = $inputs->estado;

      $params = array(
                'habitacion_img_id'=> $habitacion_img_id,
                'estado'=> $estado,
              ) ; 

      $habitacion_img_controller = new HabitacionImgController() ; 

      $data = $habitacion_img_controller->updateEstado( $params ) ;

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
      $habitacion_img_controller = new HabitacionImgController() ; 

      $data = $habitacion_img_controller->find( $id) ;

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

      $habitacion_img_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'habitacion_img_id'=> $habitacion_img_id,
                'estado'=> $estado,
              ) ; 

      $habitacion_img_controller = new HabitacionImgController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $habitacion_img = $habitacion_img_controller->find( $habitacion_img_id );

        $data = $habitacion_img_controller->deleteById( $habitacion_img_id );
				if( !empty($habitacion_img) && $data )
				{
					$imagen = $habitacion_img["imagen"] ;
					UploadFiles::removeFile($imagen) ;
                }

			}
			else
			{
				$data = $habitacion_img_controller->updateEstado($params);
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
