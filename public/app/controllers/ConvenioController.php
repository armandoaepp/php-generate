<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ConvenioController
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
      $convenio  = new Convenio();

      $data = $convenio->getAll();

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

      $convenio  = new Convenio();
            
      $bean_convenio = new BeanConvenio();
            
      $bean_convenio->setEstado($estado);

      $data = $convenio->getByEstado($bean_convenio);

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

      $convenio  = new Convenio($this->cnx);

      $bean_convenio = new BeanConvenio();
            
      $bean_convenio->setTipoConvenioId($tipo_convenio_id);
      $bean_convenio->setNombre($nombre);
      $bean_convenio->setCaracteristica($caracteristica);
      $bean_convenio->setPrecio($precio);
      $bean_convenio->setGlosa($glosa);
      $bean_convenio->setPublicar($publicar);
            
      $data = $convenio->save($bean_convenio) ;

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

      $convenio  = new Convenio($this->cnx);
      $bean_convenio = new BeanConvenio();
            
      $bean_convenio->setConvenioId($convenio_id);
      $bean_convenio->setTipoConvenioId($tipo_convenio_id);
      $bean_convenio->setNombre($nombre);
      $bean_convenio->setCaracteristica($caracteristica);
      $bean_convenio->setPrecio($precio);
      $bean_convenio->setGlosa($glosa);
      $bean_convenio->setPublicar($publicar);

      $data = $convenio->update($bean_convenio) ;
            
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

      $convenio  = new Convenio($this->cnx);
            
      $bean_convenio = new BeanConvenio();
            
      $bean_convenio->setConvenioId($convenio_id);
      $bean_convenio->setEstado($estado);

      $data = $convenio->updateEstado($bean_convenio) ;
            
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
      $convenio  = new Convenio();

      $bean_convenio = new BeanConvenio();

      $bean_convenio->setConvenioId($id);

      $data = $convenio->find( $bean_convenio) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($convenio_id)
  {
    try
    {

      $convenio  = new Convenio();

      $bean_convenio = new BeanConvenio();

      $bean_convenio->setConvenioId($convenio_id);

      $data = $convenio->deleteById( $bean_convenio ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updatePublish($params = array())
  {
    try
    {
            
      extract($params) ; 

      $convenio  = new Convenio($this->cnx);
      $bean_convenio = new BeanConvenio();
            
      $bean_convenio->setConvenioId($convenio_id);
      $bean_convenio->setPublicar($publicar);

      $data = $convenio->updatePublish($bean_convenio) ;
            
      return $data;
    }
    catch (Exception $e)
    {
           throw new Exception($e->getMessage());
    }
  }

  public function getPublished($params = array())
  {
    try
    {
            
      extract($params) ; 

      $convenio  = new Convenio($this->cnx);
      $bean_convenio = new BeanConvenio();
            
      $bean_convenio->setPublicar($publicar);

      $data = $convenio->getPublished($bean_convenio) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
