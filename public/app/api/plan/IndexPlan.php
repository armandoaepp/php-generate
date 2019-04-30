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
      $plan_controller = new PlanController() ; 

       $data = $plan_controller->getAll() ;

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
        
      $plan_controller = new PlanController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $nombre = $inputs->nombre;
      $espacio = $inputs->espacio;
      $num_databases = $inputs->num_databases;
      $num_mails = $inputs->num_mails;
      $created_at = $inputs->created_at;
      $updated_at = $inputs->updated_at;
        
      $params = array(
                'id'=> $id,
                'nombre'=> $nombre,
                'espacio'=> $espacio,
                'num_databases'=> $num_databases,
                'num_mails'=> $num_mails,
                'created_at'=> $created_at,
                'updated_at'=> $updated_at,
              ) ; 
        
      $data = $plan_controller->save($params) ;
        
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
        
      $plan_controller = new PlanController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $nombre = $inputs->nombre;
      $espacio = $inputs->espacio;
      $num_databases = $inputs->num_databases;
      $num_mails = $inputs->num_mails;
      $created_at = $inputs->created_at;
      $updated_at = $inputs->updated_at;
        
      $params = array(
                'id'=> $id,
                'nombre'=> $nombre,
                'espacio'=> $espacio,
                'num_databases'=> $num_databases,
                'num_mails'=> $num_mails,
                'created_at'=> $created_at,
                'updated_at'=> $updated_at,
              ) ; 
        
      $data = $plan_controller->update($params) ;
        
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

      $id = $inputs->id;
      $estado = $inputs->estado;

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $plan_controller = new PlanController() ; 

      $data = $plan_controller->updateEstado( $params ) ;

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
      $plan_controller = new PlanController() ; 

      $data = $plan_controller->find( $id) ;

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

      $id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'id'=> $id,
                'estado'=> $estado,
              ) ; 

      $plan_controller = new PlanController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $plan = $plan_controller->find( $id );

        $data = $plan_controller->deleteById( $id );

			}
			else
			{
				$data = $plan_controller->updateEstado($params);
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
