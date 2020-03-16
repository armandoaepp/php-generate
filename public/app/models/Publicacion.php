<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Publicacion extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT
                        publicacion.* ,
                        tipo_publicacion.descripcion AS desc_tipo_publicacion
                      FROM publicacion
                      INNER JOIN tipo_publicacion ON tipo_publicacion.tipo_publicacion_id = publicacion.tipo_publicacion_id ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_publicacion)
  {
    try{

      $publicacion_id = $bean_publicacion->getPublicacionId();
      $tipo_publicacion_id = $bean_publicacion->getTipoPublicacionId();
      $titulo = $bean_publicacion->getTitulo();
      $descripcion = $bean_publicacion->getDescripcion();
      $url_file = $bean_publicacion->getUrlFile();
      $publicar = $bean_publicacion->getPublicar();
      $estado = $bean_publicacion->getEstado();
      $created_at = $bean_publicacion->getCreatedAt();

      $this->query = "INSERT INTO publicacion
                      (
                        tipo_publicacion_id,
                        titulo,
                        descripcion,
                        url_file,
                        publicar,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$tipo_publicacion_id',
                        '$titulo',
                        '$descripcion',
                        '$url_file',
                        '$publicar',
                        '$estado',
                        $created_at
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_publicacion)
  {
    try{
      $publicacion_id = $bean_publicacion->getPublicacionId();
      $tipo_publicacion_id = $bean_publicacion->getTipoPublicacionId();
      $titulo = $bean_publicacion->getTitulo();
      $descripcion = $bean_publicacion->getDescripcion();
      $url_file = $bean_publicacion->getUrlFile();
      $publicar = $bean_publicacion->getPublicar();

      $this->query = "UPDATE publicacion SET
                        tipo_publicacion_id = '$tipo_publicacion_id',
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        url_file = '$url_file',
                        publicar = '$publicar'
                      WHERE publicacion_id = '$publicacion_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_publicacion)
  {
    try{
      $publicacion_id = $bean_publicacion->getPublicacionId();

      $this->query = "SELECT * FROM publicacion WHERE publicacion_id = '$publicacion_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_publicacion)
  {
    try{
      $publicacion_id = $bean_publicacion->getPublicacionId();

      $this->query = "DELETE FROM publicacion
                      WHERE publicacion_id = '$publicacion_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_publicacion)
  {
    try{
      $estado = $bean_publicacion->getEstado() ;

      $this->query = "SELECT * FROM publicacion
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_publicacion)
  {
    try{
      $publicacion_id = $bean_publicacion->getPublicacionId();
      $estado = $bean_publicacion->getEstado();

      $this->query = "UPDATE publicacion SET
                        estado = '$estado'
                      WHERE publicacion_id='$publicacion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_publicacion)
  {
    try{
      $publicacion_id = $bean_publicacion->getPublicacionId();
      $publicar = $bean_publicacion->getPublicar() ;

      $this->query = "UPDATE publicacion SET
                        publicar = '$publicar'
                      WHERE publicacion_id = '$publicacion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_publicacion)
  {
    try{
      $publicar = $bean_publicacion->getPublicar() ;

      $this->query = "SELECT * FROM publicacion
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
