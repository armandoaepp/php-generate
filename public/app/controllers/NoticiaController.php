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

  public function getFindWithDetalle($id)
  {
    try
    {

      $data = array();

      $noticia  = new Noticia();

      $bean_noticia = new BeanNoticia();

      $bean_noticia->setId($id);

      $noticia = $noticia->find( $bean_noticia) ;

      # Images of noticia

      $noticia_img  = new NoticiaImg();

      $bean_noticia_img = new BeanNoticiaImg();

      $bean_noticia_img->setNoticiaId($id);

      $noticia_img = $noticia_img->getByNoticiaId( $bean_noticia_img);

      $data['noticia'] = $noticia ;
      $data['noticia_img'] = $noticia_img ;

      return $data;

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

      $noticia  = new Noticia();

      $bean_noticia = new BeanNoticia();

      $bean_noticia->setEstado($estado);

      $data = $noticia->getByEstado($bean_noticia);

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

      $item = !empty($item) ? $item : 0 ;

      $bean_noticia->setTitulo($titulo);
      $bean_noticia->setTipoNoticiaId($tipo_noticia_id);
      $bean_noticia->setDescripcion($descripcion);
      $bean_noticia->setImagen($imagen);
      $bean_noticia->setUrl($url);
      $bean_noticia->setItem($item);
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
      $bean_noticia->setTipoNoticiaId($tipo_noticia_id);
      $bean_noticia->setDescripcion($descripcion);
      $bean_noticia->setImagen($imagen);
      $bean_noticia->setUrl($url);
      // $bean_noticia->setItem($item);
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

  public function deleteById($id)
  {
    try
    {

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

  public function getLastRow()
  {
    try
    {
      $noticia  = new Noticia();

      $data = $noticia->getLastRow();
      $data = Serialize::unSerializeRow($data);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getPublishedByTipoNoticiaId($params = array())
  {
    try
    {

      extract($params) ;

      $noticia  = new Noticia($this->cnx);
      $bean_noticia = new BeanNoticia();

      $bean_noticia->setPublicar($publicar);
      $bean_noticia->setTipoNoticiaId($tipo_noticia_id);

      $data = $noticia->getPublishedByTipoNoticiaId($bean_noticia) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
