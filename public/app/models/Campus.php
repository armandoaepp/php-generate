<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Campus extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM campus";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_campus)
  {
    try{
      $id = $bean_campus->getId();
      $titulo = $bean_campus->getTitulo();
      $subtitulo = $bean_campus->getSubtitulo();
      $descripcion = $bean_campus->getDescripcion();
      $imagen = $bean_campus->getImagen();
      $url = $bean_campus->getUrl();
      $orden = $bean_campus->getOrden();
      $estado = $bean_campus->getEstado();
      $fecha = $bean_campus->getFecha();

      $this->query = "INSERT INTO campus
                      (
                        titulo,
                        subtitulo,
                        descripcion,
                        imagen,
                        url,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$titulo',
                        '$subtitulo',
                        '$descripcion',
                        '$imagen',
                        '$url',
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
  public function update($bean_campus)
  {
    try{
      $id = $bean_campus->getId();
      $titulo = $bean_campus->getTitulo();
      $subtitulo = $bean_campus->getSubtitulo();
      $descripcion = $bean_campus->getDescripcion();
      $imagen = $bean_campus->getImagen();
      $url = $bean_campus->getUrl();
      $orden = $bean_campus->getOrden();
      $fecha = $bean_campus->getFecha();

      $this->query = "UPDATE campus SET 
                        titulo = '$titulo',
                        subtitulo = '$subtitulo',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        url = '$url',
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
  public function updateEstado($bean_campus)
  {
    try{
      $id = $bean_campus->getId();
      $estado = $bean_campus->getEstado();

      $this->query = "UPDATE campus SET 
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
  public function find($bean_campus)
  {
    try{
      $id = $bean_campus->getId();

      $this->query = "SELECT * FROM campus WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_campus)
  {
    try{
      $id = $bean_campus->getId();

      $this->query = "DELETE FROM campus
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}