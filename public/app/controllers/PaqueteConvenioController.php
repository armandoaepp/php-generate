<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaqueteConvenioController
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
      $paquete_convenio  = new PaqueteConvenio();

      $data = $paquete_convenio->getAll();

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

      $paquete_convenio  = new PaqueteConvenio();

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setEstado($estado);

      $data = $paquete_convenio->getByEstado($bean_paquete_convenio);

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

      $paquete_convenio  = new PaqueteConvenio($this->cnx);

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setPaqueteId($paquete_id);
      $bean_paquete_convenio->setConvenioId($convenio_id);

      $data = $paquete_convenio->save($bean_paquete_convenio) ;

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

      $paquete_convenio  = new PaqueteConvenio($this->cnx);
      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setPaqueteConvenioId($paquete_convenio_id);
      $bean_paquete_convenio->setPaqueteId($paquete_id);
      $bean_paquete_convenio->setConvenioId($convenio_id);

      $data = $paquete_convenio->update($bean_paquete_convenio) ;

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

      $paquete_convenio  = new PaqueteConvenio($this->cnx);

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setPaqueteConvenioId($paquete_convenio_id);
      $bean_paquete_convenio->setEstado($estado);

      $data = $paquete_convenio->updateEstado($bean_paquete_convenio) ;

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
      $paquete_convenio  = new PaqueteConvenio();

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setPaqueteConvenioId($id);

      $data = $paquete_convenio->find( $bean_paquete_convenio) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($paquete_convenio_id)
  {
    try
    {

      $paquete_convenio  = new PaqueteConvenio();

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setPaqueteConvenioId($paquete_convenio_id);

      $data = $paquete_convenio->deleteById( $bean_paquete_convenio ) ;

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

      $paquete_convenio  = new PaqueteConvenio();

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setPaqueteId($paquete_id);

      $data = $paquete_convenio->getByPaqueteId($bean_paquete_convenio);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updateEstadoByPaqueteId($params = array())
  {
    try
    {

      extract($params) ;

      $paquete_convenio  = new PaqueteConvenio($this->cnx);

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $bean_paquete_convenio->setPaqueteId($paquete_id);
      $bean_paquete_convenio->setEstado($estado);

      $data = $paquete_convenio->updateEstadoByPaqueteId($bean_paquete_convenio) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByPaqueteIdConvenioId( $params = array() )
  {
    try
    {
      $paquete_convenio  = new PaqueteConvenio();

      $bean_paquete_convenio = new BeanPaqueteConvenio();

      $paquete_id = $bean_paquete_convenio->getPaqueteId();
      $convenio_id = $bean_paquete_convenio->getConvenioId();

      $data = $paquete_convenio->getByPaqueteIdConvenioId( $bean_paquete_convenio) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }


}
