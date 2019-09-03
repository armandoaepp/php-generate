<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TipoPublicacionController
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
      $tipo_publicacion  = new TipoPublicacion();

      $data = $tipo_publicacion->getAll();

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

      $tipo_publicacion  = new TipoPublicacion();

      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setEstado($estado);

      $data = $tipo_publicacion->getByEstado($bean_tipo_publicacion);

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

      $tipo_publicacion  = new TipoPublicacion($this->cnx);

      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setDescripcion($descripcion);
      $bean_tipo_publicacion->setPublicar($publicar);

      $data = $tipo_publicacion->save($bean_tipo_publicacion) ;

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

      $tipo_publicacion  = new TipoPublicacion($this->cnx);
      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setTipoPublicacionId($tipo_publicacion_id);
      $bean_tipo_publicacion->setDescripcion($descripcion);
      $bean_tipo_publicacion->setPublicar($publicar);

      $data = $tipo_publicacion->update($bean_tipo_publicacion) ;

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

      $tipo_publicacion  = new TipoPublicacion($this->cnx);

      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setTipoPublicacionId($tipo_publicacion_id);
      $bean_tipo_publicacion->setEstado($estado);

      $data = $tipo_publicacion->updateEstado($bean_tipo_publicacion) ;

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
      $tipo_publicacion  = new TipoPublicacion();

      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setTipoPublicacionId($id);

      $data = $tipo_publicacion->find( $bean_tipo_publicacion) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_publicacion_id)
  {
    try
    {

      $tipo_publicacion  = new TipoPublicacion();

      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setTipoPublicacionId($tipo_publicacion_id);

      $data = $tipo_publicacion->deleteById( $bean_tipo_publicacion ) ;

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

      $tipo_publicacion  = new TipoPublicacion($this->cnx);
      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setTipoPublicacionId($tipo_publicacion_id);
      $bean_tipo_publicacion->setPublicar($publicar);

      $data = $tipo_publicacion->updatePublish($bean_tipo_publicacion) ;

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

      $tipo_publicacion  = new TipoPublicacion($this->cnx);
      $bean_tipo_publicacion = new BeanTipoPublicacion();

      $bean_tipo_publicacion->setPublicar($publicar);

      $data = $tipo_publicacion->getPublished($bean_tipo_publicacion) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
