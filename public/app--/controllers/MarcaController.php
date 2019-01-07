<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class MarcaController
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
      $marca  = new Marca();

      $data = $marca->getAll();

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

      $marca  = new Marca($this->cnx);

      $bean_marca = new BeanMarca();
            
      $bean_marca->setNombre($nombre);
      $bean_marca->setPublicar($publicar);
            
      $data = $marca->save($bean_marca) ;

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

      $marca  = new Marca($this->cnx);
      $bean_marca = new BeanMarca();
            
      $bean_marca->setIdmarca($idmarca);
      $bean_marca->setNombre($nombre);
      $bean_marca->setPublicar($publicar);

      $data = $marca->update($bean_marca) ;
            
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

      $marca  = new Marca($this->cnx);
      $bean_marca = new BeanMarca();
            
      $bean_marca->setIdmarca($idmarca);
      $bean_marca->setEstado($estado);

      $data = $marca->updateEstado($bean_marca) ;
            
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
      $marca  = new Marca();

      $bean_marca = new BeanMarca();

      $bean_marca->setIdmarca($id);

      $data = $marca->find( $bean_marca) ;

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

      $marca  = new Marca();

      $bean_marca = new BeanMarca();

      $bean_marca->setIdmarca($idmarca);

      $data = $marca->deleteById( $bean_marca ) ;

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

      $marca  = new Marca($this->cnx);
      $bean_marca = new BeanMarca();
            
      $bean_marca->setIdmarca($idmarca);
      $bean_marca->setPublicar($publicar);

      $data = $marca->updatePublish($bean_marca) ;
            
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

      $marca  = new Marca($this->cnx);
      $bean_marca = new BeanMarca();
            
      $bean_marca->setPublicar($publicar);

      $data = $marca->getPublished($bean_marca) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
