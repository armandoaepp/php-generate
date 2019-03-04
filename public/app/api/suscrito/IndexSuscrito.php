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
      $suscrito_controller = new SuscritoController() ; 

       $data = $suscrito_controller->getAll() ;

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
        
      $suscrito_controller = new SuscritoController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $nombre = $inputs->nombre;
      $asunto = $inputs->asunto;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $empresa = $inputs->empresa;
      $mensaje = $inputs->mensaje;
      $created_up = $inputs->created_up;
        
      $params = array(
                'id'=> $id,
                'nombre'=> $nombre,
                'asunto'=> $asunto,
                'email'=> $email,
                'telefono'=> $telefono,
                'empresa'=> $empresa,
                'mensaje'=> $mensaje,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $suscrito_controller->save($params) ;
        
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
        
      $suscrito_controller = new SuscritoController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $nombre = $inputs->nombre;
      $asunto = $inputs->asunto;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $empresa = $inputs->empresa;
      $mensaje = $inputs->mensaje;
      $created_up = $inputs->created_up;
        
      $params = array(
                'id'=> $id,
                'nombre'=> $nombre,
                'asunto'=> $asunto,
                'email'=> $email,
                'telefono'=> $telefono,
                'empresa'=> $empresa,
                'mensaje'=> $mensaje,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $suscrito_controller->update($params) ;
        
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

      $suscrito_controller = new SuscritoController() ; 

      $data = $suscrito_controller->updateEstado( $params ) ;

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
      $suscrito_controller = new SuscritoController() ; 

      $data = $suscrito_controller->find( $id) ;

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

      $suscrito_controller = new SuscritoController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$suscrito = $suscrito_controller->find( $id );

				$data = $suscrito_controller->deleteById( $id );

				if( !empty($suscrito) && $data )
				{
					$imagen = $suscrito["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $suscrito_controller->updateEstado($params);
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
