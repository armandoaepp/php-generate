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
      $producto_detalle_controller = new ProductoDetalleController() ; 

       $data = $producto_detalle_controller->getAll() ;

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
        
      $producto_detalle_controller = new ProductoDetalleController($cnx) ; 
      $connection->beginTransaction();
        
      $producto_detalle_id = $inputs->producto_detalle_id;
      $producto_id = $inputs->producto_id;
      $pd_descripcion = $inputs->pd_descripcion;
      $pd_caracteristica = $inputs->pd_caracteristica;
        
      $params = array(
                'producto_detalle_id'=> $producto_detalle_id,
                'producto_id'=> $producto_id,
                'pd_descripcion'=> $pd_descripcion,
                'pd_caracteristica'=> $pd_caracteristica,
              ) ; 
        
      $data = $producto_detalle_controller->save($params) ;
        
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
        
      $producto_detalle_controller = new ProductoDetalleController($cnx) ; 
      $connection->beginTransaction();
        
      $producto_detalle_id = $inputs->producto_detalle_id;
      $producto_id = $inputs->producto_id;
      $pd_descripcion = $inputs->pd_descripcion;
      $pd_caracteristica = $inputs->pd_caracteristica;
        
      $params = array(
                'producto_detalle_id'=> $producto_detalle_id,
                'producto_id'=> $producto_id,
                'pd_descripcion'=> $pd_descripcion,
                'pd_caracteristica'=> $pd_caracteristica,
              ) ; 
        
      $data = $producto_detalle_controller->update($params) ;
        
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

      $producto_detalle_id = $inputs->producto_detalle_id;
      $estado = $inputs->pd_estado;

      $params = array(
                'producto_detalle_id'=> $producto_detalle_id,
                'estado'=> $estado,
              ) ; 

      $producto_detalle_controller = new ProductoDetalleController() ; 

      $data = $producto_detalle_controller->updateEstado( $params ) ;

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
      $producto_detalle_controller = new ProductoDetalleController() ; 

      $data = $producto_detalle_controller->find( $id) ;

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

      $producto_detalle_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'producto_detalle_id'=> $producto_detalle_id,
                'estado'=> $estado,
              ) ; 

      $producto_detalle_controller = new ProductoDetalleController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $producto_detalle = $producto_detalle_controller->find( $producto_detalle_id );

        $data = $producto_detalle_controller->deleteById( $producto_detalle_id );

			}
			else
			{
				$data = $producto_detalle_controller->updateEstado($params);
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
