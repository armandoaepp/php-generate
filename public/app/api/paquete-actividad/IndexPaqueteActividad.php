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
      $paquete_actividad_controller = new PaqueteActividadController() ; 

       $data = $paquete_actividad_controller->getAll() ;

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
        
      $paquete_actividad_controller = new PaqueteActividadController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_actividad_id = $inputs->paquete_actividad_id;
      $paquete_id = $inputs->paquete_id;
      $actividad_id = $inputs->actividad_id;
      $horas = $inputs->horas;
      $descripcion = $inputs->descripcion;
      $created_at = $inputs->created_at;
        
      $params = array(
                'paquete_actividad_id'=> $paquete_actividad_id,
                'paquete_id'=> $paquete_id,
                'actividad_id'=> $actividad_id,
                'horas'=> $horas,
                'descripcion'=> $descripcion,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $paquete_actividad_controller->save($params) ;
        
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
        
      $paquete_actividad_controller = new PaqueteActividadController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_actividad_id = $inputs->paquete_actividad_id;
      $paquete_id = $inputs->paquete_id;
      $actividad_id = $inputs->actividad_id;
      $horas = $inputs->horas;
      $descripcion = $inputs->descripcion;
      $created_at = $inputs->created_at;
        
      $params = array(
                'paquete_actividad_id'=> $paquete_actividad_id,
                'paquete_id'=> $paquete_id,
                'actividad_id'=> $actividad_id,
                'horas'=> $horas,
                'descripcion'=> $descripcion,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $paquete_actividad_controller->update($params) ;
        
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

      $paquete_actividad_id = $inputs->paquete_actividad_id;
      $estado = $inputs->estado;

      $params = array(
                'paquete_actividad_id'=> $paquete_actividad_id,
                'estado'=> $estado,
              ) ; 

      $paquete_actividad_controller = new PaqueteActividadController() ; 

      $data = $paquete_actividad_controller->updateEstado( $params ) ;

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
      $paquete_actividad_controller = new PaqueteActividadController() ; 

      $data = $paquete_actividad_controller->find( $id) ;

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

      $paquete_actividad_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'paquete_actividad_id'=> $paquete_actividad_id,
                'estado'=> $estado,
              ) ; 

      $paquete_actividad_controller = new PaqueteActividadController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $paquete_actividad = $paquete_actividad_controller->find( $paquete_actividad_id );

        $data = $paquete_actividad_controller->deleteById( $paquete_actividad_id );

			}
			else
			{
				$data = $paquete_actividad_controller->updateEstado($params);
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
