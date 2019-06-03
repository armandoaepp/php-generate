<?php

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPaqueteVideo{
  # Constructor
  public function __construct(){}

  # Atributos
  private $paquete_video_id;
  private $paquete_id;
  private $url_video;
  private $item;
  private $desc_video;
  private $estado = 1 ;

  #Auto Increment Item
  public $item_autoincrement = true;

  # METODOS
  public function setPaqueteVideoId($paquete_video_id_)
  {
    $this->paquete_video_id = Validation::validate( $paquete_video_id_ );
  }

  public function getPaqueteVideoId()
  {
    return $this->paquete_video_id;
  }

  public function setPaqueteId($paquete_id_)
  {
    $this->paquete_id = Validation::validate( $paquete_id_ );
  }

  public function getPaqueteId()
  {
    return $this->paquete_id;
  }

  public function setUrlVideo($url_video_)
  {
    $this->url_video = Validation::validate( $url_video_ );
  }

  public function getUrlVideo()
  {
    return $this->url_video;
  }

  public function setItem($item_)
  {
    $this->item = Validation::validate( $item_ );
  }

  public function getItem()
  {
    if(empty($this->item) && $this->item_autoincrement)
    {
      $paquete_video  = new PaqueteVideo();
      $data = $paquete_video->countRows() ;
      if(!empty($data))
      {
          $this->item = $data["num_rows"] + 1;
      }
    }
    return $this->item;
  }

  public function setDescVideo($desc_video_)
  {
    $this->desc_video = Validation::validate( $desc_video_ );
  }

  public function getDescVideo()
  {
    return $this->desc_video;
  }

  public function setEstado($estado_)
  {
    $this->estado = Validation::validate( $estado_ );
  }

  public function getEstado()
  {
    return $this->estado;
  }

}
