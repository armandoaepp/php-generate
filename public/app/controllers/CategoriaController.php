<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class CategoriaController
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
      $categoria  = new Categoria();

      $data = $categoria->getAll();

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

      $categoria  = new Categoria();

      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCatEstado($estado);

      $data = $categoria->getByEstado($bean_categoria);

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

      $categoria  = new Categoria($this->cnx);

      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCatNombre($cat_nombre);
      $bean_categoria->setCatImagen($cat_imagen);
      $bean_categoria->setCatPublicar($cat_publicar);

      $data = $categoria->save($bean_categoria) ;

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

      $categoria  = new Categoria($this->cnx);
      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCategoriaId($categoria_id);
      $bean_categoria->setCatNombre($cat_nombre);
      $bean_categoria->setCatImagen($cat_imagen);
      $bean_categoria->setCatPublicar($cat_publicar);

      $data = $categoria->update($bean_categoria) ;

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

      $categoria  = new Categoria($this->cnx);

      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCategoriaId($categoria_id);
      $bean_categoria->setCatEstado($estado);

      $data = $categoria->updateEstado($bean_categoria) ;

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
      $categoria  = new Categoria();

      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCategoriaId($id);

      $data = $categoria->find( $bean_categoria) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($categoria_id)
  {
    try
    {

      $categoria  = new Categoria();

      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCategoriaId($categoria_id);

      $data = $categoria->deleteById( $bean_categoria ) ;

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

      $categoria  = new Categoria($this->cnx);
      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCategoriaId($categoria_id);
      $bean_categoria->setCatPublicar($publicar);

      $data = $categoria->updatePublish($bean_categoria) ;

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

      $categoria  = new Categoria($this->cnx);
      $bean_categoria = new BeanCategoria();

      $bean_categoria->setCatPublicar($publicar);

      $data = $categoria->getPublished($bean_categoria) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
