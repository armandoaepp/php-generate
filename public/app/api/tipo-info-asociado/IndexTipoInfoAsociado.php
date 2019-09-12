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
      $tipo_info_asociado_controller = new TipoInfoAsociadoController() ; 

       $data = $tipo_info_asociado_controller->getAll() ;

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
        
      $tipo_info_asociado_controller = new TipoInfoAsociadoController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_info_asociado_id = $inputs->tipo_info_asociado_id;
      $descripcion = $inputs->descripcion;
      $publicar = $inputs->publicar;
        
      $params = array(
                'tipo_info_asociado_id'=> $tipo_info_asociado_id,
                'descripcion'=> $descripcion,
                'publicar'=> $publicar,
              ) ; 
        
      $data = $tipo_info_asociado_controller->save($params) ;
        
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
        
      $tipo_info_asociado_controller = new TipoInfoAsociadoController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_info_asociado_id = $inputs->tipo_info_asociado_id;
      $descripcion = $inputs->descripcion;
      $publicar = $inputs->publicar;
        
      $params = array(
                'tipo_info_asociado_id'=> $tipo_info_asociado_id,
                'descripcion'=> $descripcion,
                'publicar'=> $publicar,
              ) ; 
        
      $data = $tipo_info_asociado_controller->update($params) ;
        
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

      $tipo_info_asociado_id = $inputs->tipo_info_asociado_id;
      $estado = $inputs->estado;

      $params = array(
                'tipo_info_asociado_id'=> $tipo_info_asociado_id,
                'estado'=> $estado,
              ) ; 

      $tipo_info_asociado_controller = new TipoInfoAsociadoController() ; 

      $data = $tipo_info_asociado_controller->updateEstado( $params ) ;

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
      $tipo_info_asociado_controller = new TipoInfoAsociadoController() ; 

      $data = $tipo_info_asociado_controller->find( $id) ;

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

      $tipo_info_asociado_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'tipo_info_asociado_id'=> $tipo_info_asociado_id,
                'estado'=> $estado,
              ) ; 

      $tipo_info_asociado_controller = new TipoInfoAsociadoController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $tipo_info_asociado = $tipo_info_asociado_controller->find( $tipo_info_asociado_id );

        $data = $tipo_info_asociado_controller->deleteById( $tipo_info_asociado_id );

			}
			else
			{
				$data = $tipo_info_asociado_controller->updateEstado($params);
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

  case "publish":
    try
    {

      $tipo_info_asociado_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'tipo_info_asociado_id'=> $tipo_info_asociado_id,
                'publicar'=> $publicar,
              ) ; 

      $tipo_info_asociado_controller = new TipoInfoAsociadoController() ; 

      $data = $tipo_info_asociado_controller->updatePublish( $params ) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "published":
    try
    {

      $publicar = $inputs->publicar;

      $params = array(
                'publicar'=> $publicar,
              ) ; 

      $tipo_info_asociado_controller = new TipoInfoAsociadoController() ; 

      $data = $tipo_info_asociado_controller->getPublished( $params ) ;

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
