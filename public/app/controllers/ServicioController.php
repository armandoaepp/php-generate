<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ServicioController
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
      $servicio  = new Servicio();

      $data = $servicio->getAll();

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

      $servicio  = new Servicio();
            
      $bean_servicio = new BeanServicio();
            
      $bean_servicio->setEstado($estado);

      $data = $servicio->getByEstado($bean_servicio);

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

      $servicio  = new Servicio($this->cnx);

      $bean_servicio = new BeanServicio();
            
      $bean_servicio->setDescripcion($descripcion);
      $bean_servicio->setIcono($icono);
      $bean_servicio->setIncluye($incluye);
            
      $data = $servicio->save($bean_servicio) ;

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

      $servicio  = new Servicio($this->cnx);
      $bean_servicio = new BeanServicio();
            
      $bean_servicio->setId($id);
      $bean_servicio->setDescripcion($descripcion);
      $bean_servicio->setIcono($icono);
      $bean_servicio->setIncluye($incluye);

      $data = $servicio->update($bean_servicio) ;
            
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

      $servicio  = new Servicio($this->cnx);
            
      $bean_servicio = new BeanServicio();
            
      $bean_servicio->setId($id);
      $bean_servicio->setEstado($estado);

      $data = $servicio->updateEstado($bean_servicio) ;
            
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
      $servicio  = new Servicio();

      $bean_servicio = new BeanServicio();

      $bean_servicio->setId($id);

      $data = $servicio->find( $bean_servicio) ;
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

      $servicio  = new Servicio();

      $bean_servicio = new BeanServicio();

      $bean_servicio->setId($id);

      $data = $servicio->deleteById( $bean_servicio ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
