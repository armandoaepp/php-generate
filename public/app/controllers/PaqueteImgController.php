<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PaqueteImgController
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
      $paquete_img  = new PaqueteImg();

      $data = $paquete_img->getAll();

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

      $paquete_img  = new PaqueteImg();

      $bean_paquete_img = new BeanPaqueteImg();

      $bean_paquete_img->setEstado($estado);

      $data = $paquete_img->getByEstado($bean_paquete_img);

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

      $paquete_img  = new PaqueteImg($this->cnx);

      $bean_paquete_img = new BeanPaqueteImg();

      $bean_paquete_img->setPaqueteId($paquete_id);
      $bean_paquete_img->setImagen($imagen);
      $bean_paquete_img->setItem($item);

      $data = $paquete_img->save($bean_paquete_img) ;

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

      $paquete_img  = new PaqueteImg($this->cnx);
      $bean_paquete_img = new BeanPaqueteImg();

      $bean_paquete_img->setId($id);
      $bean_paquete_img->setPaqueteId($paquete_id);
      $bean_paquete_img->setImagen($imagen);
      $bean_paquete_img->setItem($item);

      $data = $paquete_img->update($bean_paquete_img) ;

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

      $paquete_img  = new PaqueteImg($this->cnx);

      $bean_paquete_img = new BeanPaqueteImg();

      $bean_paquete_img->setId($id);
      $bean_paquete_img->setEstado($estado);

      $data = $paquete_img->updateEstado($bean_paquete_img) ;

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
      $paquete_img  = new PaqueteImg();

      $bean_paquete_img = new BeanPaqueteImg();

      $bean_paquete_img->setId($id);

      $data = $paquete_img->find( $bean_paquete_img) ;
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

      $paquete_img  = new PaqueteImg();

      $bean_paquete_img = new BeanPaqueteImg();

      $bean_paquete_img->setId($id);

      $data = $paquete_img->deleteById( $bean_paquete_img ) ;

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
      $paquete_img  = new PaqueteImg();

      $data = $paquete_img->countRows() ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByPaqueId( $params = array() )
  {
    try
    {

      extract($params) ;

      $paquete_img  = new PaqueteImg();

      $bean_paquete_img = new BeanPaqueteImg();

      $bean_paquete_img->setPaqueteId($paquete_id);

      $data = $paquete_img->getByPaqueId($bean_paquete_img);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }
}
