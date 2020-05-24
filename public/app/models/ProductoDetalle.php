<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class ProductoDetalle extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM producto_detalle; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_producto_detalle)
  {
    try{

      $producto_detalle_id = $bean_producto_detalle->getProductoDetalleId();
      $producto_id = $bean_producto_detalle->getProductoId();
      $pd_descripcion = $bean_producto_detalle->getPdDescripcion();
      $pd_caracteristica = $bean_producto_detalle->getPdCaracteristica();
      $pd_estado = $bean_producto_detalle->getPdEstado();

      $this->query = "INSERT INTO producto_detalle
                      (
                        producto_id,
                        pd_descripcion,
                        pd_caracteristica,
                        pd_estado
                      )
                      VALUES(
                        '$producto_id',
                        '$pd_descripcion',
                        '$pd_caracteristica',
                        '$pd_estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_producto_detalle)
  {
    try{
      $producto_detalle_id = $bean_producto_detalle->getProductoDetalleId();
      $producto_id = $bean_producto_detalle->getProductoId();
      $pd_descripcion = $bean_producto_detalle->getPdDescripcion();
      $pd_caracteristica = $bean_producto_detalle->getPdCaracteristica();

      $this->query = "UPDATE producto_detalle SET 
                        producto_id = '$producto_id',
                        pd_descripcion = '$pd_descripcion',
                        pd_caracteristica = '$pd_caracteristica'
                      WHERE producto_detalle_id = '$producto_detalle_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_producto_detalle)
  {
    try{
      $producto_detalle_id = $bean_producto_detalle->getProductoDetalleId();

      $this->query = "SELECT * FROM producto_detalle WHERE producto_detalle_id = '$producto_detalle_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_producto_detalle)
  {
    try{
      $producto_detalle_id = $bean_producto_detalle->getProductoDetalleId();

      $this->query = "DELETE FROM producto_detalle
                      WHERE producto_detalle_id = '$producto_detalle_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_producto_detalle)
  {
    try{
      $estado = $bean_producto_detalle->getPdEstado() ;

      $this->query = "SELECT * FROM producto_detalle
                      WHERE pd_estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_producto_detalle)
  {
    try{
      $producto_detalle_id = $bean_producto_detalle->getProductoDetalleId();
      $estado = $bean_producto_detalle->getPdEstado();

      $this->query = "UPDATE producto_detalle SET 
                        pd_estado = '$estado'
                      WHERE producto_detalle_id='$producto_detalle_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
