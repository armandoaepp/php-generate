<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Itinerario extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM itinerario; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_itinerario)
  {
    try{

      $id = $bean_itinerario->getId();
      $paquete_id = $bean_itinerario->getPaqueteId();
      $dia = $bean_itinerario->getDia();
      $titulo = $bean_itinerario->getTitulo();
      $descripcion = $bean_itinerario->getDescripcion();
      $estado = $bean_itinerario->getEstado();

      $this->query = "INSERT INTO itinerario
                      (
                        paquete_id,
                        dia,
                        titulo,
                        descripcion,
                        estado
                      )
                      VALUES(
                        '$paquete_id',
                        '$dia',
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
  public function update($bean_itinerario)
  {
    try{
      $id = $bean_itinerario->getId();
      $paquete_id = $bean_itinerario->getPaqueteId();
      $dia = $bean_itinerario->getDia();
      $titulo = $bean_itinerario->getTitulo();
      $descripcion = $bean_itinerario->getDescripcion();

      $this->query = "UPDATE itinerario SET 
                        paquete_id = '$paquete_id',
                        dia = '$dia',
                        titulo = '$titulo',
                        descripcion = '$descripcion'
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
  public function find($bean_itinerario)
  {
    try{
      $id = $bean_itinerario->getId();

      $this->query = "SELECT * FROM itinerario WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_itinerario)
  {
    try{
      $id = $bean_itinerario->getId();

      $this->query = "DELETE FROM itinerario
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_itinerario)
  {
    try{
      $estado = $bean_itinerario->getEstado() ;

      $this->query = "SELECT * FROM itinerario
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_itinerario)
  {
    try{
      $id = $bean_itinerario->getId();
      $estado = $bean_itinerario->getEstado();

      $this->query = "UPDATE itinerario SET 
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
