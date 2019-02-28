<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class NoticiaImgController
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
      $noticia_img  = new NoticiaImg();

      $data = $noticia_img->getAll();

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
      $noticia_img  = new NoticiaImg();

      $data = $noticia_img->getByEstado();

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

      $noticia_img  = new NoticiaImg($this->cnx);

      $bean_noticia_img = new BeanNoticiaImg();
            
      $bean_noticia_img->setNoticiaId($noticia_id);
      $bean_noticia_img->setImagen($imagen);
      $bean_noticia_img->setJerarquia($jerarquia);
      $bean_noticia_img->setFecha($fecha);
            
      $data = $noticia_img->save($bean_noticia_img) ;

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

      $noticia_img  = new NoticiaImg($this->cnx);
      $bean_noticia_img = new BeanNoticiaImg();
            
      $bean_noticia_img->setId($id);
      $bean_noticia_img->setNoticiaId($noticia_id);
      $bean_noticia_img->setImagen($imagen);
      $bean_noticia_img->setJerarquia($jerarquia);
      $bean_noticia_img->setFecha($fecha);

      $data = $noticia_img->update($bean_noticia_img) ;
            
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

      $noticia_img  = new NoticiaImg($this->cnx);
      $bean_noticia_img = new BeanNoticiaImg();
            
      $bean_noticia_img->setId($id);
      $bean_noticia_img->setEstado($estado);

      $data = $noticia_img->updateEstado($bean_noticia_img) ;
            
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
      $noticia_img  = new NoticiaImg();

      $bean_noticia_img = new BeanNoticiaImg();

      $bean_noticia_img->setId($id);

      $data = $noticia_img->find( $bean_noticia_img) ;
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

      $noticia_img  = new NoticiaImg();

      $bean_noticia_img = new BeanNoticiaImg();

      $bean_noticia_img->setId($id);

      $data = $noticia_img->deleteById( $bean_noticia_img ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
