<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ProductoDetalleController
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
      $producto_detalle  = new ProductoDetalle();

      $data = $producto_detalle->getAll();

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

      $producto_detalle  = new ProductoDetalle();
            
      $bean_producto_detalle = new BeanProductoDetalle();
            
      $bean_producto_detalle->setPdEstado($estado);

      $data = $producto_detalle->getByEstado($bean_producto_detalle);

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

      $producto_detalle  = new ProductoDetalle($this->cnx);

      $bean_producto_detalle = new BeanProductoDetalle();
            
      $bean_producto_detalle->setProductoId($producto_id);
      $bean_producto_detalle->setPdDescripcion($pd_descripcion);
      $bean_producto_detalle->setPdCaracteristica($pd_caracteristica);
            
      $data = $producto_detalle->save($bean_producto_detalle) ;

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

      $producto_detalle  = new ProductoDetalle($this->cnx);
      $bean_producto_detalle = new BeanProductoDetalle();
            
      $bean_producto_detalle->setProductoDetalleId($producto_detalle_id);
      $bean_producto_detalle->setProductoId($producto_id);
      $bean_producto_detalle->setPdDescripcion($pd_descripcion);
      $bean_producto_detalle->setPdCaracteristica($pd_caracteristica);

      $data = $producto_detalle->update($bean_producto_detalle) ;
            
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

      $producto_detalle  = new ProductoDetalle($this->cnx);
            
      $bean_producto_detalle = new BeanProductoDetalle();
            
      $bean_producto_detalle->setProductoDetalleId($producto_detalle_id);
      $bean_producto_detalle->setPdEstado($estado);

      $data = $producto_detalle->updateEstado($bean_producto_detalle) ;
            
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
      $producto_detalle  = new ProductoDetalle();

      $bean_producto_detalle = new BeanProductoDetalle();

      $bean_producto_detalle->setProductoDetalleId($id);

      $data = $producto_detalle->find( $bean_producto_detalle) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($producto_detalle_id)
  {
    try
    {

      $producto_detalle  = new ProductoDetalle();

      $bean_producto_detalle = new BeanProductoDetalle();

      $bean_producto_detalle->setProductoDetalleId($producto_detalle_id);

      $data = $producto_detalle->deleteById( $bean_producto_detalle ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
