<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PublicacionController
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
      $publicacion  = new Publicacion();

      $data = $publicacion->getAll();

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

      $publicacion  = new Publicacion();
            
      $bean_publicacion = new BeanPublicacion();
            
      $bean_publicacion->setEstado($estado);

      $data = $publicacion->getByEstado($bean_publicacion);

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

      $publicacion  = new Publicacion($this->cnx);

      $bean_publicacion = new BeanPublicacion();
            
      $bean_publicacion->setTipoPublicacionId($tipo_publicacion_id);
      $bean_publicacion->setTitulo($titulo);
      $bean_publicacion->setDescripcion($descripcion);
      $bean_publicacion->setUrlFile($url_file);
      $bean_publicacion->setPublicar($publicar);
            
      $data = $publicacion->save($bean_publicacion) ;

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

      $publicacion  = new Publicacion($this->cnx);
      $bean_publicacion = new BeanPublicacion();
            
      $bean_publicacion->setPublicacionId($publicacion_id);
      $bean_publicacion->setTipoPublicacionId($tipo_publicacion_id);
      $bean_publicacion->setTitulo($titulo);
      $bean_publicacion->setDescripcion($descripcion);
      $bean_publicacion->setUrlFile($url_file);
      $bean_publicacion->setPublicar($publicar);

      $data = $publicacion->update($bean_publicacion) ;
            
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

      $publicacion  = new Publicacion($this->cnx);
            
      $bean_publicacion = new BeanPublicacion();
            
      $bean_publicacion->setPublicacionId($publicacion_id);
      $bean_publicacion->setEstado($estado);

      $data = $publicacion->updateEstado($bean_publicacion) ;
            
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
      $publicacion  = new Publicacion();

      $bean_publicacion = new BeanPublicacion();

      $bean_publicacion->setPublicacionId($id);

      $data = $publicacion->find( $bean_publicacion) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($publicacion_id)
  {
    try
    {

      $publicacion  = new Publicacion();

      $bean_publicacion = new BeanPublicacion();

      $bean_publicacion->setPublicacionId($publicacion_id);

      $data = $publicacion->deleteById( $bean_publicacion ) ;

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

      $publicacion  = new Publicacion($this->cnx);
      $bean_publicacion = new BeanPublicacion();
            
      $bean_publicacion->setPublicacionId($publicacion_id);
      $bean_publicacion->setPublicar($publicar);

      $data = $publicacion->updatePublish($bean_publicacion) ;
            
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

      $publicacion  = new Publicacion($this->cnx);
      $bean_publicacion = new BeanPublicacion();
            
      $bean_publicacion->setPublicar($publicar);

      $data = $publicacion->getPublished($bean_publicacion) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
