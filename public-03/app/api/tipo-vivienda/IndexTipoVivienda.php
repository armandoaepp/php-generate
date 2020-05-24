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
      $tipo_vivienda_controller = new TipoViviendaController() ; 

       $data = $tipo_vivienda_controller->getAll() ;

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
        
      $tipo_vivienda_controller = new TipoViviendaController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_vivienda_id = $inputs->tipo_vivienda_id;
      $desc_vivienda = $inputs->desc_vivienda;
        
      $params = array(
                'tipo_vivienda_id'=> $tipo_vivienda_id,
                'desc_vivienda'=> $desc_vivienda,
              ) ; 
        
      $data = $tipo_vivienda_controller->save($params) ;
        
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
        
      $tipo_vivienda_controller = new TipoViviendaController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_vivienda_id = $inputs->tipo_vivienda_id;
      $desc_vivienda = $inputs->desc_vivienda;
        
      $params = array(
                'tipo_vivienda_id'=> $tipo_vivienda_id,
                'desc_vivienda'=> $desc_vivienda,
              ) ; 
        
      $data = $tipo_vivienda_controller->update($params) ;
        
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

      $tipo_vivienda_id = $inputs->tipo_vivienda_id;
      $estado = $inputs->estado;

      $params = array(
                'tipo_vivienda_id'=> $tipo_vivienda_id,
                'estado'=> $estado,
              ) ; 

      $tipo_vivienda_controller = new TipoViviendaController() ; 

      $data = $tipo_vivienda_controller->updateEstado( $params ) ;

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
      $tipo_vivienda_controller = new TipoViviendaController() ; 

      $data = $tipo_vivienda_controller->find( $id) ;

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

      $tipo_vivienda_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'tipo_vivienda_id'=> $tipo_vivienda_id,
                'estado'=> $estado,
              ) ; 

      $tipo_vivienda_controller = new TipoViviendaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $tipo_vivienda = $tipo_vivienda_controller->find( $tipo_vivienda_id );

        $data = $tipo_vivienda_controller->deleteById( $tipo_vivienda_id );

			}
			else
			{
				$data = $tipo_vivienda_controller->updateEstado($params);
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