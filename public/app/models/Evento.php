<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Evento extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM evento";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_evento)
  {
    try{
      $id = $bean_evento->getId();
      $titulo = $bean_evento->getTitulo();
      $descripcion = $bean_evento->getDescripcion();
      $imagen = $bean_evento->getImagen();
      $nombreseo = $bean_evento->getNombreseo();
      $orden = $bean_evento->getOrden();
      $estado = $bean_evento->getEstado();
      $fecha = $bean_evento->getFecha();

      $this->query = "INSERT INTO evento
                      (
                        titulo,
                        descripcion,
                        imagen,
                        nombreseo,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
                        '$imagen',
                        '$nombreseo',
                        '$orden',
                        '$estado',
                        '$fecha'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_evento)
  {
    try{
      $id = $bean_evento->getId();
      $titulo = $bean_evento->getTitulo();
      $descripcion = $bean_evento->getDescripcion();
      $imagen = $bean_evento->getImagen();
      $nombreseo = $bean_evento->getNombreseo();
      $orden = $bean_evento->getOrden();
      $fecha = $bean_evento->getFecha();

      $this->query = "UPDATE evento SET 
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        nombreseo = '$nombreseo',
                        orden = '$orden',
                        fecha = '$fecha'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Eliminar(Actualizar Estado)
  public function updateEstado($bean_evento)
  {
    try{
      $id = $bean_evento->getId();
      $estado = $bean_evento->getEstado();

      $this->query = "UPDATE evento SET 
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_evento)
  {
    try{
      $id = $bean_evento->getId();

      $this->query = "SELECT * FROM evento WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_evento)
  {
    try{
      $id = $bean_evento->getId();

      $this->query = "DELETE FROM evento
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
