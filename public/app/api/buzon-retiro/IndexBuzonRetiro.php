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
      $buzon_retiro_controller = new BuzonRetiroController() ; 

       $data = $buzon_retiro_controller->getAll() ;

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
        
      $buzon_retiro_controller = new BuzonRetiroController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $nombres = $inputs->nombres;
      $titulo_retiro = $inputs->titulo_retiro;
      $email = $inputs->email;
      $mensaje = $inputs->mensaje;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'nombres'=> $nombres,
                'titulo_retiro'=> $titulo_retiro,
                'email'=> $email,
                'mensaje'=> $mensaje,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $buzon_retiro_controller->save($params) ;
        
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
        
      $buzon_retiro_controller = new BuzonRetiroController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $nombres = $inputs->nombres;
      $titulo_retiro = $inputs->titulo_retiro;
      $email = $inputs->email;
      $mensaje = $inputs->mensaje;
      $fecha = $inputs->fecha;
        
      $params = array(
                'id'=> $id,
                'nombres'=> $nombres,
                'titulo_retiro'=> $titulo_retiro,
                'email'=> $email,
                'mensaje'=> $mensaje,
                'fecha'=> $fecha,
              ) ; 
        
      $data = $buzon_retiro_controller->update($params) ;
        
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

      $buzon_retiro_controller = new BuzonRetiroController() ; 

      $data = $buzon_retiro_controller->updateEstado( $params ) ;

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
      $buzon_retiro_controller = new BuzonRetiroController() ; 

      $data = $buzon_retiro_controller->find( $id) ;

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

      $buzon_retiro_controller = new BuzonRetiroController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$buzon_retiro = $buzon_retiro_controller->find( $id );

				$data = $buzon_retiro_controller->deleteById( $id );

				if( !empty($buzon_retiro) && $data )
				{
					$imagen = $buzon_retiro["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $buzon_retiro_controller->updateEstado($params);
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
