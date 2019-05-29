<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ItinerarioController
{
  private $cnx;

  public function __construct($cnx = null)
  {
    $this->cnx = $cnx;
  }
    
  public function getAll()
  {
    try
    {
      $itinerario  = new Itinerario();

      $data = $itinerario->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado( $params = array() )
  {
    try
    {
            
      extract($params) ; 

      $itinerario  = new Itinerario();
            
      $bean_itinerario = new BeanItinerario();
            
      $bean_itinerario->setEstado($estado);

      $data = $itinerario->getByEstado($bean_itinerario);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function save($params = array() )
  {
    try
    {
            
      extract($params) ; 

      $itinerario  = new Itinerario($this->cnx);

      $bean_itinerario = new BeanItinerario();
            
      $bean_itinerario->setPaqueteId($paquete_id);
      $bean_itinerario->setDia($dia);
      $bean_itinerario->setTitulo($titulo);
      $bean_itinerario->setDescripcion($descripcion);
            
      $data = $itinerario->save($bean_itinerario) ;

      return $data ;
    }
    catch (Exception $e)
    {
        throw new Exception($e->getMessage());
    }
  }

  public function update($params = array())
  {
    try
    {
            
      extract($params) ; 

      $itinerario  = new Itinerario($this->cnx);
      $bean_itinerario = new BeanItinerario();
            
      $bean_itinerario->setId($id);
      $bean_itinerario->setPaqueteId($paquete_id);
      $bean_itinerario->setDia($dia);
      $bean_itinerario->setTitulo($titulo);
      $bean_itinerario->setDescripcion($descripcion);

      $data = $itinerario->update($bean_itinerario) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updateEstado($params = array())
  {
    try
    {
            
      extract($params) ; 

      $itinerario  = new Itinerario($this->cnx);
            
      $bean_itinerario = new BeanItinerario();
            
      $bean_itinerario->setId($id);
      $bean_itinerario->setEstado($estado);

      $data = $itinerario->updateEstado($bean_itinerario) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function find($id)
  {
    try
    {
      $itinerario  = new Itinerario();

      $bean_itinerario = new BeanItinerario();

      $bean_itinerario->setId($id);

      $data = $itinerario->find( $bean_itinerario) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($id)
  {
    try
    {

      $itinerario  = new Itinerario();

      $bean_itinerario = new BeanItinerario();

      $bean_itinerario->setId($id);

      $data = $itinerario->deleteById( $bean_itinerario ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
