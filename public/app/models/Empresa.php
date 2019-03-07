<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Empresa extends Connection {
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
                        empresa.* ,
                        tipo_empresa.descripcion AS tipo_empresa
                      FROM empresa
                      INNER JOIN tipo_empresa ON tipo_empresa.tipo_empresa_id = empresa.tipo_empresa_id ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_empresa)
  {
    try{
      $estado = $bean_empresa->getEstado() ;

      $this->query = "SELECT * FROM empresa
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_empresa)
  {
    try{
      $bean_empresa->setCreatedUp( HelperDate::timestampsBd() );

      $empresa_id = $bean_empresa->getEmpresaId();
      $tipo_empresa_id = $bean_empresa->getTipoEmpresaId();
      $nombre = $bean_empresa->getNombre();
      $descripcion = $bean_empresa->getDescripcion();
      $imagen = $bean_empresa->getImagen();
      $publicar = $bean_empresa->getPublicar();
      $estado = $bean_empresa->getEstado();
      $created_up = $bean_empresa->getCreatedUp();

      $this->query = "INSERT INTO empresa
                      (
                        tipo_empresa_id,
                        nombre,
                        descripcion,
                        imagen,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$tipo_empresa_id',
                        '$nombre',
                        '$descripcion',
                        '$imagen',
                        '$publicar',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_empresa)
  {
    try{
      $empresa_id = $bean_empresa->getEmpresaId();
      $tipo_empresa_id = $bean_empresa->getTipoEmpresaId();
      $nombre = $bean_empresa->getNombre();
      $descripcion = $bean_empresa->getDescripcion();
      $imagen = $bean_empresa->getImagen();
      $publicar = $bean_empresa->getPublicar();

      $this->query = "UPDATE empresa SET
                        tipo_empresa_id = '$tipo_empresa_id',
                        nombre = '$nombre',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        publicar = '$publicar'
                      WHERE empresa_id = '$empresa_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_empresa)
  {
    try{
      $empresa_id = $bean_empresa->getEmpresaId();
      $estado = $bean_empresa->getEstado();

      $this->query = "UPDATE empresa SET
                        estado = '$estado'
                      WHERE empresa_id='$empresa_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_empresa)
  {
    try{
      $empresa_id = $bean_empresa->getEmpresaId();

      $this->query = "SELECT * FROM empresa WHERE empresa_id = '$empresa_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_empresa)
  {
    try{
      $empresa_id = $bean_empresa->getEmpresaId();

      $this->query = "DELETE FROM empresa
                      WHERE empresa_id = '$empresa_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_empresa)
  {
    try{
      $empresa_id = $bean_empresa->getEmpresaId();
      $publicar = $bean_empresa->getPublicar() ;

      $this->query = "UPDATE empresa SET
                        publicar = '$publicar'
                      WHERE empresa_id = '$empresa_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_empresa)
  {
    try{
      $publicar = $bean_empresa->getPublicar() ;

      $this->query = "SELECT * FROM empresa
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
