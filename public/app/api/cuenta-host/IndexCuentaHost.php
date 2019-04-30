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
      $cuenta_host_controller = new CuentaHostController() ; 

       $data = $cuenta_host_controller->getAll() ;

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
        
      $cuenta_host_controller = new CuentaHostController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $propietario_id = $inputs->propietario_id;
      $plan_id = $inputs->plan_id;
      $dominio = $inputs->dominio;
      $descripcion = $inputs->descripcion;
      $solo_host = $inputs->solo_host;
      $tiempo_alq = $inputs->tiempo_alq;
      $facturado = $inputs->facturado;
      $created_at = $inputs->created_at;
      $updated_at = $inputs->updated_at;
        
      $params = array(
                'id'=> $id,
                'propietario_id'=> $propietario_id,
                'plan_id'=> $plan_id,
                'dominio'=> $dominio,
                'descripcion'=> $descripcion,
                'solo_host'=> $solo_host,
                'tiempo_alq'=> $tiempo_alq,
                'facturado'=> $facturado,
                'created_at'=> $created_at,
                'updated_at'=> $updated_at,
              ) ; 
        
      $data = $cuenta_host_controller->save($params) ;
        
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
        
      $cuenta_host_controller = new CuentaHostController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $propietario_id = $inputs->propietario_id;
      $plan_id = $inputs->plan_id;
      $dominio = $inputs->dominio;
      $descripcion = $inputs->descripcion;
      $solo_host = $inputs->solo_host;
      $tiempo_alq = $inputs->tiempo_alq;
      $facturado = $inputs->facturado;
      $created_at = $inputs->created_at;
      $updated_at = $inputs->updated_at;
        
      $params = array(
                'id'=> $id,
                'propietario_id'=> $propietario_id,
                'plan_id'=> $plan_id,
                'dominio'=> $dominio,
                'descripcion'=> $descripcion,
                'solo_host'=> $solo_host,
                'tiempo_alq'=> $tiempo_alq,
                'facturado'=> $facturado,
                'created_at'=> $created_at,
                'updated_at'=> $updated_at,
              ) ; 
        
      $data = $cuenta_host_controller->update($params) ;
        
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

      $cuenta_host_controller = new CuentaHostController() ; 

      $data = $cuenta_host_controller->updateEstado( $params ) ;

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
      $cuenta_host_controller = new CuentaHostController() ; 

      $data = $cuenta_host_controller->find( $id) ;

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

      $cuenta_host_controller = new CuentaHostController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $cuenta_host = $cuenta_host_controller->find( $id );

        $data = $cuenta_host_controller->deleteById( $id );

			}
			else
			{
				$data = $cuenta_host_controller->updateEstado($params);
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
