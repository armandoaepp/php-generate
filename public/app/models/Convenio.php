<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Convenio extends Connection {
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
                      convenio.*,
                      tipo_convenio.desc_convenio
                    FROM convenio
                    INNER JOIN tipo_convenio ON tipo_convenio.tipo_convenio_id = convenio.tipo_convenio_id; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_convenio)
  {
    try{

      // $convenio_id      = $bean_convenio->getConvenioId();
      $tipo_convenio_id = $bean_convenio->getTipoConvenioId();
      $nombre           = $bean_convenio->getNombre();
      $caracteristica   = $bean_convenio->getCaracteristica();
      $precio           = $bean_convenio->getPrecio();
      $glosa            = $bean_convenio->getGlosa();
      $publicar         = $bean_convenio->getPublicar();
      $estado           = $bean_convenio->getEstado();

      $this->query = "INSERT INTO convenio
                      (
                        tipo_convenio_id,
                        nombre,
                        caracteristica,
                        precio,
                        glosa,
                        publicar,
                        estado
                      )
                      VALUES(
                        '$tipo_convenio_id',
                        '$nombre',
                        '$caracteristica',
                        '$precio',
                        '$glosa',
                        '$publicar',
                        '$estado'
                      ); ";

      $this->executeQuery();

      // $data = $this->status  ;
      $id = $this->lastInsertId();

      // $data = $this->status  ;
      $data = $id  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_convenio)
  {
    try{
      $convenio_id = $bean_convenio->getConvenioId();
      $tipo_convenio_id = $bean_convenio->getTipoConvenioId();
      $nombre = $bean_convenio->getNombre();
      $caracteristica = $bean_convenio->getCaracteristica();
      $precio = $bean_convenio->getPrecio();
      $glosa = $bean_convenio->getGlosa();
      $publicar = $bean_convenio->getPublicar();

      $this->query = "UPDATE convenio SET
                        tipo_convenio_id = '$tipo_convenio_id',
                        nombre = '$nombre',
                        caracteristica = '$caracteristica',
                        precio = '$precio',
                        glosa = '$glosa',
                        publicar = '$publicar'
                      WHERE convenio_id = '$convenio_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_convenio)
  {
    try{
      $convenio_id = $bean_convenio->getConvenioId();

      $this->query = "SELECT * FROM convenio WHERE convenio_id = '$convenio_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_convenio)
  {
    try{
      $convenio_id = $bean_convenio->getConvenioId();

      $this->query = "DELETE FROM convenio
                      WHERE convenio_id = '$convenio_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_convenio)
  {
    try{
      $estado = $bean_convenio->getEstado() ;

      $this->query = "SELECT
                        convenio.*,
                        tipo_convenio.desc_convenio
                      FROM convenio
                      INNER JOIN tipo_convenio ON tipo_convenio.tipo_convenio_id = convenio.tipo_convenio_id
                      WHERE tipo_convenio.estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_convenio)
  {
    try{
      $convenio_id = $bean_convenio->getConvenioId();
      $estado = $bean_convenio->getEstado();

      $this->query = "UPDATE convenio SET
                        estado = '$estado'
                      WHERE convenio_id='$convenio_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_convenio)
  {
    try{
      $convenio_id = $bean_convenio->getConvenioId();
      $publicar = $bean_convenio->getPublicar() ;

      $this->query = "UPDATE convenio SET
                        publicar = '$publicar'
                      WHERE convenio_id = '$convenio_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_convenio)
  {
    try{
      $publicar = $bean_convenio->getPublicar() ;

      $this->query = "SELECT * FROM convenio
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
