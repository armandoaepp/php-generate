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
      $ubigeo_controller = new UbigeoController() ;

       $data = $ubigeo_controller->getAll() ;

      $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "distritos-by-pais":
    try
    {
      $ubigeo_controller = new UbigeoController() ;

       $data = $ubigeo_controller->getAll() ;

      $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;


  case "distritos-by-departamento":
    try
    {
      $departamento_id = $inputs->departamento_id;
      $tipo_ubigeo = !empty($inputs->tipo_ubigeo) ? $inputs->tipo_ubigeo : 3;

      $ubigeo_controller = new UbigeoController() ;

      $data = [] ;

      if($tipo_ubigeo == 2)
      {
        $data = $ubigeo_controller->getProvinciasByDepartamentoId($departamento_id) ;
      }else if($tipo_ubigeo == 3)
      {
        $data = $ubigeo_controller->getDistritosByDepartamentoId($departamento_id) ;
      }


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

      $ubigeo_controller = new UbigeoController($cnx) ;
      $connection->beginTransaction();

      $ubigeo_id       = $inputs->ubigeo_id;
      $codigo          = $inputs->codigo;
      $nombre          = $inputs->nombre;
      $descripcion     = $inputs->descripcion;
      $ubigeo_id_padre = $inputs->ubigeo_id_padre;
      $pais_id         = $inputs->pais_id;
      $region_id       = $inputs->region_id;
      $tipo            = $inputs->tipo;

      $params = array(
                'ubigeo_id'=> $ubigeo_id,
                'codigo'=> $codigo,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'ubigeo_id_padre'=> $ubigeo_id_padre,
                'pais_id'=> $pais_id,
                'region_id'=> $region_id,
                'tipo'=> $tipo,
              ) ;

      $data = $ubigeo_controller->save($params) ;

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

      $ubigeo_controller = new UbigeoController($cnx) ;
      $connection->beginTransaction();

      $ubigeo_id = $inputs->ubigeo_id;
      $codigo = $inputs->codigo;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $ubigeo_id_padre = $inputs->ubigeo_id_padre;
      $pais_id = $inputs->pais_id;
      $region_id = $inputs->region_id;
      $tipo = $inputs->tipo;

      $params = array(
                'ubigeo_id'=> $ubigeo_id,
                'codigo'=> $codigo,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'ubigeo_id_padre'=> $ubigeo_id_padre,
                'pais_id'=> $pais_id,
                'region_id'=> $region_id,
                'tipo'=> $tipo,
              ) ;

      $data = $ubigeo_controller->update($params) ;

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

      $ubigeo_id = $inputs->ubigeo_id;
      $estado = $inputs->estado;

      $params = array(
                'ubigeo_id'=> $ubigeo_id,
                'estado'=> $estado,
              ) ;

      $ubigeo_controller = new UbigeoController() ;

      $data = $ubigeo_controller->updateEstado( $params ) ;

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
      $ubigeo_controller = new UbigeoController() ;

      $data = $ubigeo_controller->find( $id) ;

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

      $ubigeo_id = $inputs->id;
      $estado = $inputs->estado;

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'ubigeo_id'=> $ubigeo_id,
                'estado'=> $estado,
              ) ;

      $ubigeo_controller = new UbigeoController() ;


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $ubigeo = $ubigeo_controller->find( $ubigeo_id );

        $data = $ubigeo_controller->deleteById( $ubigeo_id );

			}
			else
			{
				$data = $ubigeo_controller->updateEstado($params);
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
