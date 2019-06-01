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
      $itinerario_controller = new ItinerarioController() ;

       $data = $itinerario_controller->getAll() ;

      $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "add-day":

    try
    {
      $connection = new Connection();
      $cnx = $connection->getConnection();

      $itinerario_controller = new ItinerarioController($cnx) ;
      $connection->beginTransaction();

      // $itinerario_controller = new ItinerarioController() ;
      $paquete_id  = $inputs->paquete_id;

      $params = array(
        'paquete_id' => $paquete_id ,
      );

      $itinerarios = $itinerario_controller->getByPaqueteId($params);

      $dias = count($itinerarios);
      $new_dia = $dias + 1;

      $params = array(
                // 'id'=> $id,
                'paquete_id'  => $paquete_id,
                'dia'         => $new_dia,
                'titulo'      => "",
                'descripcion' => "",
              ) ;

      $data = $itinerario_controller->save($params) ;

       # Actualizar numero dias paquete
       $paquete_controller = new PaqueteController($cnx) ;

       $params_paq = array(
        'paquete_id' => $paquete_id,
        'num_dias'   => $new_dia,
      ) ;

      $paquete_data = $paquete_controller->updateDias($params_paq);


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

  case "remove-day":

    try
    {

      $connection = new Connection();
      $cnx = $connection->getConnection();

      $itinerario_controller = new ItinerarioController($cnx) ;
      $connection->beginTransaction();

      $paquete_id  = $inputs->paquete_id;
      // $paquete_id  = 2;

      $params = array(
        'paquete_id' => $paquete_id ,
      );

      $itinerarios = $itinerario_controller->getByPaqueteId($params);

      $dias = count($itinerarios);


      if ($dias > 0)
      {
        $new_dia = $dias - 1;

        $last_item = end($itinerarios);
        $itienerario_id_last = $last_item->id ;

        $itinerario_controller->deleteById($itienerario_id_last);

        # Actualizar numero dias paquete
        $paquete_controller = new PaqueteController($cnx) ;

        $params_paq = array(
          'paquete_id' => $paquete_id,
          'num_dias'   => $new_dia,
        ) ;

        $paquete_data = $paquete_controller->updateDias($params_paq);


      }

      $connection->commit();

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => []);
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

      $itinerario_controller = new ItinerarioController($cnx) ;
      $connection->beginTransaction();

      $id = $inputs->id;
      $paquete_id = $inputs->paquete_id;
      $dia = $inputs->dia;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;

      $params = array(
                'id'=> $id,
                'paquete_id'=> $paquete_id,
                'dia'=> $dia,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
              ) ;

      $data = $itinerario_controller->update($params) ;

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

      $itinerario_controller = new ItinerarioController() ;

      $data = $itinerario_controller->updateEstado( $params ) ;

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
      $itinerario_controller = new ItinerarioController() ;

      $data = $itinerario_controller->find( $id) ;

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

      $itinerario_controller = new ItinerarioController() ;


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $itinerario = $itinerario_controller->find( $id );

        $data = $itinerario_controller->deleteById( $id );

			}
			else
			{
				$data = $itinerario_controller->updateEstado($params);
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
