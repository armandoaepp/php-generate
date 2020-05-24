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
      $padron_controller = new PadronController() ;

       $data = $padron_controller->getAll() ;

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

      $padron_controller = new PadronController($cnx) ;
      $connection->beginTransaction();

      $padron_id        = $inputs->padron_id;
      $codigo           = $inputs->codigo;
      $dni              = $inputs->dni;
      $apellido_paterno = $inputs->apellido_paterno;
      $apellido_materno = $inputs->apellido_materno;
      $nombres          = $inputs->nombres;
      $fecha_nac        = $inputs->fecha_nac;
      $distrito_id      = $inputs->distrito_id;
      $caserio_id       = $inputs->caserio_id;
      $sector_id        = $inputs->sector_id;
      $telefono         = $inputs->telefono;
      $email            = $inputs->email;
      $direccion        = $inputs->direccion;
      $referencia       = $inputs->referencia;
      $tipo_vivienda_id = $inputs->tipo_vivienda_id;
      $num_personas     = $inputs->num_personas;
      $imagen           = $inputs->imagen;
      $created_at       = $inputs->created_at;

      $params = array(
                'padron_id'=> $padron_id,
                'codigo'=> $codigo,
                'dni'=> $dni,
                'apellido_paterno'=> $apellido_paterno,
                'apellido_materno'=> $apellido_materno,
                'nombres'=> $nombres,
                'fecha_nac'=> $fecha_nac,
                'distrito_id'=> $distrito_id,
                'caserio_id'=> $caserio_id,
                'sector_id'=> $sector_id,
                'telefono'=> $telefono,
                'email'=> $email,
                'direccion'=> $direccion,
                'referencia'=> $referencia,
                'tipo_vivienda_id'=> $tipo_vivienda_id,
                'num_personas'=> $num_personas,
                'imagen'=> $imagen,
                'created_at'=> $created_at,
              ) ;

      $data = $padron_controller->save($params) ;

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

      $padron_controller = new PadronController($cnx) ;
      $connection->beginTransaction();

      $padron_id = $inputs->padron_id;
      $codigo = $inputs->codigo;
      $dni = $inputs->dni;
      $apellido_paterno = $inputs->apellido_paterno;
      $apellido_materno = $inputs->apellido_materno;
      $nombres = $inputs->nombres;
      $fecha_nac = $inputs->fecha_nac;
      $distrito_id = $inputs->distrito_id;
      $caserio_id = $inputs->caserio_id;
      $sector_id = $inputs->sector_id;
      $telefono = $inputs->telefono;
      $email = $inputs->email;
      $direccion = $inputs->direccion;
      $referencia = $inputs->referencia;
      $tipo_vivienda_id = $inputs->tipo_vivienda_id;
      $num_personas = $inputs->num_personas;
      $imagen = $inputs->imagen;
      $created_at = $inputs->created_at;

      $params = array(
                'padron_id'=> $padron_id,
                'codigo'=> $codigo,
                'dni'=> $dni,
                'apellido_paterno'=> $apellido_paterno,
                'apellido_materno'=> $apellido_materno,
                'nombres'=> $nombres,
                'fecha_nac'=> $fecha_nac,
                'distrito_id'=> $distrito_id,
                'caserio_id'=> $caserio_id,
                'sector_id'=> $sector_id,
                'telefono'=> $telefono,
                'email'=> $email,
                'direccion'=> $direccion,
                'referencia'=> $referencia,
                'tipo_vivienda_id'=> $tipo_vivienda_id,
                'num_personas'=> $num_personas,
                'imagen'=> $imagen,
                'created_at'=> $created_at,
              ) ;

      $data = $padron_controller->update($params) ;

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

      $padron_id = $inputs->padron_id;
      $estado = $inputs->estado;

      $params = array(
                'padron_id'=> $padron_id,
                'estado'=> $estado,
              ) ;

      $padron_controller = new PadronController() ;

      $data = $padron_controller->updateEstado( $params ) ;

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
      $padron_controller = new PadronController() ;

      $data = $padron_controller->find( $id) ;

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

      $padron_id = $inputs->id;
      $estado = $inputs->estado;

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'padron_id'=> $padron_id,
                'estado'=> $estado,
              ) ;

      $padron_controller = new PadronController() ;


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $padron = $padron_controller->find( $padron_id );

        $data = $padron_controller->deleteById( $padron_id );
				if( !empty($padron) && $data )
				{
					$imagen = $padron["imagen"] ;
					UploadFiles::removeFile($imagen) ;
                }

			}
			else
			{
				$data = $padron_controller->updateEstado($params);
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
