<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Admision extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM admision; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_admision)
  {
    try{
      $id = $bean_admision->getId();
      $titulo = $bean_admision->getTitulo();
      $imagen = $bean_admision->getImagen();
      $requisitos = $bean_admision->getRequisitos();
      $horarios = $bean_admision->getHorarios();
      $inversion = $bean_admision->getInversion();
      $email = $bean_admision->getEmail();

      $this->query = "INSERT INTO admision
                      (
                        titulo,
                        imagen,
                        requisitos,
                        horarios,
                        inversion,
                        email
                      )
                      VALUES(
                        '$titulo',
                        '$imagen',
                        '$requisitos',
                        '$horarios',
                        '$inversion',
                        '$email'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_admision)
  {
    try{
      $id = $bean_admision->getId();
      $titulo = $bean_admision->getTitulo();
      $imagen = $bean_admision->getImagen();
      $requisitos = $bean_admision->getRequisitos();
      $horarios = $bean_admision->getHorarios();
      $inversion = $bean_admision->getInversion();
      $email = $bean_admision->getEmail();

      $this->query = "UPDATE admision SET 
                        titulo = '$titulo',
                        imagen = '$imagen',
                        requisitos = '$requisitos',
                        horarios = '$horarios',
                        inversion = '$inversion',
                        email = '$email'
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
  public function find($bean_admision)
  {
    try{
      $id = $bean_admision->getId();

      $this->query = "SELECT * FROM admision WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_admision)
  {
    try{
      $id = $bean_admision->getId();

      $this->query = "DELETE FROM admision
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
