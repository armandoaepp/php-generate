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

      $this->query = "SELECT * FROM empresa; ";

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

      $empresa_id = $bean_empresa->getEmpresaId();
      $ruc = $bean_empresa->getRuc();
      $nombre = $bean_empresa->getNombre();
      $imagen = $bean_empresa->getImagen();
      $publicar = $bean_empresa->getPublicar();
      $estado = $bean_empresa->getEstado();

      $this->query = "INSERT INTO empresa
                      (
                        ruc,
                        nombre,
                        imagen,
                        publicar,
                        estado
                      )
                      VALUES(
                        '$ruc',
                        '$nombre',
                        '$imagen',
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
  public function update($bean_empresa)
  {
    try{
      $empresa_id = $bean_empresa->getEmpresaId();
      $ruc = $bean_empresa->getRuc();
      $nombre = $bean_empresa->getNombre();
      $imagen = $bean_empresa->getImagen();
      $publicar = $bean_empresa->getPublicar();

      $this->query = "UPDATE empresa SET 
                        ruc = '$ruc',
                        nombre = '$nombre',
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
