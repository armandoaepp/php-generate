<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TipoVivienda extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM tipo_vivienda; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_tipo_vivienda)
  {
    try{

      $tipo_vivienda_id = $bean_tipo_vivienda->getTipoViviendaId();
      $desc_vivienda = $bean_tipo_vivienda->getDescVivienda();
      $estado = $bean_tipo_vivienda->getEstado();

      $this->query = "INSERT INTO tipo_vivienda
                      (
                        desc_vivienda,
                        estado
                      )
                      VALUES(
                        '$desc_vivienda',
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
  public function update($bean_tipo_vivienda)
  {
    try{
      $tipo_vivienda_id = $bean_tipo_vivienda->getTipoViviendaId();
      $desc_vivienda = $bean_tipo_vivienda->getDescVivienda();

      $this->query = "UPDATE tipo_vivienda SET 
                        desc_vivienda = '$desc_vivienda'
                      WHERE tipo_vivienda_id = '$tipo_vivienda_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_tipo_vivienda)
  {
    try{
      $tipo_vivienda_id = $bean_tipo_vivienda->getTipoViviendaId();

      $this->query = "SELECT * FROM tipo_vivienda WHERE tipo_vivienda_id = '$tipo_vivienda_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_tipo_vivienda)
  {
    try{
      $tipo_vivienda_id = $bean_tipo_vivienda->getTipoViviendaId();

      $this->query = "DELETE FROM tipo_vivienda
                      WHERE tipo_vivienda_id = '$tipo_vivienda_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_tipo_vivienda)
  {
    try{
      $estado = $bean_tipo_vivienda->getEstado() ;

      $this->query = "SELECT * FROM tipo_vivienda
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_tipo_vivienda)
  {
    try{
      $tipo_vivienda_id = $bean_tipo_vivienda->getTipoViviendaId();
      $estado = $bean_tipo_vivienda->getEstado();

      $this->query = "UPDATE tipo_vivienda SET 
                        estado = '$estado'
                      WHERE tipo_vivienda_id='$tipo_vivienda_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
