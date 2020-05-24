<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class ProductoEtiqueta extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM producto_etiqueta; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_producto_etiqueta)
  {
    try{

      $producto_etiqueta_id = $bean_producto_etiqueta->getProductoEtiquetaId();
      $producto_id = $bean_producto_etiqueta->getProductoId();
      $etiqueta_id = $bean_producto_etiqueta->getEtiquetaId();
      $pe_estado = $bean_producto_etiqueta->getPeEstado();

      $this->query = "INSERT INTO producto_etiqueta
                      (
                        producto_id,
                        etiqueta_id,
                        pe_estado
                      )
                      VALUES(
                        '$producto_id',
                        '$etiqueta_id',
                        '$pe_estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_producto_etiqueta)
  {
    try{
      $producto_etiqueta_id = $bean_producto_etiqueta->getProductoEtiquetaId();
      $producto_id = $bean_producto_etiqueta->getProductoId();
      $etiqueta_id = $bean_producto_etiqueta->getEtiquetaId();

      $this->query = "UPDATE producto_etiqueta SET 
                        producto_id = '$producto_id',
                        etiqueta_id = '$etiqueta_id'
                      WHERE producto_etiqueta_id = '$producto_etiqueta_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_producto_etiqueta)
  {
    try{
      $producto_etiqueta_id = $bean_producto_etiqueta->getProductoEtiquetaId();

      $this->query = "SELECT * FROM producto_etiqueta WHERE producto_etiqueta_id = '$producto_etiqueta_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_producto_etiqueta)
  {
    try{
      $producto_etiqueta_id = $bean_producto_etiqueta->getProductoEtiquetaId();

      $this->query = "DELETE FROM producto_etiqueta
                      WHERE producto_etiqueta_id = '$producto_etiqueta_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_producto_etiqueta)
  {
    try{
      $estado = $bean_producto_etiqueta->getPeEstado() ;

      $this->query = "SELECT * FROM producto_etiqueta
                      WHERE pe_estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_producto_etiqueta)
  {
    try{
      $producto_etiqueta_id = $bean_producto_etiqueta->getProductoEtiquetaId();
      $estado = $bean_producto_etiqueta->getPeEstado();

      $this->query = "UPDATE producto_etiqueta SET 
                        pe_estado = '$estado'
                      WHERE producto_etiqueta_id='$producto_etiqueta_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
