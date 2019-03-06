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
      $oportunidad_laboral_controller = new OportunidadLaboralController() ; 

       $data = $oportunidad_laboral_controller->getAll() ;

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
        
      $oportunidad_laboral_controller = new OportunidadLaboralController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $empresa_id = $inputs->empresa_id;
      $titulo = $inputs->titulo;
      $tipo = $inputs->tipo;
      $vacantes = $inputs->vacantes;
      $requisitos = $inputs->requisitos;
      $conocimientos = $inputs->conocimientos;
      $salario = $inputs->salario;
      $nombrecontacto = $inputs->nombrecontacto;
      $telefonocontacto = $inputs->telefonocontacto;
      $emailcontacto = $inputs->emailcontacto;
      $item = $inputs->item;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'id'=> $id,
                'empresa_id'=> $empresa_id,
                'titulo'=> $titulo,
                'tipo'=> $tipo,
                'vacantes'=> $vacantes,
                'requisitos'=> $requisitos,
                'conocimientos'=> $conocimientos,
                'salario'=> $salario,
                'nombrecontacto'=> $nombrecontacto,
                'telefonocontacto'=> $telefonocontacto,
                'emailcontacto'=> $emailcontacto,
                'item'=> $item,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $oportunidad_laboral_controller->save($params) ;
        
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
        
      $oportunidad_laboral_controller = new OportunidadLaboralController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $empresa_id = $inputs->empresa_id;
      $titulo = $inputs->titulo;
      $tipo = $inputs->tipo;
      $vacantes = $inputs->vacantes;
      $requisitos = $inputs->requisitos;
      $conocimientos = $inputs->conocimientos;
      $salario = $inputs->salario;
      $nombrecontacto = $inputs->nombrecontacto;
      $telefonocontacto = $inputs->telefonocontacto;
      $emailcontacto = $inputs->emailcontacto;
      $item = $inputs->item;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'id'=> $id,
                'empresa_id'=> $empresa_id,
                'titulo'=> $titulo,
                'tipo'=> $tipo,
                'vacantes'=> $vacantes,
                'requisitos'=> $requisitos,
                'conocimientos'=> $conocimientos,
                'salario'=> $salario,
                'nombrecontacto'=> $nombrecontacto,
                'telefonocontacto'=> $telefonocontacto,
                'emailcontacto'=> $emailcontacto,
                'item'=> $item,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $oportunidad_laboral_controller->update($params) ;
        
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

      $oportunidad_laboral_controller = new OportunidadLaboralController() ; 

      $data = $oportunidad_laboral_controller->updateEstado( $params ) ;

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
      $oportunidad_laboral_controller = new OportunidadLaboralController() ; 

      $data = $oportunidad_laboral_controller->find( $id) ;

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

      $oportunidad_laboral_controller = new OportunidadLaboralController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$oportunidad_laboral = $oportunidad_laboral_controller->find( $id );

				$data = $oportunidad_laboral_controller->deleteById( $id );

				if( !empty($oportunidad_laboral) && $data )
				{
					$imagen = $oportunidad_laboral["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $oportunidad_laboral_controller->updateEstado($params);
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

  case "publish":
    try
    {

      $id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'id'=> $id,
                'publicar'=> $publicar,
              ) ; 

      $oportunidad_laboral_controller = new OportunidadLaboralController() ; 

      $data = $oportunidad_laboral_controller->updatePublish( $params ) ;

      $data = array('msg' => 'Operación Correcta', 'error' => false, 'data' => $data);

    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }
        
    $jsn  = json_encode($data);
    print_r($jsn) ;
  break;

  case "published":
    try
    {

      $publicar = $inputs->publicar;

      $params = array(
                'publicar'=> $publicar,
              ) ; 

      $oportunidad_laboral_controller = new OportunidadLaboralController() ; 

      $data = $oportunidad_laboral_controller->getPublished( $params ) ;

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
