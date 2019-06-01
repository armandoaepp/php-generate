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
      $paquete_convenio_controller = new PaqueteConvenioController() ; 

       $data = $paquete_convenio_controller->getAll() ;

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
        
      $paquete_convenio_controller = new PaqueteConvenioController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_convenio_id = $inputs->paquete_convenio_id;
      $paquete_paquete_id = $inputs->paquete_paquete_id;
      $convenio_convenio_id = $inputs->convenio_convenio_id;
        
      $params = array(
                'paquete_convenio_id'=> $paquete_convenio_id,
                'paquete_paquete_id'=> $paquete_paquete_id,
                'convenio_convenio_id'=> $convenio_convenio_id,
              ) ; 
        
      $data = $paquete_convenio_controller->save($params) ;
        
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
        
      $paquete_convenio_controller = new PaqueteConvenioController($cnx) ; 
      $connection->beginTransaction();
        
      $paquete_convenio_id = $inputs->paquete_convenio_id;
      $paquete_paquete_id = $inputs->paquete_paquete_id;
      $convenio_convenio_id = $inputs->convenio_convenio_id;
        
      $params = array(
                'paquete_convenio_id'=> $paquete_convenio_id,
                'paquete_paquete_id'=> $paquete_paquete_id,
                'convenio_convenio_id'=> $convenio_convenio_id,
              ) ; 
        
      $data = $paquete_convenio_controller->update($params) ;
        
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

      $paquete_convenio_id = $inputs->paquete_convenio_id;
      $estado = $inputs->estado;

      $params = array(
                'paquete_convenio_id'=> $paquete_convenio_id,
                'estado'=> $estado,
              ) ; 

      $paquete_convenio_controller = new PaqueteConvenioController() ; 

      $data = $paquete_convenio_controller->updateEstado( $params ) ;

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
      $paquete_convenio_controller = new PaqueteConvenioController() ; 

      $data = $paquete_convenio_controller->find( $id) ;

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

      $paquete_convenio_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'paquete_convenio_id'=> $paquete_convenio_id,
                'estado'=> $estado,
              ) ; 

      $paquete_convenio_controller = new PaqueteConvenioController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $paquete_convenio = $paquete_convenio_controller->find( $paquete_convenio_id );

        $data = $paquete_convenio_controller->deleteById( $paquete_convenio_id );

			}
			else
			{
				$data = $paquete_convenio_controller->updateEstado($params);
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
