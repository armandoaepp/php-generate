<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Servicio extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM servicio; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_servicio)
  {
    try{

      $id = $bean_servicio->getId();
      $descripcion = $bean_servicio->getDescripcion();
      $icono = $bean_servicio->getIcono();
      $incluye = $bean_servicio->getIncluye();
      $estado = $bean_servicio->getEstado();

      $this->query = "INSERT INTO servicio
                      (
                        descripcion,
                        icono,
                        incluye,
                        estado
                      )
                      VALUES(
                        '$descripcion',
                        '$icono',
                        '$incluye',
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
  public function update($bean_servicio)
  {
    try{
      $id = $bean_servicio->getId();
      $descripcion = $bean_servicio->getDescripcion();
      $icono = $bean_servicio->getIcono();
      $incluye = $bean_servicio->getIncluye();

      $this->query = "UPDATE servicio SET 
                        descripcion = '$descripcion',
                        icono = '$icono',
                        incluye = '$incluye'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_servicio)
  {
    try{
      $id = $bean_servicio->getId();

      $this->query = "SELECT * FROM servicio WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_servicio)
  {
    try{
      $id = $bean_servicio->getId();

      $this->query = "DELETE FROM servicio
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_servicio)
  {
    try{
      $estado = $bean_servicio->getEstado() ;

      $this->query = "SELECT * FROM servicio
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_servicio)
  {
    try{
      $id = $bean_servicio->getId();
      $estado = $bean_servicio->getEstado();

      $this->query = "UPDATE servicio SET 
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
