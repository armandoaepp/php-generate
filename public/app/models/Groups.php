<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Groups extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM groups; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_groups)
  {
    try{
      $id = $bean_groups->getId();
      $name = $bean_groups->getName();
      $description = $bean_groups->getDescription();

      $this->query = "INSERT INTO groups
                      (
                        name,
                        description
                      )
                      VALUES(
                        '$name',
                        '$description'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_groups)
  {
    try{
      $id = $bean_groups->getId();
      $name = $bean_groups->getName();
      $description = $bean_groups->getDescription();

      $this->query = "UPDATE groups SET 
                        name = '$name',
                        description = '$description'
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
  public function find($bean_groups)
  {
    try{
      $id = $bean_groups->getId();

      $this->query = "SELECT * FROM groups WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_groups)
  {
    try{
      $id = $bean_groups->getId();

      $this->query = "DELETE FROM groups
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
