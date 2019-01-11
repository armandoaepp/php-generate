<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Chef extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM chef";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_chef)
  {
    try{
      $id = $bean_chef->getId();
      $titulo = $bean_chef->getTitulo();
      $subtitulo = $bean_chef->getSubtitulo();
      $resumen = $bean_chef->getResumen();
      $descripcion = $bean_chef->getDescripcion();
      $imagen = $bean_chef->getImagen();
      $orden = $bean_chef->getOrden();
      $estado = $bean_chef->getEstado();
      $fecha = $bean_chef->getFecha();

      $this->query = "INSERT INTO chef
                      (
                        titulo,
                        subtitulo,
                        resumen,
                        descripcion,
                        imagen,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$titulo',
                        '$subtitulo',
                        '$resumen',
                        '$descripcion',
                        '$imagen',
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
  public function update($bean_chef)
  {
    try{
      $id = $bean_chef->getId();
      $titulo = $bean_chef->getTitulo();
      $subtitulo = $bean_chef->getSubtitulo();
      $resumen = $bean_chef->getResumen();
      $descripcion = $bean_chef->getDescripcion();
      $imagen = $bean_chef->getImagen();
      $orden = $bean_chef->getOrden();
      $fecha = $bean_chef->getFecha();

      $this->query = "UPDATE chef SET 
                        titulo = '$titulo',
                        subtitulo = '$subtitulo',
                        resumen = '$resumen',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
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
  public function updateEstado($bean_chef)
  {
    try{
      $id = $bean_chef->getId();
      $estado = $bean_chef->getEstado();

      $this->query = "UPDATE chef SET 
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
  public function find($bean_chef)
  {
    try{
      $id = $bean_chef->getId();

      $this->query = "SELECT * FROM chef WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_chef)
  {
    try{
      $id = $bean_chef->getId();

      $this->query = "DELETE FROM chef
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
