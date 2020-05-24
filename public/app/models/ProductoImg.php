<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class ProductoImg extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM producto_img; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_producto_img)
  {
    try{

      $producto_img_id = $bean_producto_img->getProductoImgId();
      $producto_id = $bean_producto_img->getProductoId();
      $pi_jerarquia = $bean_producto_img->getPiJerarquia();
      $pi_imagen = $bean_producto_img->getPiImagen();
      $pi_descripcion = $bean_producto_img->getPiDescripcion();
      $pi_estado = $bean_producto_img->getPiEstado();

      $this->query = "INSERT INTO producto_img
                      (
                        producto_id,
                        pi_jerarquia,
                        pi_imagen,
                        pi_descripcion,
                        pi_estado
                      )
                      VALUES(
                        '$producto_id',
                        '$pi_jerarquia',
                        '$pi_imagen',
                        '$pi_descripcion',
                        '$pi_estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_producto_img)
  {
    try{
      $producto_img_id = $bean_producto_img->getProductoImgId();
      $producto_id = $bean_producto_img->getProductoId();
      $pi_jerarquia = $bean_producto_img->getPiJerarquia();
      $pi_imagen = $bean_producto_img->getPiImagen();
      $pi_descripcion = $bean_producto_img->getPiDescripcion();

      $this->query = "UPDATE producto_img SET 
                        producto_id = '$producto_id',
                        pi_jerarquia = '$pi_jerarquia',
                        pi_imagen = '$pi_imagen',
                        pi_descripcion = '$pi_descripcion'
                      WHERE producto_img_id = '$producto_img_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_producto_img)
  {
    try{
      $producto_img_id = $bean_producto_img->getProductoImgId();

      $this->query = "SELECT * FROM producto_img WHERE producto_img_id = '$producto_img_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_producto_img)
  {
    try{
      $producto_img_id = $bean_producto_img->getProductoImgId();

      $this->query = "DELETE FROM producto_img
                      WHERE producto_img_id = '$producto_img_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_producto_img)
  {
    try{
      $estado = $bean_producto_img->getPiEstado() ;

      $this->query = "SELECT * FROM producto_img
                      WHERE pi_estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_producto_img)
  {
    try{
      $producto_img_id = $bean_producto_img->getProductoImgId();
      $estado = $bean_producto_img->getPiEstado();

      $this->query = "UPDATE producto_img SET 
                        pi_estado = '$estado'
                      WHERE producto_img_id='$producto_img_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
