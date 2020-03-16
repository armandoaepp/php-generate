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
      $reservacion_controller = new ReservacionController() ; 

       $data = $reservacion_controller->getAll() ;

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
        
      $reservacion_controller = new ReservacionController($cnx) ; 
      $connection->beginTransaction();
        
      $reserva_id = $inputs->reserva_id;
      $tipo_habitacion_id = $inputs->tipo_habitacion_id;
      $nombre = $inputs->nombre;
      $apellidos = $inputs->apellidos;
      $cantidad = $inputs->cantidad;
      $cuidad_origen = $inputs->cuidad_origen;
      $fecha_llegada = $inputs->fecha_llegada;
      $fecha_salida = $inputs->fecha_salida;
      $telefono = $inputs->telefono;
      $email = $inputs->email;
        
      $params = array(
                'reserva_id'=> $reserva_id,
                'tipo_habitacion_id'=> $tipo_habitacion_id,
                'nombre'=> $nombre,
                'apellidos'=> $apellidos,
                'cantidad'=> $cantidad,
                'cuidad_origen'=> $cuidad_origen,
                'fecha_llegada'=> $fecha_llegada,
                'fecha_salida'=> $fecha_salida,
                'telefono'=> $telefono,
                'email'=> $email,
              ) ; 
        
      $data = $reservacion_controller->save($params) ;
        
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
        
      $reservacion_controller = new ReservacionController($cnx) ; 
      $connection->beginTransaction();
        
      $reserva_id = $inputs->reserva_id;
      $tipo_habitacion_id = $inputs->tipo_habitacion_id;
      $nombre = $inputs->nombre;
      $apellidos = $inputs->apellidos;
      $cantidad = $inputs->cantidad;
      $cuidad_origen = $inputs->cuidad_origen;
      $fecha_llegada = $inputs->fecha_llegada;
      $fecha_salida = $inputs->fecha_salida;
      $telefono = $inputs->telefono;
      $email = $inputs->email;
        
      $params = array(
                'reserva_id'=> $reserva_id,
                'tipo_habitacion_id'=> $tipo_habitacion_id,
                'nombre'=> $nombre,
                'apellidos'=> $apellidos,
                'cantidad'=> $cantidad,
                'cuidad_origen'=> $cuidad_origen,
                'fecha_llegada'=> $fecha_llegada,
                'fecha_salida'=> $fecha_salida,
                'telefono'=> $telefono,
                'email'=> $email,
              ) ; 
        
      $data = $reservacion_controller->update($params) ;
        
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

      $reserva_id = $inputs->reserva_id;
      $estado = $inputs->estado;

      $params = array(
                'reserva_id'=> $reserva_id,
                'estado'=> $estado,
              ) ; 

      $reservacion_controller = new ReservacionController() ; 

      $data = $reservacion_controller->updateEstado( $params ) ;

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
      $reservacion_controller = new ReservacionController() ; 

      $data = $reservacion_controller->find( $id) ;

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

      $reserva_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'reserva_id'=> $reserva_id,
                'estado'=> $estado,
              ) ; 

      $reservacion_controller = new ReservacionController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $reservacion = $reservacion_controller->find( $reserva_id );

        $data = $reservacion_controller->deleteById( $reserva_id );

			}
			else
			{
				$data = $reservacion_controller->updateEstado($params);
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
