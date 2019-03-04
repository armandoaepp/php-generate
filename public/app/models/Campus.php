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

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM campus; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_campus)
  {
    try{
      $estado = $bean_campus->getEstado() ;

      $this->query = "SELECT * FROM campus
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_campus)
  {
    try{
      $bean_campus->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_campus->getId();
      $titulo = $bean_campus->getTitulo();
      $subtitulo = $bean_campus->getSubtitulo();
      $descripcion = $bean_campus->getDescripcion();
      $imagen = $bean_campus->getImagen();
      $url = $bean_campus->getUrl();
      $item = $bean_campus->getItem();
      $publicar = $bean_campus->getPublicar();
      $estado = $bean_campus->getEstado();
      $created_up = $bean_campus->getCreatedUp();

      $this->query = "INSERT INTO campus
                      (
                        titulo,
                        subtitulo,
                        descripcion,
                        imagen,
                        url,
                        item,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$titulo',
                        '$subtitulo',
                        '$descripcion',
                        '$imagen',
                        '$url',
                        '$item',
                        '$publicar',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_campus)
  {
    try{
      $id = $bean_campus->getId();
      $titulo = $bean_campus->getTitulo();
      $subtitulo = $bean_campus->getSubtitulo();
      $descripcion = $bean_campus->getDescripcion();
      $imagen = $bean_campus->getImagen();
      $url = $bean_campus->getUrl();
      $item = $bean_campus->getItem();
      $publicar = $bean_campus->getPublicar();

      $this->query = "UPDATE campus SET 
                        titulo = '$titulo',
                        subtitulo = '$subtitulo',
                        descripcion = '$descripcion',
                        imagen = '$imagen',
                        url = '$url',
                        item = '$item',
                        publicar = '$publicar'
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

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
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

  # Method deleteById
  public function deleteById($bean_campus)
  {
    try{
      $id = $bean_campus->getId();

      $this->query = "DELETE FROM campus
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_campus)
  {
    try{
      $id = $bean_campus->getId();
      $publicar = $bean_campus->getPublicar() ;

      $this->query = "UPDATE campus SET 
                        publicar = '$publicar'
                      WHERE id = '$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_campus)
  {
    try{
      $publicar = $bean_campus->getPublicar() ;

      $this->query = "SELECT * FROM campus
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
