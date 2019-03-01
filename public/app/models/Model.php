<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Model extends Connection {

  public $table  ;

  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function all()
  {
    try{

      $this->query = "SELECT * FROM ".$table;

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }






  # Método Buscar por ID
  public function find($id)
  {
    try{


      $this->query = "SELECT * FROM $this->table WHERE id = :id LIMIT 1; ";

      // $stmt->bindValue(':nombre', $nombre); // Se enlaza al valor Morgan

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_buzon)
  {
    try{
      $id = $bean_buzon->getId();

      $this->query = "DELETE FROM buzon
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
