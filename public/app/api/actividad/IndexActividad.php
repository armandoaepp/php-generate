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
      $actividad_controller = new ActividadController() ; 

       $data = $actividad_controller->getAll() ;

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
        
      $actividad_controller = new ActividadController($cnx) ; 
      $connection->beginTransaction();
        
      $actividad_id = $inputs->actividad_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $horas = $inputs->horas;
        
      $params = array(
                'actividad_id'=> $actividad_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'horas'=> $horas,
              ) ; 
        
      $data = $actividad_controller->save($params) ;
        
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
        
      $actividad_controller = new ActividadController($cnx) ; 
      $connection->beginTransaction();
        
      $actividad_id = $inputs->actividad_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $horas = $inputs->horas;
        
      $params = array(
                'actividad_id'=> $actividad_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'horas'=> $horas,
              ) ; 
        
      $data = $actividad_controller->update($params) ;
        
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

      $actividad_id = $inputs->actividad_id;
      $estado = $inputs->estado;

      $params = array(
                'actividad_id'=> $actividad_id,
                'estado'=> $estado,
              ) ; 

      $actividad_controller = new ActividadController() ; 

      $data = $actividad_controller->updateEstado( $params ) ;

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
      $actividad_controller = new ActividadController() ; 

      $data = $actividad_controller->find( $id) ;

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

      $actividad_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'actividad_id'=> $actividad_id,
                'estado'=> $estado,
              ) ; 

      $actividad_controller = new ActividadController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $actividad = $actividad_controller->find( $actividad_id );

        $data = $actividad_controller->deleteById( $actividad_id );

			}
			else
			{
				$data = $actividad_controller->updateEstado($params);
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
