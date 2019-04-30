<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Pais extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM pais; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_pais)
  {
    try{

      $pais_id = $bean_pais->getPaisId();
      $nombre = $bean_pais->getNombre();
      $estado = $bean_pais->getEstado();

      $this->query = "INSERT INTO pais
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
  public function update($bean_pais)
  {
    try{
      $pais_id = $bean_pais->getPaisId();
      $nombre = $bean_pais->getNombre();

      $this->query = "UPDATE pais SET 
                        nombre = '$nombre'
                      WHERE pais_id = '$pais_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_pais)
  {
    try{
      $pais_id = $bean_pais->getPaisId();

      $this->query = "SELECT * FROM pais WHERE pais_id = '$pais_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_pais)
  {
    try{
      $pais_id = $bean_pais->getPaisId();

      $this->query = "DELETE FROM pais
                      WHERE pais_id = '$pais_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_pais)
  {
    try{
      $estado = $bean_pais->getEstado() ;

      $this->query = "SELECT * FROM pais
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_pais)
  {
    try{
      $pais_id = $bean_pais->getPaisId();
      $estado = $bean_pais->getEstado();

      $this->query = "UPDATE pais SET 
                        estado = '$estado'
                      WHERE pais_id='$pais_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
