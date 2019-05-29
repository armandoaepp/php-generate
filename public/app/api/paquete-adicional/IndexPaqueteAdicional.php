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
      $paquete_adicional_controller = new PaqueteAdicionalController() ; 

       $data = $paquete_adicional_controller->getAll() ;

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
        
      $paquete_adicional_controller = new PaqueteAdicionalController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_adicional_id = $inputs->paquete_adicional_id;
      $paquete_id = $inputs->paquete_id;
      $adicional_id = $inputs->adicional_id;
      $created_at = $inputs->created_at;
        
      $params = array(
                'paquete_adicional_id'=> $paquete_adicional_id,
                'paquete_id'=> $paquete_id,
                'adicional_id'=> $adicional_id,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $paquete_adicional_controller->save($params) ;
        
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
        
      $paquete_adicional_controller = new PaqueteAdicionalController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_adicional_id = $inputs->paquete_adicional_id;
      $paquete_id = $inputs->paquete_id;
      $adicional_id = $inputs->adicional_id;
      $created_at = $inputs->created_at;
        
      $params = array(
                'paquete_adicional_id'=> $paquete_adicional_id,
                'paquete_id'=> $paquete_id,
                'adicional_id'=> $adicional_id,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $paquete_adicional_controller->update($params) ;
        
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

      $paquete_adicional_id = $inputs->paquete_adicional_id;
      $estado = $inputs->estado;

      $params = array(
                'paquete_adicional_id'=> $paquete_adicional_id,
                'estado'=> $estado,
              ) ; 

      $paquete_adicional_controller = new PaqueteAdicionalController() ; 

      $data = $paquete_adicional_controller->updateEstado( $params ) ;

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
      $paquete_adicional_controller = new PaqueteAdicionalController() ; 

      $data = $paquete_adicional_controller->find( $id) ;

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

      $paquete_adicional_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'paquete_adicional_id'=> $paquete_adicional_id,
                'estado'=> $estado,
              ) ; 

      $paquete_adicional_controller = new PaqueteAdicionalController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $paquete_adicional = $paquete_adicional_controller->find( $paquete_adicional_id );

        $data = $paquete_adicional_controller->deleteById( $paquete_adicional_id );

			}
			else
			{
				$data = $paquete_adicional_controller->updateEstado($params);
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
