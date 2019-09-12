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
      $suscriptor_controller = new SuscriptorController() ; 

       $data = $suscriptor_controller->getAll() ;

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
        
      $suscriptor_controller = new SuscriptorController($cnx) ; 
      $connection->beginTransaction();
        
      $suscriptor_id = $inputs->suscriptor_id;
      $nombre = $inputs->nombre;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $empresa = $inputs->empresa;
      $mensaje = $inputs->mensaje;
      $created_at = $inputs->created_at;
        
      $params = array(
                'suscriptor_id'=> $suscriptor_id,
                'nombre'=> $nombre,
                'email'=> $email,
                'telefono'=> $telefono,
                'empresa'=> $empresa,
                'mensaje'=> $mensaje,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $suscriptor_controller->save($params) ;
        
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
        
      $suscriptor_controller = new SuscriptorController($cnx) ; 
      $connection->beginTransaction();
        
      $suscriptor_id = $inputs->suscriptor_id;
      $nombre = $inputs->nombre;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $empresa = $inputs->empresa;
      $mensaje = $inputs->mensaje;
      $created_at = $inputs->created_at;
        
      $params = array(
                'suscriptor_id'=> $suscriptor_id,
                'nombre'=> $nombre,
                'email'=> $email,
                'telefono'=> $telefono,
                'empresa'=> $empresa,
                'mensaje'=> $mensaje,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $suscriptor_controller->update($params) ;
        
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

      $suscriptor_id = $inputs->suscriptor_id;
      $estado = $inputs->estado;

      $params = array(
                'suscriptor_id'=> $suscriptor_id,
                'estado'=> $estado,
              ) ; 

      $suscriptor_controller = new SuscriptorController() ; 

      $data = $suscriptor_controller->updateEstado( $params ) ;

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
      $suscriptor_controller = new SuscriptorController() ; 

      $data = $suscriptor_controller->find( $id) ;

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

      $suscriptor_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'suscriptor_id'=> $suscriptor_id,
                'estado'=> $estado,
              ) ; 

      $suscriptor_controller = new SuscriptorController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $suscriptor = $suscriptor_controller->find( $suscriptor_id );

        $data = $suscriptor_controller->deleteById( $suscriptor_id );

			}
			else
			{
				$data = $suscriptor_controller->updateEstado($params);
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
