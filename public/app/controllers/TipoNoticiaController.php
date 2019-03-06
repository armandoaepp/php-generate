<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class TipoNoticiaController
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
      $tipo_noticia  = new TipoNoticia();

      $data = $tipo_noticia->getAll();

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

      $tipo_noticia  = new TipoNoticia();
            
      $bean_tipo_noticia = new BeanTipoNoticia();
            
      $bean_tipo_noticia->setEstado($estado);

      $data = $tipo_noticia->getByEstado($bean_tipo_noticia);

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

      $tipo_noticia  = new TipoNoticia($this->cnx);

      $bean_tipo_noticia = new BeanTipoNoticia();
            
      $bean_tipo_noticia->setNombre($nombre);
      $bean_tipo_noticia->setUrl($url);
      $bean_tipo_noticia->setImagen($imagen);
      $bean_tipo_noticia->setPublicar($publicar);
            
      $data = $tipo_noticia->save($bean_tipo_noticia) ;

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

      $tipo_noticia  = new TipoNoticia($this->cnx);
      $bean_tipo_noticia = new BeanTipoNoticia();
            
      $bean_tipo_noticia->setTipoNoticiaId($tipo_noticia_id);
      $bean_tipo_noticia->setNombre($nombre);
      $bean_tipo_noticia->setUrl($url);
      $bean_tipo_noticia->setImagen($imagen);
      $bean_tipo_noticia->setPublicar($publicar);

      $data = $tipo_noticia->update($bean_tipo_noticia) ;
            
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

      $tipo_noticia  = new TipoNoticia($this->cnx);
            
      $bean_tipo_noticia = new BeanTipoNoticia();
            
      $bean_tipo_noticia->setTipoNoticiaId($tipo_noticia_id);
      $bean_tipo_noticia->setEstado($estado);

      $data = $tipo_noticia->updateEstado($bean_tipo_noticia) ;
            
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
      $tipo_noticia  = new TipoNoticia();

      $bean_tipo_noticia = new BeanTipoNoticia();

      $bean_tipo_noticia->setTipoNoticiaId($id);

      $data = $tipo_noticia->find( $bean_tipo_noticia) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($tipo_noticia_id)
  {
    try
    {

      $tipo_noticia  = new TipoNoticia();

      $bean_tipo_noticia = new BeanTipoNoticia();

      $bean_tipo_noticia->setTipoNoticiaId($tipo_noticia_id);

      $data = $tipo_noticia->deleteById( $bean_tipo_noticia ) ;

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

      $tipo_noticia  = new TipoNoticia($this->cnx);
      $bean_tipo_noticia = new BeanTipoNoticia();
            
      $bean_tipo_noticia->setTipoNoticiaId($tipo_noticia_id);
      $bean_tipo_noticia->setPublicar($publicar);

      $data = $tipo_noticia->updatePublish($bean_tipo_noticia) ;
            
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

      $tipo_noticia  = new TipoNoticia($this->cnx);
      $bean_tipo_noticia = new BeanTipoNoticia();
            
      $bean_tipo_noticia->setPublicar($publicar);

      $data = $tipo_noticia->getPublished($bean_tipo_noticia) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
