<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Evento extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM evento";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_evento)
  {
    try{
      $estado = $bean_evento->getEstado() ;

      $this->query = "SELECT * FROM evento
                      WHERE estado = '$estado'; ";


      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_evento)
  {
    try{
      $bean_evento->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_evento->getId();
      $titulo = $bean_evento->getTitulo();
      $descripcion = $bean_evento->getDescripcion();
      $imagen = $bean_evento->getImagen();
      $url = $bean_evento->getUrlSeo();
      $item = $bean_evento->getItem();
      $publicar = $bean_evento->getPublicar();
      $estado = $bean_evento->getEstado();
      $created_up = $bean_evento->getCreatedUp();

      $this->query = "INSERT INTO evento
                      (
                        titulo,
                        descripcion,
                        imagen,
                        url,
                        item,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
                        '$imagen',
                        '$url',
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
  public function update($bean_evento)
  {
    try{
      $id = $bean_evento->getId();
      $titulo = $bean_evento->getTitulo();
      $descripcion = $bean_evento->getDescripcion();
      $imagen = $bean_evento->getImagen();
      $url = $bean_evento->getUrlSeo();
      $item = $bean_evento->getItem();
      $publicar = $bean_evento->getPublicar();

      $this->query = "UPDATE evento SET
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        url = '$url',
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
  public function updateEstado($bean_evento)
  {
    try{
      $id = $bean_evento->getId();
      $estado = $bean_evento->getEstado();

      $this->query = "UPDATE evento SET
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
  public function find($bean_evento)
  {
    try{
      $id = $bean_evento->getId();

      $this->query = "SELECT * FROM evento WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_evento)
  {
    try{
      $id = $bean_evento->getId();

      $this->query = "DELETE FROM evento
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_evento)
  {
    try{
      $id = $bean_evento->getId();
      $publicar = $bean_evento->getPublicar() ;

      $this->query = "UPDATE evento SET
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
  public function getPublished($bean_evento)
  {
    try{
      $publicar = $bean_evento->getPublicar() ;

      $this->query = "SELECT * FROM evento
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
