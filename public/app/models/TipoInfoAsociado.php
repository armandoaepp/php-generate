<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TipoInfoAsociado extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM tipo_info_asociado; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_tipo_info_asociado)
  {
    try{

      $tipo_info_asociado_id = $bean_tipo_info_asociado->getTipoInfoAsociadoId();
      $descripcion = $bean_tipo_info_asociado->getDescripcion();
      $publicar = $bean_tipo_info_asociado->getPublicar();
      $estado = $bean_tipo_info_asociado->getEstado();

      $this->query = "INSERT INTO tipo_info_asociado
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
  public function update($bean_tipo_info_asociado)
  {
    try{
      $tipo_info_asociado_id = $bean_tipo_info_asociado->getTipoInfoAsociadoId();
      $descripcion = $bean_tipo_info_asociado->getDescripcion();
      $publicar = $bean_tipo_info_asociado->getPublicar();

      $this->query = "UPDATE tipo_info_asociado SET 
                        descripcion = '$descripcion',
                        publicar = '$publicar'
                      WHERE tipo_info_asociado_id = '$tipo_info_asociado_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_tipo_info_asociado)
  {
    try{
      $tipo_info_asociado_id = $bean_tipo_info_asociado->getTipoInfoAsociadoId();

      $this->query = "SELECT * FROM tipo_info_asociado WHERE tipo_info_asociado_id = '$tipo_info_asociado_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_tipo_info_asociado)
  {
    try{
      $tipo_info_asociado_id = $bean_tipo_info_asociado->getTipoInfoAsociadoId();

      $this->query = "DELETE FROM tipo_info_asociado
                      WHERE tipo_info_asociado_id = '$tipo_info_asociado_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_tipo_info_asociado)
  {
    try{
      $estado = $bean_tipo_info_asociado->getEstado() ;

      $this->query = "SELECT * FROM tipo_info_asociado
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_tipo_info_asociado)
  {
    try{
      $tipo_info_asociado_id = $bean_tipo_info_asociado->getTipoInfoAsociadoId();
      $estado = $bean_tipo_info_asociado->getEstado();

      $this->query = "UPDATE tipo_info_asociado SET 
                        estado = '$estado'
                      WHERE tipo_info_asociado_id='$tipo_info_asociado_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_tipo_info_asociado)
  {
    try{
      $tipo_info_asociado_id = $bean_tipo_info_asociado->getTipoInfoAsociadoId();
      $publicar = $bean_tipo_info_asociado->getPublicar() ;

      $this->query = "UPDATE tipo_info_asociado SET 
                        publicar = '$publicar'
                      WHERE tipo_info_asociado_id = '$tipo_info_asociado_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_tipo_info_asociado)
  {
    try{
      $publicar = $bean_tipo_info_asociado->getPublicar() ;

      $this->query = "SELECT * FROM tipo_info_asociado
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
