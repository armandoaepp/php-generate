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
      $categoria_controller = new CategoriaController() ; 

       $data = $categoria_controller->getAll() ;

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
        
      $categoria_controller = new CategoriaController($cnx) ; 
      $connection->beginTransaction();
        
      $categoria_id = $inputs->categoria_id;
      $cat_nombre = $inputs->cat_nombre;
      $cat_imagen = $inputs->cat_imagen;
      $cat_publicar = $inputs->cat_publicar;
        
      $params = array(
                'categoria_id'=> $categoria_id,
                'cat_nombre'=> $cat_nombre,
                'cat_imagen'=> $cat_imagen,
                'cat_publicar'=> $cat_publicar,
              ) ; 
        
      $data = $categoria_controller->save($params) ;
        
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
        
      $categoria_controller = new CategoriaController($cnx) ; 
      $connection->beginTransaction();
        
      $categoria_id = $inputs->categoria_id;
      $cat_nombre = $inputs->cat_nombre;
      $cat_imagen = $inputs->cat_imagen;
      $cat_publicar = $inputs->cat_publicar;
        
      $params = array(
                'categoria_id'=> $categoria_id,
                'cat_nombre'=> $cat_nombre,
                'cat_imagen'=> $cat_imagen,
                'cat_publicar'=> $cat_publicar,
              ) ; 
        
      $data = $categoria_controller->update($params) ;
        
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

      $categoria_id = $inputs->categoria_id;
      $estado = $inputs->cat_estado;

      $params = array(
                'categoria_id'=> $categoria_id,
                'estado'=> $estado,
              ) ; 

      $categoria_controller = new CategoriaController() ; 

      $data = $categoria_controller->updateEstado( $params ) ;

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
      $categoria_controller = new CategoriaController() ; 

      $data = $categoria_controller->find( $id) ;

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

      $categoria_id = $inputs->id;
      $estado = $inputs->estado; 

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'categoria_id'=> $categoria_id,
                'estado'=> $estado,
              ) ; 

      $categoria_controller = new CategoriaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $categoria = $categoria_controller->find( $categoria_id );

        $data = $categoria_controller->deleteById( $categoria_id );

			}
			else
			{
				$data = $categoria_controller->updateEstado($params);
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

      $categoria_id = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'categoria_id'=> $categoria_id,
                'publicar'=> $publicar,
              ) ; 

      $categoria_controller = new CategoriaController() ; 

      $data = $categoria_controller->updatePublish( $params ) ;

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

      $categoria_controller = new CategoriaController() ; 

      $data = $categoria_controller->getPublished( $params ) ;

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
