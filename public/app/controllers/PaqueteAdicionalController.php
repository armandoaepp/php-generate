<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaqueteAdicionalController
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
      $paquete_adicional  = new PaqueteAdicional();

      $data = $paquete_adicional->getAll();

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

      $paquete_adicional  = new PaqueteAdicional();

      $bean_paquete_adicional = new BeanPaqueteAdicional();

      $bean_paquete_adicional->setEstado($estado);

      $data = $paquete_adicional->getByEstado($bean_paquete_adicional);

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

      $paquete_adicional  = new PaqueteAdicional($this->cnx);

      $bean_paquete_adicional = new BeanPaqueteAdicional();

      $bean_paquete_adicional->setPaqueteId($paquete_id);
      $bean_paquete_adicional->setAdicionalId($adicional_id);

      $data = $paquete_adicional->save($bean_paquete_adicional) ;

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

      $paquete_adicional  = new PaqueteAdicional($this->cnx);
      $bean_paquete_adicional = new BeanPaqueteAdicional();

      $bean_paquete_adicional->setPaqueteAdicionalId($paquete_adicional_id);
      $bean_paquete_adicional->setPaqueteId($paquete_id);
      $bean_paquete_adicional->setAdicionalId($adicional_id);

      $data = $paquete_adicional->update($bean_paquete_adicional) ;

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

      $paquete_adicional  = new PaqueteAdicional($this->cnx);

      $bean_paquete_adicional = new BeanPaqueteAdicional();

      $bean_paquete_adicional->setPaqueteAdicionalId($paquete_adicional_id);
      $bean_paquete_adicional->setEstado($estado);

      $data = $paquete_adicional->updateEstado($bean_paquete_adicional) ;

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
      $paquete_adicional  = new PaqueteAdicional();

      $bean_paquete_adicional = new BeanPaqueteAdicional();

      $bean_paquete_adicional->setPaqueteAdicionalId($id);

      $data = $paquete_adicional->find( $bean_paquete_adicional) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($paquete_adicional_id)
  {
    try
    {

      $paquete_adicional  = new PaqueteAdicional();

      $bean_paquete_adicional = new BeanPaqueteAdicional();

      $bean_paquete_adicional->setPaqueteAdicionalId($paquete_adicional_id);

      $data = $paquete_adicional->deleteById( $bean_paquete_adicional ) ;

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

      $paquete_adicional  = new PaqueteAdicional();

      $bean_paquete_adicional = new BeanPaqueteAdicional();

      $bean_paquete_adicional->setPaqueteId($paquete_id);

      $data = $paquete_adicional->getByPaqueteId($bean_paquete_adicional);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
