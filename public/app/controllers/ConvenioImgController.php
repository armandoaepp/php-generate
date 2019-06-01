<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ConvenioImgController
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
      $convenio_img  = new ConvenioImg();

      $data = $convenio_img->getAll();

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

      $convenio_img  = new ConvenioImg();
            
      $bean_convenio_img = new BeanConvenioImg();
            
      $bean_convenio_img->setEstado($estado);

      $data = $convenio_img->getByEstado($bean_convenio_img);

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

      $convenio_img  = new ConvenioImg($this->cnx);

      $bean_convenio_img = new BeanConvenioImg();
            
      $bean_convenio_img->setConvenioId($convenio_id);
      $bean_convenio_img->setImagen($imagen);
      $bean_convenio_img->setItem($item);
      $bean_convenio_img->setDescImg($desc_img);
            
      $data = $convenio_img->save($bean_convenio_img) ;

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

      $convenio_img  = new ConvenioImg($this->cnx);
      $bean_convenio_img = new BeanConvenioImg();
            
      $bean_convenio_img->setCnvenioImgId($cnvenio_img_id);
      $bean_convenio_img->setConvenioId($convenio_id);
      $bean_convenio_img->setImagen($imagen);
      $bean_convenio_img->setItem($item);
      $bean_convenio_img->setDescImg($desc_img);

      $data = $convenio_img->update($bean_convenio_img) ;
            
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

      $convenio_img  = new ConvenioImg($this->cnx);
            
      $bean_convenio_img = new BeanConvenioImg();
            
      $bean_convenio_img->setCnvenioImgId($cnvenio_img_id);
      $bean_convenio_img->setEstado($estado);

      $data = $convenio_img->updateEstado($bean_convenio_img) ;
            
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
      $convenio_img  = new ConvenioImg();

      $bean_convenio_img = new BeanConvenioImg();

      $bean_convenio_img->setCnvenioImgId($id);

      $data = $convenio_img->find( $bean_convenio_img) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($cnvenio_img_id)
  {
    try
    {

      $convenio_img  = new ConvenioImg();

      $bean_convenio_img = new BeanConvenioImg();

      $bean_convenio_img->setCnvenioImgId($cnvenio_img_id);

      $data = $convenio_img->deleteById( $bean_convenio_img ) ;

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
      $convenio_img  = new ConvenioImg();

      $data = $convenio_img->countRows() ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
