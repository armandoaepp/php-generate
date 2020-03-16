<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Video extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM video; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_video)
  {
    try{

      $video_id = $bean_video->getVideoId();
      $titulo = $bean_video->getTitulo();
      $descripcion = $bean_video->getDescripcion();
      $tipo_video = $bean_video->getTipoVideo();
      $url = $bean_video->getUrl();
      $estado = $bean_video->getEstado();

      $this->query = "INSERT INTO video
                      (
                        titulo,
                        descripcion,
                        tipo_video,
                        url,
                        estado
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
                        '$tipo_video',
                        '$url',
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
  public function update($bean_video)
  {
    try{
      $video_id = $bean_video->getVideoId();
      $titulo = $bean_video->getTitulo();
      $descripcion = $bean_video->getDescripcion();
      $tipo_video = $bean_video->getTipoVideo();
      $url = $bean_video->getUrl();

      $this->query = "UPDATE video SET 
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        tipo_video = '$tipo_video',
                        url = '$url'
                      WHERE video_id = '$video_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_video)
  {
    try{
      $video_id = $bean_video->getVideoId();

      $this->query = "SELECT * FROM video WHERE video_id = '$video_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_video)
  {
    try{
      $video_id = $bean_video->getVideoId();

      $this->query = "DELETE FROM video
                      WHERE video_id = '$video_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_video)
  {
    try{
      $estado = $bean_video->getEstado() ;

      $this->query = "SELECT * FROM video
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_video)
  {
    try{
      $video_id = $bean_video->getVideoId();
      $estado = $bean_video->getEstado();

      $this->query = "UPDATE video SET 
                        estado = '$estado'
                      WHERE video_id='$video_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
