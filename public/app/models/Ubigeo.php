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

      // $this->query = "SELECT * FROM ubigeo; ";
      $this->query = "SELECT
                        ubigeo.*,
                        region.nombre as region,
                        pais.nombre as pais
                      FROM ubigeo
                      INNER JOIN pais ON pais.pais_id = ubigeo.pais_id
                      LEFT JOIN region ON region.region_id = ubigeo.region_id ";



      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  /**
   * tipo[1, 2, 3][deparatmentos, provinvias, distritos]
   * pais_id[1, ...][peru,...]
   */
  # Method ubigeos rows
  public function getByTipoAndPaisId($bean_ubigeo)
  {
    try{

      $pais_id = $bean_ubigeo->getPaisId();
      $tipo    = $bean_ubigeo->getTipo();

      // $this->query = "SELECT * FROM ubigeo; ";
      $this->query = "SELECT
                        ubigeo.*,
                        region.nombre as region,
                        pais.nombre as pais
                      FROM ubigeo
                      INNER JOIN pais ON pais.pais_id = ubigeo.pais_id
                      LEFT JOIN region ON region.region_id = ubigeo.region_id
                      WHERE ubigeo.tipo = $tipo AND ubigeo.pais_id = $pais_id ";



      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Provincias rows
  public function getProvinciasByPaisId($bean_ubigeo)
  {
    try{

      $pais_id = $bean_ubigeo->getPaisId();

      // $this->query = "SELECT * FROM ubigeo; ";
      $this->query = "SELECT
                      ubigeo.*,
                      (SELECT departamento.nombre FROM ubigeo AS departamento WHERE departamento.ubigeo_id = ubigeo.ubigeo_id_padre  ) AS departamento,
                      pais.nombre as pais
                    FROM ubigeo
                    INNER JOIN pais ON pais.pais_id = ubigeo.pais_id
                    WHERE ubigeo.tipo = 2
                    AND ubigeo.pais_id = $pais_id ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method distritos rows
  public function getDistritosByPaisId($bean_ubigeo)
  {
    try{

      $pais_id = $bean_ubigeo->getPaisId();

      // $this->query = "SELECT * FROM ubigeo; ";
      $this->query = "SELECT
                      ubigeo.*,
                      (SELECT provincia.nombre FROM ubigeo AS provincia WHERE provincia.ubigeo_id = ubigeo.ubigeo_id_padre  ) AS provincia,
                      (SELECT provincia.descripcion FROM ubigeo AS provincia WHERE provincia.ubigeo_id = ubigeo.ubigeo_id_padre  ) AS prov_descripcion,
                      pais.nombre as pais
                    FROM ubigeo
                    INNER JOIN pais ON pais.pais_id = ubigeo.pais_id
                    WHERE ubigeo.tipo = 3
                    AND ubigeo.pais_id = $pais_id ";

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

      $ubigeo_id = $bean_ubigeo->getUbigeoId();
      $codigo = $bean_ubigeo->getCodigo();
      $nombre = $bean_ubigeo->getNombre();
      $descripcion = $bean_ubigeo->getDescripcion();
      $ubigeo_id_padre = $bean_ubigeo->getUbigeoIdPadre();
      $pais_id = $bean_ubigeo->getPaisId();
      $region_id = $bean_ubigeo->getRegionId();
      $tipo = $bean_ubigeo->getTipo();
      $estado = $bean_ubigeo->getEstado();

      $this->query = "INSERT INTO ubigeo
                      (
                        codigo,
                        nombre,
                        descripcion,
                        ubigeo_id_padre,
                        pais_id,
                        region_id,
                        tipo,
                        estado
                      )
                      VALUES(
                        '$codigo',
                        '$nombre',
                        '$descripcion',
                        '$ubigeo_id_padre',
                        '$pais_id',
                        '$region_id',
                        '$tipo',
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
      $ubigeo_id = $bean_ubigeo->getUbigeoId();
      $codigo = $bean_ubigeo->getCodigo();
      $nombre = $bean_ubigeo->getNombre();
      $descripcion = $bean_ubigeo->getDescripcion();
      $ubigeo_id_padre = $bean_ubigeo->getUbigeoIdPadre();
      $pais_id = $bean_ubigeo->getPaisId();
      $region_id = $bean_ubigeo->getRegionId();
      // $tipo = $bean_ubigeo->getTipo();

      $this->query = "UPDATE ubigeo SET
                        codigo = '$codigo',
                        nombre = '$nombre',
                        descripcion = '$descripcion',
                        ubigeo_id_padre = '$ubigeo_id_padre',
                        pais_id = '$pais_id',
                        region_id = '$region_id'
                      WHERE ubigeo_id = '$ubigeo_id'
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
      $ubigeo_id = $bean_ubigeo->getUbigeoId();

      $this->query = "SELECT * FROM ubigeo WHERE ubigeo_id = '$ubigeo_id' LIMIT 1; ";

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
      $ubigeo_id = $bean_ubigeo->getUbigeoId();

      $this->query = "DELETE FROM ubigeo
                      WHERE ubigeo_id = '$ubigeo_id' LIMIT 1; ";

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
      $ubigeo_id = $bean_ubigeo->getUbigeoId();
      $estado = $bean_ubigeo->getEstado();

      $this->query = "UPDATE ubigeo SET
                        estado = '$estado'
                      WHERE ubigeo_id='$ubigeo_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
