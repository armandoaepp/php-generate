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
      $taller_controller = new TallerController() ; 

       $data = $taller_controller->getAll() ;

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
        
      $taller_controller = new TallerController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $chef_id = $inputs->chef_id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $imagen = $inputs->imagen;
      $certificacion = $inputs->certificacion;
      $titulos = $inputs->titulos;
      $titulacion = $inputs->titulacion;
      $duracion = $inputs->duracion;
      $dia = $inputs->dia;
      $horario = $inputs->horario;
      $lugar = $inputs->lugar;
      $precio = $inputs->precio;
      $dirigido = $inputs->dirigido;
      $sesiones = $inputs->sesiones;
      $temas = $inputs->temas;
      $url = $inputs->url;
      $item = $inputs->item;
      $glosa = $inputs->glosa;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'id'=> $id,
                'chef_id'=> $chef_id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'imagen'=> $imagen,
                'certificacion'=> $certificacion,
                'titulos'=> $titulos,
                'titulacion'=> $titulacion,
                'duracion'=> $duracion,
                'dia'=> $dia,
                'horario'=> $horario,
                'lugar'=> $lugar,
                'precio'=> $precio,
                'dirigido'=> $dirigido,
                'sesiones'=> $sesiones,
                'temas'=> $temas,
                'url'=> $url,
                'item'=> $item,
                'glosa'=> $glosa,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $taller_controller->save($params) ;
        
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
        
      $taller_controller = new TallerController($cnx) ; 
      $connection->beginTransaction();
        
      $id = $inputs->id;
      $chef_id = $inputs->chef_id;
      $titulo = $inputs->titulo;
      $descripcion = $inputs->descripcion;
      $imagen = $inputs->imagen;
      $certificacion = $inputs->certificacion;
      $titulos = $inputs->titulos;
      $titulacion = $inputs->titulacion;
      $duracion = $inputs->duracion;
      $dia = $inputs->dia;
      $horario = $inputs->horario;
      $lugar = $inputs->lugar;
      $precio = $inputs->precio;
      $dirigido = $inputs->dirigido;
      $sesiones = $inputs->sesiones;
      $temas = $inputs->temas;
      $url = $inputs->url;
      $item = $inputs->item;
      $glosa = $inputs->glosa;
      $publicar = $inputs->publicar;
      $created_up = $inputs->created_up;
        
      $params = array(
                'id'=> $id,
                'chef_id'=> $chef_id,
                'titulo'=> $titulo,
                'descripcion'=> $descripcion,
                'imagen'=> $imagen,
                'certificacion'=> $certificacion,
                'titulos'=> $titulos,
                'titulacion'=> $titulacion,
                'duracion'=> $duracion,
                'dia'=> $dia,
                'horario'=> $horario,
                'lugar'=> $lugar,
                'precio'=> $precio,
                'dirigido'=> $dirigido,
                'sesiones'=> $sesiones,
                'temas'=> $temas,
                'url'=> $url,
                'item'=> $item,
                'glosa'=> $glosa,
                'publicar'=> $publicar,
                'created_up'=> $created_up,
              ) ; 
        
      $data = $taller_controller->update($params) ;
        
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

      $taller_controller = new TallerController() ; 

      $data = $taller_controller->updateEstado( $params ) ;

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
      $taller_controller = new TallerController() ; 

      $data = $taller_controller->find( $id) ;

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

      $taller_controller = new TallerController() ; 


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

				$taller = $taller_controller->find( $id );

				$data = $taller_controller->deleteById( $id );

				if( !empty($taller) && $data )
				{
					$imagen = $taller["imagen"] ; 
					UploadFiles::removeFile($imagen) ;
				}

			}
			else
			{
				$data = $taller_controller->updateEstado($params);
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

      $taller_controller = new TallerController() ; 

      $data = $taller_controller->updatePublish( $params ) ;

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

      $taller_controller = new TallerController() ; 

      $data = $taller_controller->getPublished( $params ) ;

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
