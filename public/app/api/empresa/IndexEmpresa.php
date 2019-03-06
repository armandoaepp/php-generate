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
      $empresa_controller = new EmpresaController() ; 

       $data = $empresa_controller->getAll() ;

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
        
      $empresa_controller = new EmpresaController($cnx) ; 
      $connection->beginTransaction();
        
      $empresa_id = $inputs->empresa_id;
      $tipo_empresa_id = $inputs->tipo_empresa_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $imagen = $inputs->imagen;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'empresa_id'=> $empresa_id,
                'tipo_empresa_id'=> $tipo_empresa_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'imagen'=> $imagen,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $empresa_controller->save($params) ;
        
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
        
      $empresa_controller = new EmpresaController($cnx) ; 
      $connection->beginTransaction();
        
      $empresa_id = $inputs->empresa_id;
      $tipo_empresa_id = $inputs->tipo_empresa_id;
      $nombre = $inputs->nombre;
      $descripcion = $inputs->descripcion;
      $imagen = $inputs->imagen;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'empresa_id'=> $empresa_id,
                'tipo_empresa_id'=> $tipo_empresa_id,
                'nombre'=> $nombre,
                'descripcion'=> $descripcion,
                'imagen'=> $imagen,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $empresa_controller->update($params) ;
        
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

      $empresa_id = $inputs->empresa_id;
      $estado = $inputs->estado;

      $params = array(
                'empresa_id'=> $empresa_id,
                'estado'=> $estado,
              ) ; 

      $empresa_controller = new EmpresaController() ; 

      $data = $empresa_controller->updateEstado( $params ) ;

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
      $empresa_controller = new EmpresaController() ; 

      $data = $empresa_controller->find( $id) ;

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

      $empresa_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'empresa_id'=> $empresa_id,
                'estado'=> $estado,
              ) ; 

      $empresa_controller = new EmpresaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$empresa = $empresa_controller->find( $empresa_id );

				$data = $empresa_controller->deleteById( $empresa_id );

				if( !empty($empresa) && $data )
				{
					$imagen = $empresa["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $empresa_controller->updateEstado($params);
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

      $empresa_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'empresa_id'=> $empresa_id,
                'publicar'=> $publicar,
              ) ; 

      $empresa_controller = new EmpresaController() ; 

      $data = $empresa_controller->updatePublish( $params ) ;

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

      $empresa_controller = new EmpresaController() ; 

      $data = $empresa_controller->getPublished( $params ) ;

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
