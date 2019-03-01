<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class NoticiaController
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
      $noticia  = new Noticia();

      $data = $noticia->getAll();

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
      $noticia  = new Noticia();

      $data = $noticia->getByEstado();

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

      $noticia  = new Noticia($this->cnx);

      $bean_noticia = new BeanNoticia();

      $bean_noticia->setTitulo($titulo);
      $bean_noticia->setDescripcion($descripcion);
      $bean_noticia->setUrlSeo($url);
      $bean_noticia->setGlosa($glosa);
      $bean_noticia->setPublicar($publicar);

      $data = $noticia->save($bean_noticia) ;

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

      $noticia  = new Noticia($this->cnx);
      $bean_noticia = new BeanNoticia();

      $bean_noticia->setId($id);
      $bean_noticia->setTitulo($titulo);
      $bean_noticia->setDescripcion($descripcion);
      $bean_noticia->setUrlSeo($url);
      $bean_noticia->setGlosa($glosa);
      $bean_noticia->setPublicar($publicar);

      $data = $noticia->update($bean_noticia) ;

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

      $noticia  = new Noticia($this->cnx);
      $bean_noticia = new BeanNoticia();

      $bean_noticia->setId($id);
      $bean_noticia->setEstado($estado);

      $data = $noticia->updateEstado($bean_noticia) ;

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
      $noticia  = new Noticia();

      $bean_noticia = new BeanNoticia();

      $bean_noticia->setId($id);

      $data = $noticia->find( $bean_noticia) ;
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

      $noticia  = new Noticia();

      $bean_noticia = new BeanNoticia();

      $bean_noticia->setId($id);

      $data = $noticia->deleteById( $bean_noticia ) ;

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

      $noticia  = new Noticia($this->cnx);
      $bean_noticia = new BeanNoticia();

      $bean_noticia->setId($id);
      $bean_noticia->setPublicar($publicar);

      $data = $noticia->updatePublish($bean_noticia) ;

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

      $noticia  = new Noticia($this->cnx);
      $bean_noticia = new BeanNoticia();

      $bean_noticia->setPublicar($publicar);

      $data = $noticia->getPublished($bean_noticia) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
