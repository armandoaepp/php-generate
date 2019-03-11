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

      $id = $bean_pais->getId();
      $nombre = $bean_pais->getNombre();
      $tld = $bean_pais->getTld();
      $code = $bean_pais->getCode();
      $code_int = $bean_pais->getCodeInt();
      $estado = $bean_pais->getEstado();

      $this->query = "INSERT INTO pais
                      (
                        nombre,
                        tld,
                        code,
                        code_int,
                        estado
                      )
                      VALUES(
                        '$nombre',
                        '$tld',
                        '$code',
                        '$code_int',
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
      $id = $bean_pais->getId();
      $nombre = $bean_pais->getNombre();
      $tld = $bean_pais->getTld();
      $code = $bean_pais->getCode();
      $code_int = $bean_pais->getCodeInt();

      $this->query = "UPDATE pais SET 
                        nombre = '$nombre',
                        tld = '$tld',
                        code = '$code',
                        code_int = '$code_int'
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
  public function find($bean_pais)
  {
    try{
      $id = $bean_pais->getId();

      $this->query = "SELECT * FROM pais WHERE id = '$id' LIMIT 1; ";

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
      $id = $bean_pais->getId();

      $this->query = "DELETE FROM pais
                      WHERE id = '$id' LIMIT 1; ";

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
      $id = $bean_pais->getId();
      $estado = $bean_pais->getEstado();

      $this->query = "UPDATE pais SET 
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
