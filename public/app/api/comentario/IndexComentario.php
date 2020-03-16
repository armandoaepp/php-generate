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
      $comentario_controller = new ComentarioController() ; 

       $data = $comentario_controller->getAll() ;

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
        
      $comentario_controller = new ComentarioController($cnx) ; 
      $connection->beginTransaction();
        
      $comentario_id = $inputs->comentario_id;
      $email = $inputs->email;
      $mensaje = $inputs->mensaje;
      $calificacion = $inputs->calificacion;
      $created_at = $inputs->created_at;
        
      $params = array(
                'comentario_id'=> $comentario_id,
                'email'=> $email,
                'mensaje'=> $mensaje,
                'calificacion'=> $calificacion,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $comentario_controller->save($params) ;
        
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
        
      $comentario_controller = new ComentarioController($cnx) ; 
      $connection->beginTransaction();
        
      $comentario_id = $inputs->comentario_id;
      $email = $inputs->email;
      $mensaje = $inputs->mensaje;
      $calificacion = $inputs->calificacion;
      $created_at = $inputs->created_at;
        
      $params = array(
                'comentario_id'=> $comentario_id,
                'email'=> $email,
                'mensaje'=> $mensaje,
                'calificacion'=> $calificacion,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $comentario_controller->update($params) ;
        
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

      $comentario_id = $inputs->comentario_id;
      $estado = $inputs->estado;

      $params = array(
                'comentario_id'=> $comentario_id,
                'estado'=> $estado,
              ) ; 

      $comentario_controller = new ComentarioController() ; 

      $data = $comentario_controller->updateEstado( $params ) ;

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
      $comentario_controller = new ComentarioController() ; 

      $data = $comentario_controller->find( $id) ;

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

      $comentario_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'comentario_id'=> $comentario_id,
                'estado'=> $estado,
              ) ; 

      $comentario_controller = new ComentarioController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $comentario = $comentario_controller->find( $comentario_id );

        $data = $comentario_controller->deleteById( $comentario_id );

			}
			else
			{
				$data = $comentario_controller->updateEstado($params);
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
