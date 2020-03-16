<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanVideo{
  # Constructor
  public function __construct(){}

  # Atributos
  private $video_id;
  private $titulo;
  private $descripcion;
  private $tipo_video;
  private $url = "" ;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setVideoId($video_id_)
  {
    $this->video_id = Validation::validate( $video_id_ );
  }

  public function getVideoId()
  {
    return $this->video_id;
  }

  public function setTitulo($titulo_)
  {
    $this->titulo = Validation::validate( $titulo_ );
  }

  public function getTitulo()
  {
    return $this->titulo;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setTipoVideo($tipo_video_)
  {
    $this->tipo_video = Validation::validate( $tipo_video_ );
  }

  public function getTipoVideo()
  {
    return $this->tipo_video;
  }

  public function setUrl($url_)
  {
    $this->url = Validation::validate( $url_ );
  }

  public function getUrl()
  {
    return $this->url;
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
