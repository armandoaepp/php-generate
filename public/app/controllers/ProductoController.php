<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ProductoController
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
      $producto  = new Producto();

      $data = $producto->getAll();

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

      $producto  = new Producto();
            
      $bean_producto = new BeanProducto();
            
      $bean_producto->setEstado($estado);

      $data = $producto->getByEstado($bean_producto);

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

      $producto  = new Producto($this->cnx);

      $bean_producto = new BeanProducto();
            
      $bean_producto->setSubCategoriaId($sub_categoria_id);
      $bean_producto->setCategoriaId($categoria_id);
      $bean_producto->setCodigo($codigo);
      $bean_producto->setNombre($nombre);
      $bean_producto->setDescripcionCorta($descripcion_corta);
      $bean_producto->setPrecio($precio);
      $bean_producto->setDescuento($descuento);
      $bean_producto->setPrecioDescuento($precio_descuento);
      $bean_producto->setNumVisitas($num_visitas);
      $bean_producto->setPublicar($publicar);
            
      $data = $producto->save($bean_producto) ;

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

      $producto  = new Producto($this->cnx);
      $bean_producto = new BeanProducto();
            
      $bean_producto->setProductoId($producto_id);
      $bean_producto->setSubCategoriaId($sub_categoria_id);
      $bean_producto->setCategoriaId($categoria_id);
      $bean_producto->setCodigo($codigo);
      $bean_producto->setNombre($nombre);
      $bean_producto->setDescripcionCorta($descripcion_corta);
      $bean_producto->setPrecio($precio);
      $bean_producto->setDescuento($descuento);
      $bean_producto->setPrecioDescuento($precio_descuento);
      $bean_producto->setNumVisitas($num_visitas);
      $bean_producto->setPublicar($publicar);

      $data = $producto->update($bean_producto) ;
            
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

      $producto  = new Producto($this->cnx);
            
      $bean_producto = new BeanProducto();
            
      $bean_producto->setProductoId($producto_id);
      $bean_producto->setEstado($estado);

      $data = $producto->updateEstado($bean_producto) ;
            
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
      $producto  = new Producto();

      $bean_producto = new BeanProducto();

      $bean_producto->setProductoId($id);

      $data = $producto->find( $bean_producto) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($producto_id)
  {
    try
    {

      $producto  = new Producto();

      $bean_producto = new BeanProducto();

      $bean_producto->setProductoId($producto_id);

      $data = $producto->deleteById( $bean_producto ) ;

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

      $producto  = new Producto($this->cnx);
      $bean_producto = new BeanProducto();
            
      $bean_producto->setProductoId($producto_id);
      $bean_producto->setPublicar($publicar);

      $data = $producto->updatePublish($bean_producto) ;
            
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

      $producto  = new Producto($this->cnx);
      $bean_producto = new BeanProducto();
            
      $bean_producto->setPublicar($publicar);

      $data = $producto->getPublished($bean_producto) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
