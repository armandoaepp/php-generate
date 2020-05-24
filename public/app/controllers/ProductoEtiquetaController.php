<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ProductoEtiquetaController
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
      $producto_etiqueta  = new ProductoEtiqueta();

      $data = $producto_etiqueta->getAll();

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

      $producto_etiqueta  = new ProductoEtiqueta();
            
      $bean_producto_etiqueta = new BeanProductoEtiqueta();
            
      $bean_producto_etiqueta->setPeEstado($estado);

      $data = $producto_etiqueta->getByEstado($bean_producto_etiqueta);

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

      $producto_etiqueta  = new ProductoEtiqueta($this->cnx);

      $bean_producto_etiqueta = new BeanProductoEtiqueta();
            
      $bean_producto_etiqueta->setProductoId($producto_id);
      $bean_producto_etiqueta->setEtiquetaId($etiqueta_id);
            
      $data = $producto_etiqueta->save($bean_producto_etiqueta) ;

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

      $producto_etiqueta  = new ProductoEtiqueta($this->cnx);
      $bean_producto_etiqueta = new BeanProductoEtiqueta();
            
      $bean_producto_etiqueta->setProductoEtiquetaId($producto_etiqueta_id);
      $bean_producto_etiqueta->setProductoId($producto_id);
      $bean_producto_etiqueta->setEtiquetaId($etiqueta_id);

      $data = $producto_etiqueta->update($bean_producto_etiqueta) ;
            
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

      $producto_etiqueta  = new ProductoEtiqueta($this->cnx);
            
      $bean_producto_etiqueta = new BeanProductoEtiqueta();
            
      $bean_producto_etiqueta->setProductoEtiquetaId($producto_etiqueta_id);
      $bean_producto_etiqueta->setPeEstado($estado);

      $data = $producto_etiqueta->updateEstado($bean_producto_etiqueta) ;
            
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
      $producto_etiqueta  = new ProductoEtiqueta();

      $bean_producto_etiqueta = new BeanProductoEtiqueta();

      $bean_producto_etiqueta->setProductoEtiquetaId($id);

      $data = $producto_etiqueta->find( $bean_producto_etiqueta) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($producto_etiqueta_id)
  {
    try
    {

      $producto_etiqueta  = new ProductoEtiqueta();

      $bean_producto_etiqueta = new BeanProductoEtiqueta();

      $bean_producto_etiqueta->setProductoEtiquetaId($producto_etiqueta_id);

      $data = $producto_etiqueta->deleteById( $bean_producto_etiqueta ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
