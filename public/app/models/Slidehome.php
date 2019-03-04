<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Slidehome extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM slidehome; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_slidehome)
  {
    try{
      $estado = $bean_slidehome->getEstado() ;

      $this->query = "SELECT * FROM slidehome
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_slidehome)
  {
    try{
      $id = $bean_slidehome->getId();
      $titulo = $bean_slidehome->getTitulo();
      $subtitulo = $bean_slidehome->getSubtitulo();
      $descripcion = $bean_slidehome->getDescripcion();
      $imagen = $bean_slidehome->getImagen();
      $url = $bean_slidehome->getUrl();
      $orden = $bean_slidehome->getOrden();
      $estado = $bean_slidehome->getEstado();
      $fecha = $bean_slidehome->getFecha();

      $this->query = "INSERT INTO slidehome
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

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_slidehome)
  {
    try{
      $id = $bean_slidehome->getId();
      $titulo = $bean_slidehome->getTitulo();
      $subtitulo = $bean_slidehome->getSubtitulo();
      $descripcion = $bean_slidehome->getDescripcion();
      $imagen = $bean_slidehome->getImagen();
      $url = $bean_slidehome->getUrl();
      $orden = $bean_slidehome->getOrden();
      $fecha = $bean_slidehome->getFecha();

      $this->query = "UPDATE slidehome SET 
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

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_slidehome)
  {
    try{
      $id = $bean_slidehome->getId();
      $estado = $bean_slidehome->getEstado();

      $this->query = "UPDATE slidehome SET 
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

  # Method Buscar por ID
  public function find($bean_slidehome)
  {
    try{
      $id = $bean_slidehome->getId();

      $this->query = "SELECT * FROM slidehome WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_slidehome)
  {
    try{
      $id = $bean_slidehome->getId();

      $this->query = "DELETE FROM slidehome
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
