<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TipoInfoAsociadoController
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
      $tipo_info_asociado  = new TipoInfoAsociado();

      $data = $tipo_info_asociado->getAll();

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

      $tipo_info_asociado  = new TipoInfoAsociado();
            
      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();
            
      $bean_tipo_info_asociado->setEstado($estado);

      $data = $tipo_info_asociado->getByEstado($bean_tipo_info_asociado);

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

      $tipo_info_asociado  = new TipoInfoAsociado($this->cnx);

      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();
            
      $bean_tipo_info_asociado->setDescripcion($descripcion);
      $bean_tipo_info_asociado->setPublicar($publicar);
            
      $data = $tipo_info_asociado->save($bean_tipo_info_asociado) ;

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

      $tipo_info_asociado  = new TipoInfoAsociado($this->cnx);
      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();
            
      $bean_tipo_info_asociado->setTipoInfoAsociadoId($tipo_info_asociado_id);
      $bean_tipo_info_asociado->setDescripcion($descripcion);
      $bean_tipo_info_asociado->setPublicar($publicar);

      $data = $tipo_info_asociado->update($bean_tipo_info_asociado) ;
            
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

      $tipo_info_asociado  = new TipoInfoAsociado($this->cnx);
            
      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();
            
      $bean_tipo_info_asociado->setTipoInfoAsociadoId($tipo_info_asociado_id);
      $bean_tipo_info_asociado->setEstado($estado);

      $data = $tipo_info_asociado->updateEstado($bean_tipo_info_asociado) ;
            
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
      $tipo_info_asociado  = new TipoInfoAsociado();

      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();

      $bean_tipo_info_asociado->setTipoInfoAsociadoId($id);

      $data = $tipo_info_asociado->find( $bean_tipo_info_asociado) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_info_asociado_id)
  {
    try
    {

      $tipo_info_asociado  = new TipoInfoAsociado();

      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();

      $bean_tipo_info_asociado->setTipoInfoAsociadoId($tipo_info_asociado_id);

      $data = $tipo_info_asociado->deleteById( $bean_tipo_info_asociado ) ;

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

      $tipo_info_asociado  = new TipoInfoAsociado($this->cnx);
      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();
            
      $bean_tipo_info_asociado->setTipoInfoAsociadoId($tipo_info_asociado_id);
      $bean_tipo_info_asociado->setPublicar($publicar);

      $data = $tipo_info_asociado->updatePublish($bean_tipo_info_asociado) ;
            
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

      $tipo_info_asociado  = new TipoInfoAsociado($this->cnx);
      $bean_tipo_info_asociado = new BeanTipoInfoAsociado();
            
      $bean_tipo_info_asociado->setPublicar($publicar);

      $data = $tipo_info_asociado->getPublished($bean_tipo_info_asociado) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
