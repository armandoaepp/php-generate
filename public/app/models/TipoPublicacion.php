<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TipoPublicacion extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM tipo_publicacion; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_tipo_publicacion)
  {
    try{

      $tipo_publicacion_id = $bean_tipo_publicacion->getTipoPublicacionId();
      $descripcion = $bean_tipo_publicacion->getDescripcion();
      $publicar = $bean_tipo_publicacion->getPublicar();
      $estado = $bean_tipo_publicacion->getEstado();

      $this->query = "INSERT INTO tipo_publicacion
                      (
                        descripcion,
                        publicar,
                        estado
                      )
                      VALUES(
                        '$descripcion',
                        '$publicar',
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
  public function update($bean_tipo_publicacion)
  {
    try{
      $tipo_publicacion_id = $bean_tipo_publicacion->getTipoPublicacionId();
      $descripcion = $bean_tipo_publicacion->getDescripcion();
      $publicar = $bean_tipo_publicacion->getPublicar();

      $this->query = "UPDATE tipo_publicacion SET 
                        descripcion = '$descripcion',
                        publicar = '$publicar'
                      WHERE tipo_publicacion_id = '$tipo_publicacion_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_tipo_publicacion)
  {
    try{
      $tipo_publicacion_id = $bean_tipo_publicacion->getTipoPublicacionId();

      $this->query = "SELECT * FROM tipo_publicacion WHERE tipo_publicacion_id = '$tipo_publicacion_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_tipo_publicacion)
  {
    try{
      $tipo_publicacion_id = $bean_tipo_publicacion->getTipoPublicacionId();

      $this->query = "DELETE FROM tipo_publicacion
                      WHERE tipo_publicacion_id = '$tipo_publicacion_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_tipo_publicacion)
  {
    try{
      $estado = $bean_tipo_publicacion->getEstado() ;

      $this->query = "SELECT * FROM tipo_publicacion
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_tipo_publicacion)
  {
    try{
      $tipo_publicacion_id = $bean_tipo_publicacion->getTipoPublicacionId();
      $estado = $bean_tipo_publicacion->getEstado();

      $this->query = "UPDATE tipo_publicacion SET 
                        estado = '$estado'
                      WHERE tipo_publicacion_id='$tipo_publicacion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_tipo_publicacion)
  {
    try{
      $tipo_publicacion_id = $bean_tipo_publicacion->getTipoPublicacionId();
      $publicar = $bean_tipo_publicacion->getPublicar() ;

      $this->query = "UPDATE tipo_publicacion SET 
                        publicar = '$publicar'
                      WHERE tipo_publicacion_id = '$tipo_publicacion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_tipo_publicacion)
  {
    try{
      $publicar = $bean_tipo_publicacion->getPublicar() ;

      $this->query = "SELECT * FROM tipo_publicacion
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
