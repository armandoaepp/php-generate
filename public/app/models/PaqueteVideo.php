<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class PaqueteVideo extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM paquete_video; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_paquete_video)
  {
    try{

      // $paquete_video_id = $bean_paquete_video->getPaqueteVideoId();
      $paquete_id     = $bean_paquete_video->getPaqueteId();
      $url_video      = $bean_paquete_video->getUrlVideo();
      $item           = $bean_paquete_video->getItem();
      $desc_video     = $bean_paquete_video->getDescVideo();
      $estado         = $bean_paquete_video->getEstado();

      $this->query = "INSERT INTO paquete_video
                      (
                        paquete_id,
                        url_video,
                        item,
                        desc_video,
                        estado
                      )
                      VALUES(
                        '$paquete_id',
                        '$url_video',
                        '$item',
                        '$desc_video',
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
  public function update($bean_paquete_video)
  {
    try{
      $paquete_video_id = $bean_paquete_video->getPaqueteVideoId();
      // $paquete_id     = $bean_paquete_video->getPaqueteId();
      $url_video      = $bean_paquete_video->getUrlVideo();
      $item           = $bean_paquete_video->getItem();
      $desc_video     = $bean_paquete_video->getDescVideo();

      $this->query = "UPDATE paquete_video SET
                        url_video = '$url_video',
                        item = '$item',
                        desc_video = '$desc_video'
                      WHERE paquete_video_id = '$paquete_video_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_paquete_video)
  {
    try{
      $paquete_video_id = $bean_paquete_video->getPaqueteVideoId();

      $this->query = "SELECT * FROM paquete_video WHERE paquete_video_id = '$paquete_video_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_paquete_video)
  {
    try{
      $paquete_video_id = $bean_paquete_video->getPaqueteVideoId();

      $this->query = "DELETE FROM paquete_video
                      WHERE paquete_video_id = '$paquete_video_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_paquete_video)
  {
    try{
      $estado = $bean_paquete_video->getEstado() ;

      $this->query = "SELECT * FROM paquete_video
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_paquete_video)
  {
    try{
      $paquete_video_id = $bean_paquete_video->getPaqueteVideoId();
      $estado         = $bean_paquete_video->getEstado();

      $this->query = "UPDATE paquete_video SET
                        estado = '$estado'
                      WHERE paquete_video_id='$paquete_video_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getPublished
  public function countRows()
  {
    try{

      $this->query = "SELECT count(*) AS num_rows FROM paquete_video;";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByPaqueteId
  public function getByPaqueteId($bean_paquete_video)
  {
    try{
      $paquete_id = $bean_paquete_video->getPaqueteId() ;

      $this->query = "SELECT
                        paquete_video.*
                      FROM paquete_video
                      WHERE paquete_video.paquete_id = '$paquete_id'
                      AND paquete_video.estado = 1; ";

      $this->executeQuery();

      // echo "Sql: ".$this->query ."<br>" ;

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
