<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Region extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM region; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_region)
  {
    try{

      $region_id = $bean_region->getRegionId();
      $nombre = $bean_region->getNombre();
      $estado = $bean_region->getEstado();

      $this->query = "INSERT INTO region
                      (
                        nombre,
                        estado
                      )
                      VALUES(
                        '$nombre',
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
  public function update($bean_region)
  {
    try{
      $region_id = $bean_region->getRegionId();
      $nombre = $bean_region->getNombre();

      $this->query = "UPDATE region SET 
                        nombre = '$nombre'
                      WHERE region_id = '$region_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_region)
  {
    try{
      $region_id = $bean_region->getRegionId();

      $this->query = "SELECT * FROM region WHERE region_id = '$region_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_region)
  {
    try{
      $region_id = $bean_region->getRegionId();

      $this->query = "DELETE FROM region
                      WHERE region_id = '$region_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_region)
  {
    try{
      $estado = $bean_region->getEstado() ;

      $this->query = "SELECT * FROM region
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_region)
  {
    try{
      $region_id = $bean_region->getRegionId();
      $estado = $bean_region->getEstado();

      $this->query = "UPDATE region SET 
                        estado = '$estado'
                      WHERE region_id='$region_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
