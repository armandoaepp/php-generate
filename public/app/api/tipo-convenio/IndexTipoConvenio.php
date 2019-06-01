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
      $tipo_convenio_controller = new TipoConvenioController() ; 

       $data = $tipo_convenio_controller->getAll() ;

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
        
      $tipo_convenio_controller = new TipoConvenioController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_convenio_id = $inputs->tipo_convenio_id;
      $desc_convenio = $inputs->desc_convenio;
        
      $params = array(
                'tipo_convenio_id'=> $tipo_convenio_id,
                'desc_convenio'=> $desc_convenio,
              ) ; 
        
      $data = $tipo_convenio_controller->save($params) ;
        
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
        
      $tipo_convenio_controller = new TipoConvenioController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_convenio_id = $inputs->tipo_convenio_id;
      $desc_convenio = $inputs->desc_convenio;
        
      $params = array(
                'tipo_convenio_id'=> $tipo_convenio_id,
                'desc_convenio'=> $desc_convenio,
              ) ; 
        
      $data = $tipo_convenio_controller->update($params) ;
        
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

      $tipo_convenio_id = $inputs->tipo_convenio_id;
      $estado = $inputs->estado;

      $params = array(
                'tipo_convenio_id'=> $tipo_convenio_id,
                'estado'=> $estado,
              ) ; 

      $tipo_convenio_controller = new TipoConvenioController() ; 

      $data = $tipo_convenio_controller->updateEstado( $params ) ;

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
      $tipo_convenio_controller = new TipoConvenioController() ; 

      $data = $tipo_convenio_controller->find( $id) ;

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

      $tipo_convenio_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'tipo_convenio_id'=> $tipo_convenio_id,
                'estado'=> $estado,
              ) ; 

      $tipo_convenio_controller = new TipoConvenioController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $tipo_convenio = $tipo_convenio_controller->find( $tipo_convenio_id );

        $data = $tipo_convenio_controller->deleteById( $tipo_convenio_id );

			}
			else
			{
				$data = $tipo_convenio_controller->updateEstado($params);
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
