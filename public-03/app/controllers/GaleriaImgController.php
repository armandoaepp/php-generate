<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class GaleriaImgController
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
      $galeria_img  = new GaleriaImg();

      $data = $galeria_img->getAll();

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

      $galeria_img  = new GaleriaImg();
            
      $bean_galeria_img = new BeanGaleriaImg();
            
      $bean_galeria_img->setEstado($estado);

      $data = $galeria_img->getByEstado($bean_galeria_img);

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

      $galeria_img  = new GaleriaImg($this->cnx);

      $bean_galeria_img = new BeanGaleriaImg();
            
      $bean_galeria_img->setGaleriaId($galeria_id);
      $bean_galeria_img->setImagen($imagen);
      $bean_galeria_img->setItem($item);
      $bean_galeria_img->setDescImg($desc_img);
            
      $data = $galeria_img->save($bean_galeria_img) ;

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

      $galeria_img  = new GaleriaImg($this->cnx);
      $bean_galeria_img = new BeanGaleriaImg();
            
      $bean_galeria_img->setGaleriaImgId($galeria_img_id);
      $bean_galeria_img->setGaleriaId($galeria_id);
      $bean_galeria_img->setImagen($imagen);
      $bean_galeria_img->setItem($item);
      $bean_galeria_img->setDescImg($desc_img);

      $data = $galeria_img->update($bean_galeria_img) ;
            
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

      $galeria_img  = new GaleriaImg($this->cnx);
            
      $bean_galeria_img = new BeanGaleriaImg();
            
      $bean_galeria_img->setGaleriaImgId($galeria_img_id);
      $bean_galeria_img->setEstado($estado);

      $data = $galeria_img->updateEstado($bean_galeria_img) ;
            
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
      $galeria_img  = new GaleriaImg();

      $bean_galeria_img = new BeanGaleriaImg();

      $bean_galeria_img->setGaleriaImgId($id);

      $data = $galeria_img->find( $bean_galeria_img) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($galeria_img_id)
  {
    try
    {

      $galeria_img  = new GaleriaImg();

      $bean_galeria_img = new BeanGaleriaImg();

      $bean_galeria_img->setGaleriaImgId($galeria_img_id);

      $data = $galeria_img->deleteById( $bean_galeria_img ) ;

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
      $galeria_img  = new GaleriaImg();

      $data = $galeria_img->countRows() ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
