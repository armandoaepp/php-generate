<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Noticia extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM noticia; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_noticia)
  {
    try{
      $estado = $bean_noticia->getEstado() ;

      $this->query = "SELECT * FROM noticia
                      WHERE estado = '$estado'; ";


      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_noticia)
  {
    try{
      $bean_noticia->setCreatedUp( HelperDate::timestampsBd() );

      $id          = $bean_noticia->getId();
      $titulo      = $bean_noticia->getTitulo();
      $descripcion = $bean_noticia->getDescripcion();
      $url         = $bean_noticia->getUrlSeo();
      $glosa       = $bean_noticia->getGlosa();
      $publicar    = $bean_noticia->getPublicar();
      $estado      = $bean_noticia->getEstado();
      $created_up  = $bean_noticia->getCreatedUp();

      $this->query = "INSERT INTO noticia
                      (
                        titulo,
                        descripcion,
                        url,
                        glosa,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
                        '$url',
                        '$glosa',
                        '$publicar',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      // $data = $this->status  ;
      $data = $this->lastInsertId() ;


      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();
      $titulo = $bean_noticia->getTitulo();
      $descripcion = $bean_noticia->getDescripcion();
      $url = $bean_noticia->getUrlSeo();
      $glosa = $bean_noticia->getGlosa();
      $publicar = $bean_noticia->getPublicar();

      $this->query = "UPDATE noticia SET
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        url = '$url',
                        glosa = '$glosa',
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
  public function updateEstado($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();
      $estado = $bean_noticia->getEstado();

      $this->query = "UPDATE noticia SET
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
  public function find($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();

      $this->query = "SELECT * FROM noticia WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();

      $this->query = "DELETE FROM noticia
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_noticia)
  {
    try{
      $id = $bean_noticia->getId();
      $publicar = $bean_noticia->getPublicar() ;

      $this->query = "UPDATE noticia SET
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
  public function getPublished($bean_noticia)
  {
    try{
      $publicar = $bean_noticia->getPublicar() ;

      $this->query = "SELECT * FROM noticia
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
