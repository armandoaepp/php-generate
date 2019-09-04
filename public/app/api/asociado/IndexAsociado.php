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
      $asociado_controller = new AsociadoController() ; 

       $data = $asociado_controller->getAll() ;

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
        
      $asociado_controller = new AsociadoController($cnx) ; 
      $connection->beginTransaction();
        
      $asociado_id = $inputs->asociado_id;
      $empresa_id = $inputs->empresa_id;
      $nombre = $inputs->nombre;
      $apellidos = $inputs->apellidos;
      $email = $inputs->email;
      $password = $inputs->password;
      $telefono = $inputs->telefono;
      $created_at = $inputs->created_at;
        
      $params = array(
                'asociado_id'=> $asociado_id,
                'empresa_id'=> $empresa_id,
                'nombre'=> $nombre,
                'apellidos'=> $apellidos,
                'email'=> $email,
                'password'=> $password,
                'telefono'=> $telefono,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $asociado_controller->save($params) ;
        
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
        
      $asociado_controller = new AsociadoController($cnx) ; 
      $connection->beginTransaction();
        
      $asociado_id = $inputs->asociado_id;
      $empresa_id = $inputs->empresa_id;
      $nombre = $inputs->nombre;
      $apellidos = $inputs->apellidos;
      $email = $inputs->email;
      $password = $inputs->password;
      $telefono = $inputs->telefono;
      $created_at = $inputs->created_at;
        
      $params = array(
                'asociado_id'=> $asociado_id,
                'empresa_id'=> $empresa_id,
                'nombre'=> $nombre,
                'apellidos'=> $apellidos,
                'email'=> $email,
                'password'=> $password,
                'telefono'=> $telefono,
                'created_at'=> $created_at,
              ) ; 
        
      $data = $asociado_controller->update($params) ;
        
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

      $asociado_id = $inputs->asociado_id;
      $estado = $inputs->estado;

      $params = array(
                'asociado_id'=> $asociado_id,
                'estado'=> $estado,
              ) ; 

      $asociado_controller = new AsociadoController() ; 

      $data = $asociado_controller->updateEstado( $params ) ;

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
      $asociado_controller = new AsociadoController() ; 

      $data = $asociado_controller->find( $id) ;

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

      $asociado_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'asociado_id'=> $asociado_id,
                'estado'=> $estado,
              ) ; 

      $asociado_controller = new AsociadoController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $asociado = $asociado_controller->find( $asociado_id );

        $data = $asociado_controller->deleteById( $asociado_id );

			}
			else
			{
				$data = $asociado_controller->updateEstado($params);
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