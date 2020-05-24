<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ProductoImgController
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
      $producto_img  = new ProductoImg();

      $data = $producto_img->getAll();

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

      $producto_img  = new ProductoImg();
            
      $bean_producto_img = new BeanProductoImg();
            
      $bean_producto_img->setPiEstado($estado);

      $data = $producto_img->getByEstado($bean_producto_img);

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

      $producto_img  = new ProductoImg($this->cnx);

      $bean_producto_img = new BeanProductoImg();
            
      $bean_producto_img->setProductoId($producto_id);
      $bean_producto_img->setPiJerarquia($pi_jerarquia);
      $bean_producto_img->setPiImagen($pi_imagen);
      $bean_producto_img->setPiDescripcion($pi_descripcion);
            
      $data = $producto_img->save($bean_producto_img) ;

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

      $producto_img  = new ProductoImg($this->cnx);
      $bean_producto_img = new BeanProductoImg();
            
      $bean_producto_img->setProductoImgId($producto_img_id);
      $bean_producto_img->setProductoId($producto_id);
      $bean_producto_img->setPiJerarquia($pi_jerarquia);
      $bean_producto_img->setPiImagen($pi_imagen);
      $bean_producto_img->setPiDescripcion($pi_descripcion);

      $data = $producto_img->update($bean_producto_img) ;
            
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

      $producto_img  = new ProductoImg($this->cnx);
            
      $bean_producto_img = new BeanProductoImg();
            
      $bean_producto_img->setProductoImgId($producto_img_id);
      $bean_producto_img->setPiEstado($estado);

      $data = $producto_img->updateEstado($bean_producto_img) ;
            
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
      $producto_img  = new ProductoImg();

      $bean_producto_img = new BeanProductoImg();

      $bean_producto_img->setProductoImgId($id);

      $data = $producto_img->find( $bean_producto_img) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($producto_img_id)
  {
    try
    {

      $producto_img  = new ProductoImg();

      $bean_producto_img = new BeanProductoImg();

      $bean_producto_img->setProductoImgId($producto_img_id);

      $data = $producto_img->deleteById( $bean_producto_img ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
