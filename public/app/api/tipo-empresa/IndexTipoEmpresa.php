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
      $tipo_empresa_controller = new TipoEmpresaController() ; 

       $data = $tipo_empresa_controller->getAll() ;

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
        
      $tipo_empresa_controller = new TipoEmpresaController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_empresa_id = $inputs->tipo_empresa_id;
      $descripcion = $inputs->descripcion;
      $glosa = $inputs->glosa;
      $created_up = $inputs->created_up;
        
      $params = array(
                'tipo_empresa_id'=> $tipo_empresa_id,
                'descripcion'=> $descripcion,
                'glosa'=> $glosa,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $tipo_empresa_controller->save($params) ;
        
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
        
      $tipo_empresa_controller = new TipoEmpresaController($cnx) ; 
      $connection->beginTransaction();
        
      $tipo_empresa_id = $inputs->tipo_empresa_id;
      $descripcion = $inputs->descripcion;
      $glosa = $inputs->glosa;
      $created_up = $inputs->created_up;
        
      $params = array(
                'tipo_empresa_id'=> $tipo_empresa_id,
                'descripcion'=> $descripcion,
                'glosa'=> $glosa,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $tipo_empresa_controller->update($params) ;
        
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

      $tipo_empresa_id = $inputs->tipo_empresa_id;
      $estado = $inputs->estado;

      $params = array(
                'tipo_empresa_id'=> $tipo_empresa_id,
                'estado'=> $estado,
              ) ; 

      $tipo_empresa_controller = new TipoEmpresaController() ; 

      $data = $tipo_empresa_controller->updateEstado( $params ) ;

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
      $tipo_empresa_controller = new TipoEmpresaController() ; 

      $data = $tipo_empresa_controller->find( $id) ;

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

      $tipo_empresa_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'tipo_empresa_id'=> $tipo_empresa_id,
                'estado'=> $estado,
              ) ; 

      $tipo_empresa_controller = new TipoEmpresaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$tipo_empresa = $tipo_empresa_controller->find( $tipo_empresa_id );

				$data = $tipo_empresa_controller->deleteById( $tipo_empresa_id );

				if( !empty($tipo_empresa) && $data )
				{
					$imagen = $tipo_empresa["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $tipo_empresa_controller->updateEstado($params);
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
