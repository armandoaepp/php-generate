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
        
      $idcategoria = $inputs->idcategoria;
      $nombre = $inputs->nombre;
      $url = $inputs->url;
      $imagen = $inputs->imagen;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'idcategoria'=> $idcategoria,
                'nombre'=> $nombre,
                'url'=> $url,
                'imagen'=> $imagen,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
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
        
      $idcategoria = $inputs->idcategoria;
      $nombre = $inputs->nombre;
      $url = $inputs->url;
      $imagen = $inputs->imagen;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'idcategoria'=> $idcategoria,
                'nombre'=> $nombre,
                'url'=> $url,
                'imagen'=> $imagen,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
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

      $idcategoria = $inputs->idcategoria;
      $estado = $inputs->estado;

      $params = array(
                'idcategoria'=> $idcategoria,
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

      $idcategoria = $inputs->id;
      $estado = 0; 

      $params = array(
                'idcategoria'=> $idcategoria,
                'estado'=> $estado,
              ) ; 

      $categoria_controller = new CategoriaController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$categoria = $categoria_controller->find($params);

				$data = $categoria_controller->deleteById($params);

				if( !empty($categoria) && $data )
				{
					$imagen = $categoria["imagen"] ;
					UploadFiles::removeFile($img_bd) ;
				}

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

      $idcategoria = $inputs->id;
      $publicar = $inputs->publicar;

      if($publicar == "N"){
                $publicar = "S" ;
      }else{
                $publicar = "N" ;
      }

      $params = array(
                'idcategoria'=> $idcategoria,
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
