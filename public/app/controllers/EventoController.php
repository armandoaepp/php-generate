<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class EventoController
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
      $evento  = new Evento();

      $data = $evento->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado()
  {
    try
    {
      $evento  = new Evento();

      $data = $evento->getByEstado();

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

      $evento  = new Evento($this->cnx);

      $bean_evento = new BeanEvento();

      $bean_evento->setTitulo($titulo);
      $bean_evento->setDescripcion($descripcion);
      $bean_evento->setImagen($imagen);
      $bean_evento->setUrlSeo($url);
      $bean_evento->setItem($item);
      $bean_evento->setPublicar($publicar);

      $data = $evento->save($bean_evento) ;

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

      $evento  = new Evento($this->cnx);
      $bean_evento = new BeanEvento();

      $bean_evento->setId($id);
      $bean_evento->setTitulo($titulo);
      $bean_evento->setDescripcion($descripcion);
      $bean_evento->setImagen($imagen);
      $bean_evento->setUrlSeo($url);
      $bean_evento->setItem($item);
      $bean_evento->setPublicar($publicar);

      $data = $evento->update($bean_evento) ;

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

      $evento  = new Evento($this->cnx);
      $bean_evento = new BeanEvento();

      $bean_evento->setId($id);
      $bean_evento->setEstado($estado);

      $data = $evento->updateEstado($bean_evento) ;

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
      $evento  = new Evento();

      $bean_evento = new BeanEvento();

      $bean_evento->setId($id);

      $data = $evento->find( $bean_evento) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($params)
  {
    try
    {

      extract($params) ;

      $evento  = new Evento();

      $bean_evento = new BeanEvento();

      $bean_evento->setId($id);

      $data = $evento->deleteById( $bean_evento ) ;

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

      $evento  = new Evento($this->cnx);
      $bean_evento = new BeanEvento();

      $bean_evento->setId($id);
      $bean_evento->setPublicar($publicar);

      $data = $evento->updatePublish($bean_evento) ;

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

      $evento  = new Evento($this->cnx);
      $bean_evento = new BeanEvento();

      $bean_evento->setPublicar($publicar);

      $data = $evento->getPublished($bean_evento) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
