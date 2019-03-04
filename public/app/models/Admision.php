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


  # Method getByEstado
  public function getByEstado($bean_admision)
  {
    try{
      $estado = $bean_admision->getEstado() ;

      $this->query = "SELECT * FROM admision
                      WHERE estado = '$estado'; ";

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
      $bean_admision->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_admision->getId();
      $titulo = $bean_admision->getTitulo();
      $imagen = $bean_admision->getImagen();
      $requisitos = $bean_admision->getRequisitos();
      $horarios = $bean_admision->getHorarios();
      $inversion = $bean_admision->getInversion();
      $email = $bean_admision->getEmail();
      $publicar = $bean_admision->getPublicar();
      $estado = $bean_admision->getEstado();
      $created_up = $bean_admision->getCreatedUp();

      $this->query = "INSERT INTO admision
                      (
                        titulo,
                        imagen,
                        requisitos,
                        horarios,
                        inversion,
                        email,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$titulo',
                        '$imagen',
                        '$requisitos',
                        '$horarios',
                        '$inversion',
                        '$email',
                        '$publicar',
                        '$estado',
                        $created_up
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
      $publicar = $bean_admision->getPublicar();

      $this->query = "UPDATE admision SET 
                        titulo = '$titulo',
                        imagen = '$imagen',
                        requisitos = '$requisitos',
                        horarios = '$horarios',
                        inversion = '$inversion',
                        email = '$email',
                        publicar = '$publicar'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_admision)
  {
    try{
      $id = $bean_admision->getId();
      $estado = $bean_admision->getEstado();

      $this->query = "UPDATE admision SET 
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


  # Method updatePublish
  public function updatePublish($bean_admision)
  {
    try{
      $id = $bean_admision->getId();
      $publicar = $bean_admision->getPublicar() ;

      $this->query = "UPDATE admision SET 
                        publicar = '$publicar'
                      WHERE id = '$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_admision)
  {
    try{
      $publicar = $bean_admision->getPublicar() ;

      $this->query = "SELECT * FROM admision
                      WHERE publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
