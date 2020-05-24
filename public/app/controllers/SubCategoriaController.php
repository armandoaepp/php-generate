<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class SubCategoriaController
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
      $sub_categoria  = new SubCategoria();

      $data = $sub_categoria->getAll();

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

      $sub_categoria  = new SubCategoria();
            
      $bean_sub_categoria = new BeanSubCategoria();
            
      $bean_sub_categoria->setScEstado($estado);

      $data = $sub_categoria->getByEstado($bean_sub_categoria);

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

      $sub_categoria  = new SubCategoria($this->cnx);

      $bean_sub_categoria = new BeanSubCategoria();
            
      $bean_sub_categoria->setCategoriaId($categoria_id);
      $bean_sub_categoria->setScNombre($sc_nombre);
      $bean_sub_categoria->setScImagen($sc_imagen);
      $bean_sub_categoria->setScPublicar($sc_publicar);
            
      $data = $sub_categoria->save($bean_sub_categoria) ;

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

      $sub_categoria  = new SubCategoria($this->cnx);
      $bean_sub_categoria = new BeanSubCategoria();
            
      $bean_sub_categoria->setSubCategoriaId($sub_categoria_id);
      $bean_sub_categoria->setCategoriaId($categoria_id);
      $bean_sub_categoria->setScNombre($sc_nombre);
      $bean_sub_categoria->setScImagen($sc_imagen);
      $bean_sub_categoria->setScPublicar($sc_publicar);

      $data = $sub_categoria->update($bean_sub_categoria) ;
            
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

      $sub_categoria  = new SubCategoria($this->cnx);
            
      $bean_sub_categoria = new BeanSubCategoria();
            
      $bean_sub_categoria->setSubCategoriaId($sub_categoria_id);
      $bean_sub_categoria->setScEstado($estado);

      $data = $sub_categoria->updateEstado($bean_sub_categoria) ;
            
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
      $sub_categoria  = new SubCategoria();

      $bean_sub_categoria = new BeanSubCategoria();

      $bean_sub_categoria->setSubCategoriaId($id);

      $data = $sub_categoria->find( $bean_sub_categoria) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($sub_categoria_id)
  {
    try
    {

      $sub_categoria  = new SubCategoria();

      $bean_sub_categoria = new BeanSubCategoria();

      $bean_sub_categoria->setSubCategoriaId($sub_categoria_id);

      $data = $sub_categoria->deleteById( $bean_sub_categoria ) ;

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

      $sub_categoria  = new SubCategoria($this->cnx);
      $bean_sub_categoria = new BeanSubCategoria();
            
      $bean_sub_categoria->setSubCategoriaId($sub_categoria_id);
      $bean_sub_categoria->setScPublicar($publicar);

      $data = $sub_categoria->updatePublish($bean_sub_categoria) ;
            
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

      $sub_categoria  = new SubCategoria($this->cnx);
      $bean_sub_categoria = new BeanSubCategoria();
            
      $bean_sub_categoria->setScPublicar($publicar);

      $data = $sub_categoria->getPublished($bean_sub_categoria) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
