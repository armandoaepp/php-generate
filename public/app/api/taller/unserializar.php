<?php

/**
 * [Api Index Auth  Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/


  require_once '../../autoload.php';


    try
    {
      $taller_controller = new TallerController() ;

       $data = $taller_controller->getAll() ;
       $data = Serialize::unSerializeArray($data);

       // for ($i=0; $i < 1; $i++) {
         for ($i=0; $i < count($data); $i++) {
          // print_r($data[$i]);
            $taller_controller->update($data[$i]) ;
       }

      // $data = array('msg' => 'Listado correcto', 'error' => false, 'data' => $data);
    }
    catch (Exception $e)
    {
      $data = array('msg' => 'Error al consultar datos'. $e->getMessage(), 'error' => true, 'data' => array());
    }

    $jsn  = json_encode($data);
    print_r($jsn) ;