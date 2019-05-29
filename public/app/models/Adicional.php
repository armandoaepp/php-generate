<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Adicional extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM adicional; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_adicional)
  {
    try{

      $adicional_id = $bean_adicional->getAdicionalId();
      $descripcion = $bean_adicional->getDescripcion();
      $precio = $bean_adicional->getPrecio();
      $estado = $bean_adicional->getEstado();

      $this->query = "INSERT INTO adicional
                      (
                        descripcion,
                        precio,
                        estado
                      )
                      VALUES(
                        '$descripcion',
                        '$precio',
                        '$estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_adicional)
  {
    try{
      $adicional_id = $bean_adicional->getAdicionalId();
      $descripcion = $bean_adicional->getDescripcion();
      $precio = $bean_adicional->getPrecio();

      $this->query = "UPDATE adicional SET 
                        descripcion = '$descripcion',
                        precio = '$precio'
                      WHERE adicional_id = '$adicional_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_adicional)
  {
    try{
      $adicional_id = $bean_adicional->getAdicionalId();

      $this->query = "SELECT * FROM adicional WHERE adicional_id = '$adicional_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_adicional)
  {
    try{
      $adicional_id = $bean_adicional->getAdicionalId();

      $this->query = "DELETE FROM adicional
                      WHERE adicional_id = '$adicional_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_adicional)
  {
    try{
      $estado = $bean_adicional->getEstado() ;

      $this->query = "SELECT * FROM adicional
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_adicional)
  {
    try{
      $adicional_id = $bean_adicional->getAdicionalId();
      $estado = $bean_adicional->getEstado();

      $this->query = "UPDATE adicional SET 
                        estado = '$estado'
                      WHERE adicional_id='$adicional_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
