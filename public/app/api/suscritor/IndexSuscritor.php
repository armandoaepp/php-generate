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
      $suscritor_controller = new SuscritorController() ;

       $data = $suscritor_controller->getAll() ;

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

      $suscritor_controller = new SuscritorController($cnx) ;
      $connection->beginTransaction();

      $suscritor_id = $inputs->suscritor_id;
      $nombre       = $inputs->nombre;
      $email        = $inputs->email;
      $telefono     = $inputs->telefono;
      $empresa      = $inputs->empresa;
      $mensaje      = $inputs->mensaje;
      // $created_at   = $inputs->created_at;

      $params = array(
                'suscritor_id'=> $suscritor_id,
                'nombre'=> $nombre,
                'email'=> $email,
                'telefono'=> $telefono,
                'empresa'=> $empresa,
                'mensaje'=> $mensaje,
              ) ;

      $data = $suscritor_controller->save($params) ;

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

      $suscritor_controller = new SuscritorController($cnx) ;
      $connection->beginTransaction();

      $suscritor_id = $inputs->suscritor_id;
      $nombre = $inputs->nombre;
      $email = $inputs->email;
      $telefono = $inputs->telefono;
      $empresa = $inputs->empresa;
      $mensaje = $inputs->mensaje;
      $created_at = $inputs->created_at;

      $params = array(
                'suscritor_id'=> $suscritor_id,
                'nombre'=> $nombre,
                'email'=> $email,
                'telefono'=> $telefono,
                'empresa'=> $empresa,
                'mensaje'=> $mensaje,
                'created_at'=> $created_at,
              ) ;

      $data = $suscritor_controller->update($params) ;

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

      $suscritor_id = $inputs->suscritor_id;
      $estado = $inputs->estado;

      $params = array(
                'suscritor_id'=> $suscritor_id,
                'estado'=> $estado,
              ) ;

      $suscritor_controller = new SuscritorController() ;

      $data = $suscritor_controller->updateEstado( $params ) ;

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
      $suscritor_controller = new SuscritorController() ;

      $data = $suscritor_controller->find( $id) ;

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

      $suscritor_id = $inputs->id;
      $estado = $inputs->estado;

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'suscritor_id'=> $suscritor_id,
                'estado'=> $estado,
              ) ;

      $suscritor_controller = new SuscritorController() ;


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $suscritor = $suscritor_controller->find( $suscritor_id );

        $data = $suscritor_controller->deleteById( $suscritor_id );

			}
			else
			{
				$data = $suscritor_controller->updateEstado($params);
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
