<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Ubigeo extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM ubigeo; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_ubigeo)
  {
    try{

      $id = $bean_ubigeo->getId();
      $codigo = $bean_ubigeo->getCodigo();
      $ubigeo = $bean_ubigeo->getUbigeo();
      $descripcion = $bean_ubigeo->getDescripcion();
      $ubigeo_id_padre = $bean_ubigeo->getUbigeoIdPadre();
      $pais_id = $bean_ubigeo->getPaisId();
      $tipo_ubigeo_id = $bean_ubigeo->getTipoUbigeoId();
      $region_id = $bean_ubigeo->getRegionId();
      $estado = $bean_ubigeo->getEstado();

      $this->query = "INSERT INTO ubigeo
                      (
                        codigo,
                        ubigeo,
                        descripcion,
                        ubigeo_id_padre,
                        pais_id,
                        tipo_ubigeo_id,
                        region_id,
                        estado
                      )
                      VALUES(
                        '$codigo',
                        '$ubigeo',
                        '$descripcion',
                        '$ubigeo_id_padre',
                        '$pais_id',
                        '$tipo_ubigeo_id',
                        '$region_id',
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
  public function update($bean_ubigeo)
  {
    try{
      $id = $bean_ubigeo->getId();
      $codigo = $bean_ubigeo->getCodigo();
      $ubigeo = $bean_ubigeo->getUbigeo();
      $descripcion = $bean_ubigeo->getDescripcion();
      $ubigeo_id_padre = $bean_ubigeo->getUbigeoIdPadre();
      $pais_id = $bean_ubigeo->getPaisId();
      $tipo_ubigeo_id = $bean_ubigeo->getTipoUbigeoId();
      $region_id = $bean_ubigeo->getRegionId();

      $this->query = "UPDATE ubigeo SET 
                        codigo = '$codigo',
                        ubigeo = '$ubigeo',
                        descripcion = '$descripcion',
                        ubigeo_id_padre = '$ubigeo_id_padre',
                        pais_id = '$pais_id',
                        tipo_ubigeo_id = '$tipo_ubigeo_id',
                        region_id = '$region_id'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_ubigeo)
  {
    try{
      $id = $bean_ubigeo->getId();

      $this->query = "SELECT * FROM ubigeo WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_ubigeo)
  {
    try{
      $id = $bean_ubigeo->getId();

      $this->query = "DELETE FROM ubigeo
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_ubigeo)
  {
    try{
      $estado = $bean_ubigeo->getEstado() ;

      $this->query = "SELECT * FROM ubigeo
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_ubigeo)
  {
    try{
      $id = $bean_ubigeo->getId();
      $estado = $bean_ubigeo->getEstado();

      $this->query = "UPDATE ubigeo SET 
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
}
