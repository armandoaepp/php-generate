<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TipoConvenio extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM tipo_convenio; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_tipo_convenio)
  {
    try{

      $tipo_convenio_id = $bean_tipo_convenio->getTipoConvenioId();
      $desc_convenio = $bean_tipo_convenio->getDescConvenio();
      $estado = $bean_tipo_convenio->getEstado();

      $this->query = "INSERT INTO tipo_convenio
                      (
                        desc_convenio,
                        estado
                      )
                      VALUES(
                        '$desc_convenio',
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
  public function update($bean_tipo_convenio)
  {
    try{
      $tipo_convenio_id = $bean_tipo_convenio->getTipoConvenioId();
      $desc_convenio = $bean_tipo_convenio->getDescConvenio();

      $this->query = "UPDATE tipo_convenio SET 
                        desc_convenio = '$desc_convenio'
                      WHERE tipo_convenio_id = '$tipo_convenio_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_tipo_convenio)
  {
    try{
      $tipo_convenio_id = $bean_tipo_convenio->getTipoConvenioId();

      $this->query = "SELECT * FROM tipo_convenio WHERE tipo_convenio_id = '$tipo_convenio_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_tipo_convenio)
  {
    try{
      $tipo_convenio_id = $bean_tipo_convenio->getTipoConvenioId();

      $this->query = "DELETE FROM tipo_convenio
                      WHERE tipo_convenio_id = '$tipo_convenio_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_tipo_convenio)
  {
    try{
      $estado = $bean_tipo_convenio->getEstado() ;

      $this->query = "SELECT * FROM tipo_convenio
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_tipo_convenio)
  {
    try{
      $tipo_convenio_id = $bean_tipo_convenio->getTipoConvenioId();
      $estado = $bean_tipo_convenio->getEstado();

      $this->query = "UPDATE tipo_convenio SET 
                        estado = '$estado'
                      WHERE tipo_convenio_id='$tipo_convenio_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
