<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaqueteServicioController
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
      $paquete_servicio  = new PaqueteServicio();

      $data = $paquete_servicio->getAll();

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

      $paquete_servicio  = new PaqueteServicio();

      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setEstado($estado);

      $data = $paquete_servicio->getByEstado($bean_paquete_servicio);

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

      $paquete_servicio  = new PaqueteServicio($this->cnx);

      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setPaqueteId($paquete_id);
      $bean_paquete_servicio->setServicioId($servicio_id);
      $bean_paquete_servicio->setTipo($tipo);

      $data = $paquete_servicio->save($bean_paquete_servicio) ;

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

      $paquete_servicio  = new PaqueteServicio($this->cnx);
      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setId($id);
      $bean_paquete_servicio->setPaqueteId($paquete_id);
      $bean_paquete_servicio->setServicioId($servicio_id);
      $bean_paquete_servicio->setTipo($tipo);
      $data = $paquete_servicio->update($bean_paquete_servicio) ;

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

      $paquete_servicio  = new PaqueteServicio($this->cnx);

      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setId($id);
      $bean_paquete_servicio->setEstado($estado);

      $data = $paquete_servicio->updateEstado($bean_paquete_servicio) ;

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
      $paquete_servicio  = new PaqueteServicio();

      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setId($id);

      $data = $paquete_servicio->find( $bean_paquete_servicio) ;
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

      $paquete_servicio  = new PaqueteServicio();

      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setId($id);

      $data = $paquete_servicio->deleteById( $bean_paquete_servicio ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByPaqueteId( $params = array() )
  {
    try
    {

      extract($params) ;

      $paquete_servicio  = new PaqueteServicio();

      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setPaqueteId($paquete_id);

      $data = $paquete_servicio->getByPaqueteId($bean_paquete_servicio);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByPaqueteIdServicioId( $params = array() )
  {
    try
    {

      extract($params) ;

      $paquete_servicio  = new PaqueteServicio();

      $bean_paquete_servicio = new BeanPaqueteServicio();

      $bean_paquete_servicio->setPaqueteId($paquete_id);
      $bean_paquete_servicio->setServicioId($servicio_id);

      $data = $paquete_servicio->getByPaqueteIdServicioId($bean_paquete_servicio);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }
}
