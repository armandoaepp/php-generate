<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Etiqueta extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM etiqueta; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_etiqueta)
  {
    try{

      $etiqueta_id = $bean_etiqueta->getEtiquetaId();
      $eti_descripcion = $bean_etiqueta->getEtiDescripcion();
      $eti_publicar = $bean_etiqueta->getEtiPublicar();
      $eti_estado = $bean_etiqueta->getEtiEstado();

      $this->query = "INSERT INTO etiqueta
                      (
                        eti_descripcion,
                        eti_publicar,
                        eti_estado
                      )
                      VALUES(
                        '$eti_descripcion',
                        '$eti_publicar',
                        '$eti_estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_etiqueta)
  {
    try{
      $etiqueta_id = $bean_etiqueta->getEtiquetaId();
      $eti_descripcion = $bean_etiqueta->getEtiDescripcion();
      $eti_publicar = $bean_etiqueta->getEtiPublicar();

      $this->query = "UPDATE etiqueta SET 
                        eti_descripcion = '$eti_descripcion',
                        eti_publicar = '$eti_publicar'
                      WHERE etiqueta_id = '$etiqueta_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_etiqueta)
  {
    try{
      $etiqueta_id = $bean_etiqueta->getEtiquetaId();

      $this->query = "SELECT * FROM etiqueta WHERE etiqueta_id = '$etiqueta_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_etiqueta)
  {
    try{
      $etiqueta_id = $bean_etiqueta->getEtiquetaId();

      $this->query = "DELETE FROM etiqueta
                      WHERE etiqueta_id = '$etiqueta_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_etiqueta)
  {
    try{
      $estado = $bean_etiqueta->getEtiEstado() ;

      $this->query = "SELECT * FROM etiqueta
                      WHERE eti_estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_etiqueta)
  {
    try{
      $etiqueta_id = $bean_etiqueta->getEtiquetaId();
      $estado = $bean_etiqueta->getEtiEstado();

      $this->query = "UPDATE etiqueta SET 
                        eti_estado = '$estado'
                      WHERE etiqueta_id='$etiqueta_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_etiqueta)
  {
    try{
      $etiqueta_id = $bean_etiqueta->getEtiquetaId();
      $publicar = $bean_etiqueta->getEtiPublicar() ;

      $this->query = "UPDATE etiqueta SET 
                        eti_publicar = '$publicar'
                      WHERE etiqueta_id = '$etiqueta_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_etiqueta)
  {
    try{
      $publicar = $bean_etiqueta->getEtiPublicar() ;

      $this->query = "SELECT * FROM etiqueta
                      WHERE eti_publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
