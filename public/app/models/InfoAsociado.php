<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class InfoAsociado extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM info_asociado; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_info_asociado)
  {
    try{

      $info_asociado_id = $bean_info_asociado->getInfoAsociadoId();
      $tipo_info_asociado_id = $bean_info_asociado->getTipoInfoAsociadoId();
      $titulo = $bean_info_asociado->getTitulo();
      $descripcion = $bean_info_asociado->getDescripcion();
      $url_file = $bean_info_asociado->getUrlFile();
      $publicar = $bean_info_asociado->getPublicar();
      $estado = $bean_info_asociado->getEstado();
      $created_at = $bean_info_asociado->getCreatedAt();

      $this->query = "INSERT INTO info_asociado
                      (
                        tipo_info_asociado_id,
                        titulo,
                        descripcion,
                        url_file,
                        publicar,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$tipo_info_asociado_id',
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
  public function update($bean_info_asociado)
  {
    try{
      $info_asociado_id = $bean_info_asociado->getInfoAsociadoId();
      $tipo_info_asociado_id = $bean_info_asociado->getTipoInfoAsociadoId();
      $titulo = $bean_info_asociado->getTitulo();
      $descripcion = $bean_info_asociado->getDescripcion();
      $url_file = $bean_info_asociado->getUrlFile();
      $publicar = $bean_info_asociado->getPublicar();

      $this->query = "UPDATE info_asociado SET 
                        tipo_info_asociado_id = '$tipo_info_asociado_id',
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        url_file = '$url_file',
                        publicar = '$publicar'
                      WHERE info_asociado_id = '$info_asociado_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_info_asociado)
  {
    try{
      $info_asociado_id = $bean_info_asociado->getInfoAsociadoId();

      $this->query = "SELECT * FROM info_asociado WHERE info_asociado_id = '$info_asociado_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_info_asociado)
  {
    try{
      $info_asociado_id = $bean_info_asociado->getInfoAsociadoId();

      $this->query = "DELETE FROM info_asociado
                      WHERE info_asociado_id = '$info_asociado_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_info_asociado)
  {
    try{
      $estado = $bean_info_asociado->getEstado() ;

      $this->query = "SELECT * FROM info_asociado
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_info_asociado)
  {
    try{
      $info_asociado_id = $bean_info_asociado->getInfoAsociadoId();
      $estado = $bean_info_asociado->getEstado();

      $this->query = "UPDATE info_asociado SET 
                        estado = '$estado'
                      WHERE info_asociado_id='$info_asociado_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_info_asociado)
  {
    try{
      $info_asociado_id = $bean_info_asociado->getInfoAsociadoId();
      $publicar = $bean_info_asociado->getPublicar() ;

      $this->query = "UPDATE info_asociado SET 
                        publicar = '$publicar'
                      WHERE info_asociado_id = '$info_asociado_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_info_asociado)
  {
    try{
      $publicar = $bean_info_asociado->getPublicar() ;

      $this->query = "SELECT * FROM info_asociado
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
