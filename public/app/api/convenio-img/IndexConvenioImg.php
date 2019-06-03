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
      $convenio_img_controller = new ConvenioImgController() ;

       $data = $convenio_img_controller->getAll() ;

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

      $convenio_img_controller = new ConvenioImgController($cnx) ;
      $connection->beginTransaction();

      $convenio_img_id = $inputs->convenio_img_id;
      $convenio_id = $inputs->convenio_id;
      $imagen = $inputs->imagen;
      $item = $inputs->item;
      $desc_img = $inputs->desc_img;

      $params = array(
                'convenio_img_id'=> $convenio_img_id,
                'convenio_id'=> $convenio_id,
                'imagen'=> $imagen,
                'item'=> $item,
                'desc_img'=> $desc_img,
              ) ;

      $data = $convenio_img_controller->save($params) ;

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

      $convenio_img_controller = new ConvenioImgController($cnx) ;
      $connection->beginTransaction();

      $convenio_img_id = $inputs->convenio_img_id;
      $convenio_id = $inputs->convenio_id;
      $imagen = $inputs->imagen;
      $item = $inputs->item;
      $desc_img = $inputs->desc_img;

      $params = array(
                'convenio_img_id'=> $convenio_img_id,
                'convenio_id'=> $convenio_id,
                'imagen'=> $imagen,
                'item'=> $item,
                'desc_img'=> $desc_img,
              ) ;

      $data = $convenio_img_controller->update($params) ;

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

      $convenio_img_id = $inputs->convenio_img_id;
      $estado = $inputs->estado;

      $params = array(
                'convenio_img_id'=> $convenio_img_id,
                'estado'=> $estado,
              ) ;

      $convenio_img_controller = new ConvenioImgController() ;

      $data = $convenio_img_controller->updateEstado( $params ) ;

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
      $convenio_img_controller = new ConvenioImgController() ;

      $data = $convenio_img_controller->find( $id) ;

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

      $convenio_img_id = $inputs->id;
      $estado = $inputs->estado;

      if($estado == 1){
        $estado = 0 ;
      }else{
        $estado = 1 ;
      }

      $params = array(
                'convenio_img_id'=> $convenio_img_id,
                'estado'=> $estado,
              ) ;

      $convenio_img_controller = new ConvenioImgController() ;


			$historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

			if( $historial == 0 )
			{

        $convenio_img = $convenio_img_controller->find( $convenio_img_id );

        $data = $convenio_img_controller->deleteById( $convenio_img_id );
				if( !empty($convenio_img) && $data )
				{
					$imagen = $convenio_img->imagen ;
					UploadFiles::removeFile($imagen) ;
        }

			}
			else
			{
				$data = $convenio_img_controller->updateEstado($params);
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
