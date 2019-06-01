<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaqueteVideoController
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
      $paquete_video  = new PaqueteVideo();

      $data = $paquete_video->getAll();

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

      $paquete_video  = new PaqueteVideo();
            
      $bean_paquete_video = new BeanPaqueteVideo();
            
      $bean_paquete_video->setEstado($estado);

      $data = $paquete_video->getByEstado($bean_paquete_video);

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

      $paquete_video  = new PaqueteVideo($this->cnx);

      $bean_paquete_video = new BeanPaqueteVideo();
            
      $bean_paquete_video->setPaqueteId($paquete_id);
      $bean_paquete_video->setUrlVideo($url_video);
      $bean_paquete_video->setItem($item);
      $bean_paquete_video->setDescVideo($desc_video);
            
      $data = $paquete_video->save($bean_paquete_video) ;

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

      $paquete_video  = new PaqueteVideo($this->cnx);
      $bean_paquete_video = new BeanPaqueteVideo();
            
      $bean_paquete_video->setId($id);
      $bean_paquete_video->setPaqueteId($paquete_id);
      $bean_paquete_video->setUrlVideo($url_video);
      $bean_paquete_video->setItem($item);
      $bean_paquete_video->setDescVideo($desc_video);

      $data = $paquete_video->update($bean_paquete_video) ;
            
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

      $paquete_video  = new PaqueteVideo($this->cnx);
            
      $bean_paquete_video = new BeanPaqueteVideo();
            
      $bean_paquete_video->setId($id);
      $bean_paquete_video->setEstado($estado);

      $data = $paquete_video->updateEstado($bean_paquete_video) ;
            
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
      $paquete_video  = new PaqueteVideo();

      $bean_paquete_video = new BeanPaqueteVideo();

      $bean_paquete_video->setId($id);

      $data = $paquete_video->find( $bean_paquete_video) ;
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

      $paquete_video  = new PaqueteVideo();

      $bean_paquete_video = new BeanPaqueteVideo();

      $bean_paquete_video->setId($id);

      $data = $paquete_video->deleteById( $bean_paquete_video ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function countRows()
  {
    try
    {
      $paquete_video  = new PaqueteVideo();

      $data = $paquete_video->countRows() ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
