<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Facultad extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM facultad";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_facultad)
  {
    try{
      $id = $bean_facultad->getId();
      $titulo = $bean_facultad->getTitulo();
      $descripcion = $bean_facultad->getDescripcion();
      $imagen = $bean_facultad->getImagen();
      $orden = $bean_facultad->getOrden();
      $estado = $bean_facultad->getEstado();
      $fecha = $bean_facultad->getFecha();
      $activo = $bean_facultad->getActivo();

      $this->query = "INSERT INTO facultad
                      (
                        titulo,
                        descripcion,
                        imagen,
                        orden,
                        estado,
                        fecha,
                        activo
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
                        '$imagen',
                        '$orden',
                        '$estado',
                        '$fecha',
                        '$activo'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_facultad)
  {
    try{
      $id = $bean_facultad->getId();
      $titulo = $bean_facultad->getTitulo();
      $descripcion = $bean_facultad->getDescripcion();
      $imagen = $bean_facultad->getImagen();
      $orden = $bean_facultad->getOrden();
      $fecha = $bean_facultad->getFecha();
      $activo = $bean_facultad->getActivo();

      $this->query = "UPDATE facultad SET 
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        orden = '$orden',
                        fecha = '$fecha',
                        activo = '$activo'
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
  public function updateEstado($bean_facultad)
  {
    try{
      $id = $bean_facultad->getId();
      $estado = $bean_facultad->getEstado();

      $this->query = "UPDATE facultad SET 
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
  public function find($bean_facultad)
  {
    try{
      $id = $bean_facultad->getId();

      $this->query = "SELECT * FROM facultad WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_facultad)
  {
    try{
      $id = $bean_facultad->getId();

      $this->query = "DELETE FROM facultad
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
