<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class VideoController
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
      $video  = new Video();

      $data = $video->getAll();

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

      $video  = new Video();
            
      $bean_video = new BeanVideo();
            
      $bean_video->setEstado($estado);

      $data = $video->getByEstado($bean_video);

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

      $video  = new Video($this->cnx);

      $bean_video = new BeanVideo();
            
      $bean_video->setTitulo($titulo);
      $bean_video->setDescripcion($descripcion);
      $bean_video->setTipoVideo($tipo_video);
      $bean_video->setUrl($url);
            
      $data = $video->save($bean_video) ;

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

      $video  = new Video($this->cnx);
      $bean_video = new BeanVideo();
            
      $bean_video->setVideoId($video_id);
      $bean_video->setTitulo($titulo);
      $bean_video->setDescripcion($descripcion);
      $bean_video->setTipoVideo($tipo_video);
      $bean_video->setUrl($url);

      $data = $video->update($bean_video) ;
            
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

      $video  = new Video($this->cnx);
            
      $bean_video = new BeanVideo();
            
      $bean_video->setVideoId($video_id);
      $bean_video->setEstado($estado);

      $data = $video->updateEstado($bean_video) ;
            
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
      $video  = new Video();

      $bean_video = new BeanVideo();

      $bean_video->setVideoId($id);

      $data = $video->find( $bean_video) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($video_id)
  {
    try
    {

      $video  = new Video();

      $bean_video = new BeanVideo();

      $bean_video->setVideoId($video_id);

      $data = $video->deleteById( $bean_video ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
