<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TipoConvenioController
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
      $tipo_convenio  = new TipoConvenio();

      $data = $tipo_convenio->getAll();

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

      $tipo_convenio  = new TipoConvenio();
            
      $bean_tipo_convenio = new BeanTipoConvenio();
            
      $bean_tipo_convenio->setEstado($estado);

      $data = $tipo_convenio->getByEstado($bean_tipo_convenio);

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

      $tipo_convenio  = new TipoConvenio($this->cnx);

      $bean_tipo_convenio = new BeanTipoConvenio();
            
      $bean_tipo_convenio->setDescConvenio($desc_convenio);
            
      $data = $tipo_convenio->save($bean_tipo_convenio) ;

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

      $tipo_convenio  = new TipoConvenio($this->cnx);
      $bean_tipo_convenio = new BeanTipoConvenio();
            
      $bean_tipo_convenio->setTipoConvenioId($tipo_convenio_id);
      $bean_tipo_convenio->setDescConvenio($desc_convenio);

      $data = $tipo_convenio->update($bean_tipo_convenio) ;
            
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

      $tipo_convenio  = new TipoConvenio($this->cnx);
            
      $bean_tipo_convenio = new BeanTipoConvenio();
            
      $bean_tipo_convenio->setTipoConvenioId($tipo_convenio_id);
      $bean_tipo_convenio->setEstado($estado);

      $data = $tipo_convenio->updateEstado($bean_tipo_convenio) ;
            
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
      $tipo_convenio  = new TipoConvenio();

      $bean_tipo_convenio = new BeanTipoConvenio();

      $bean_tipo_convenio->setTipoConvenioId($id);

      $data = $tipo_convenio->find( $bean_tipo_convenio) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_convenio_id)
  {
    try
    {

      $tipo_convenio  = new TipoConvenio();

      $bean_tipo_convenio = new BeanTipoConvenio();

      $bean_tipo_convenio->setTipoConvenioId($tipo_convenio_id);

      $data = $tipo_convenio->deleteById( $bean_tipo_convenio ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
