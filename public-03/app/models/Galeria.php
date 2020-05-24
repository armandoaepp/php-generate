<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Galeria extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM galeria; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_galeria)
  {
    try{

      $galeria_id = $bean_galeria->getGaleriaId();
      $titulo = $bean_galeria->getTitulo();
      $descripcion = $bean_galeria->getDescripcion();
      $estado = $bean_galeria->getEstado();

      $this->query = "INSERT INTO galeria
                      (
                        titulo,
                        descripcion,
                        estado
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
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
  public function update($bean_galeria)
  {
    try{
      $galeria_id = $bean_galeria->getGaleriaId();
      $titulo = $bean_galeria->getTitulo();
      $descripcion = $bean_galeria->getDescripcion();

      $this->query = "UPDATE galeria SET 
                        titulo = '$titulo',
                        descripcion = '$descripcion'
                      WHERE galeria_id = '$galeria_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_galeria)
  {
    try{
      $galeria_id = $bean_galeria->getGaleriaId();

      $this->query = "SELECT * FROM galeria WHERE galeria_id = '$galeria_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_galeria)
  {
    try{
      $galeria_id = $bean_galeria->getGaleriaId();

      $this->query = "DELETE FROM galeria
                      WHERE galeria_id = '$galeria_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_galeria)
  {
    try{
      $estado = $bean_galeria->getEstado() ;

      $this->query = "SELECT * FROM galeria
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_galeria)
  {
    try{
      $galeria_id = $bean_galeria->getGaleriaId();
      $estado = $bean_galeria->getEstado();

      $this->query = "UPDATE galeria SET 
                        estado = '$estado'
                      WHERE galeria_id='$galeria_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
