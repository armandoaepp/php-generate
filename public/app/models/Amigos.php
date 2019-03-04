<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Amigos extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM amigos; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_amigos)
  {
    try{
      $estado = $bean_amigos->getEstado() ;

      $this->query = "SELECT * FROM amigos
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_amigos)
  {
    try{
      $bean_amigos->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_amigos->getId();
      $titulo = $bean_amigos->getTitulo();
      $imagen = $bean_amigos->getImagen();
      $imagen_2 = $bean_amigos->getImagen2();
      $email = $bean_amigos->getEmail();
      $item = $bean_amigos->getItem();
      $publicar = $bean_amigos->getPublicar();
      $estado = $bean_amigos->getEstado();
      $created_up = $bean_amigos->getCreatedUp();

      $this->query = "INSERT INTO amigos
                      (
                        titulo,
                        imagen,
                        imagen_2,
                        email,
                        item,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$titulo',
                        '$imagen',
                        '$imagen_2',
                        '$email',
                        '$item',
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
  public function update($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();
      $titulo = $bean_amigos->getTitulo();
      $imagen = $bean_amigos->getImagen();
      $imagen_2 = $bean_amigos->getImagen2();
      $email = $bean_amigos->getEmail();
      $item = $bean_amigos->getItem();
      $publicar = $bean_amigos->getPublicar();

      $this->query = "UPDATE amigos SET 
                        titulo = '$titulo',
                        imagen = '$imagen',
                        imagen_2 = '$imagen_2',
                        email = '$email',
                        item = '$item',
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
  public function updateEstado($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();
      $estado = $bean_amigos->getEstado();

      $this->query = "UPDATE amigos SET 
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
  public function find($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();

      $this->query = "SELECT * FROM amigos WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();

      $this->query = "DELETE FROM amigos
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();
      $publicar = $bean_amigos->getPublicar() ;

      $this->query = "UPDATE amigos SET 
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
  public function getPublished($bean_amigos)
  {
    try{
      $publicar = $bean_amigos->getPublicar() ;

      $this->query = "SELECT * FROM amigos
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
