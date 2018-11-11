<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Marca extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM marca";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_marca)
  {
    try{
      $bean_marca->setCreatedUp( HelperDate::timestampsBd() );

      $idmarca = $bean_marca->getIdmarca();
      $nombre = $bean_marca->getNombre();
      $publicar = $bean_marca->getPublicar();
      $estado = $bean_marca->getEstado();
      $created_up = $bean_marca->getCreatedUp();

      $this->query = "INSERT INTO marca
                      (
                        nombre,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$nombre',
                        '$publicar',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_marca)
  {
    try{
      $idmarca = $bean_marca->getIdmarca();
      $nombre = $bean_marca->getNombre();
      $publicar = $bean_marca->getPublicar();

      $this->query = "UPDATE marca SET 
                        nombre = '$nombre',
                        publicar = '$publicar'
                      WHERE idmarca = '$idmarca'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Eliminar(Actualizar Estado)
  public function updateEstado($bean_marca)
  {
    try{
      $idmarca = $bean_marca->getIdmarca();
      $estado = $bean_marca->getEstado();

      $this->query = "UPDATE marca SET 
                        estado = '$estado'
                      WHERE idmarca='$idmarca'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_marca)
  {
    try{
      $idmarca = $bean_marca->getIdmarca();

      $this->query = "SELECT * FROM marca WHERE idmarca = '$idmarca' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_marca)
  {
    try{
      $idmarca = $bean_marca->getIdmarca();

      $this->query = "DELETE FROM marca
                      WHERE idmarca = '$idmarca' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Método updatePublish
  public function updatePublish($bean_marca)
  {
    try{
      $idmarca = $bean_marca->getIdmarca();
      $publicar = $bean_marca->getPublicar() ;

      $this->query = "UPDATE marca SET 
                        publicar = '$publicar'
                      WHERE idmarca = '$idmarca'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Método getPublished
  public function getPublished($bean_marca)
  {
    try{
      $publicar = $bean_marca->getPublicar() ;

      $this->query = "SELECT * FROM marca
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
