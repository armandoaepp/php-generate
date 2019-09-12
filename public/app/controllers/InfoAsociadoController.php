<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class InfoAsociadoController
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
      $info_asociado  = new InfoAsociado();

      $data = $info_asociado->getAll();

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

      $info_asociado  = new InfoAsociado();
            
      $bean_info_asociado = new BeanInfoAsociado();
            
      $bean_info_asociado->setEstado($estado);

      $data = $info_asociado->getByEstado($bean_info_asociado);

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

      $info_asociado  = new InfoAsociado($this->cnx);

      $bean_info_asociado = new BeanInfoAsociado();
            
      $bean_info_asociado->setTipoInfoAsociadoId($tipo_info_asociado_id);
      $bean_info_asociado->setTitulo($titulo);
      $bean_info_asociado->setDescripcion($descripcion);
      $bean_info_asociado->setUrlFile($url_file);
      $bean_info_asociado->setPublicar($publicar);
            
      $data = $info_asociado->save($bean_info_asociado) ;

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

      $info_asociado  = new InfoAsociado($this->cnx);
      $bean_info_asociado = new BeanInfoAsociado();
            
      $bean_info_asociado->setInfoAsociadoId($info_asociado_id);
      $bean_info_asociado->setTipoInfoAsociadoId($tipo_info_asociado_id);
      $bean_info_asociado->setTitulo($titulo);
      $bean_info_asociado->setDescripcion($descripcion);
      $bean_info_asociado->setUrlFile($url_file);
      $bean_info_asociado->setPublicar($publicar);

      $data = $info_asociado->update($bean_info_asociado) ;
            
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

      $info_asociado  = new InfoAsociado($this->cnx);
            
      $bean_info_asociado = new BeanInfoAsociado();
            
      $bean_info_asociado->setInfoAsociadoId($info_asociado_id);
      $bean_info_asociado->setEstado($estado);

      $data = $info_asociado->updateEstado($bean_info_asociado) ;
            
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
      $info_asociado  = new InfoAsociado();

      $bean_info_asociado = new BeanInfoAsociado();

      $bean_info_asociado->setInfoAsociadoId($id);

      $data = $info_asociado->find( $bean_info_asociado) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($info_asociado_id)
  {
    try
    {

      $info_asociado  = new InfoAsociado();

      $bean_info_asociado = new BeanInfoAsociado();

      $bean_info_asociado->setInfoAsociadoId($info_asociado_id);

      $data = $info_asociado->deleteById( $bean_info_asociado ) ;

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

      $info_asociado  = new InfoAsociado($this->cnx);
      $bean_info_asociado = new BeanInfoAsociado();
            
      $bean_info_asociado->setInfoAsociadoId($info_asociado_id);
      $bean_info_asociado->setPublicar($publicar);

      $data = $info_asociado->updatePublish($bean_info_asociado) ;
            
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

      $info_asociado  = new InfoAsociado($this->cnx);
      $bean_info_asociado = new BeanInfoAsociado();
            
      $bean_info_asociado->setPublicar($publicar);

      $data = $info_asociado->getPublished($bean_info_asociado) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
