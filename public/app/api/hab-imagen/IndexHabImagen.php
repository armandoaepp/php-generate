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
      $hab_imagen_controller = new HabImagenController() ; 

       $data = $hab_imagen_controller->getAll() ;

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
        
      $hab_imagen_controller = new HabImagenController($cnx) ; 
      $connection->beginTransaction();
        
      $hab_imagen_id = $inputs->hab_imagen_id;
      $habitacion_id = $inputs->habitacion_id;
      $jerarquia = $inputs->jerarquia;
      $imagen = $inputs->imagen;
      $desc_img = $inputs->desc_img;
        
      $params = array(
                'hab_imagen_id'=> $hab_imagen_id,
                'habitacion_id'=> $habitacion_id,
                'jerarquia'=> $jerarquia,
                'imagen'=> $imagen,
                'desc_img'=> $desc_img,
              ) ; 
        
      $data = $hab_imagen_controller->save($params) ;
        
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
        
      $hab_imagen_controller = new HabImagenController($cnx) ; 
      $connection->beginTransaction();
        
      $hab_imagen_id = $inputs->hab_imagen_id;
      $habitacion_id = $inputs->habitacion_id;
      $jerarquia = $inputs->jerarquia;
      $imagen = $inputs->imagen;
      $desc_img = $inputs->desc_img;
        
      $params = array(
                'hab_imagen_id'=> $hab_imagen_id,
                'habitacion_id'=> $habitacion_id,
                'jerarquia'=> $jerarquia,
                'imagen'=> $imagen,
                'desc_img'=> $desc_img,
              ) ; 
        
      $data = $hab_imagen_controller->update($params) ;
        
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

      $hab_imagen_id = $inputs->hab_imagen_id;
      $estado = $inputs->estado;

      $params = array(
                'hab_imagen_id'=> $hab_imagen_id,
                'estado'=> $estado,
              ) ; 

      $hab_imagen_controller = new HabImagenController() ; 

      $data = $hab_imagen_controller->updateEstado( $params ) ;

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
      $hab_imagen_controller = new HabImagenController() ; 

      $data = $hab_imagen_controller->find( $id) ;

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

      $hab_imagen_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'hab_imagen_id'=> $hab_imagen_id,
                'estado'=> $estado,
              ) ; 

      $hab_imagen_controller = new HabImagenController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $hab_imagen = $hab_imagen_controller->find( $hab_imagen_id );

        $data = $hab_imagen_controller->deleteById( $hab_imagen_id );
				if( !empty($hab_imagen) && $data )
				{
					$imagen = $hab_imagen["imagen"] ;
					UploadFiles::removeFile($imagen) ;
                }

			}
			else
			{
				$data = $hab_imagen_controller->updateEstado($params);
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
