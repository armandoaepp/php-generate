<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanInfoAsociado{
  # Constructor
  public function __construct(){}

  # Atributos
  private $info_asociado_id;
  private $tipo_info_asociado_id;
  private $titulo;
  private $descripcion;
  private $url_file;
  private $publicar = "S" ;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setInfoAsociadoId($info_asociado_id_)
  {
    $this->info_asociado_id = Validation::validate( $info_asociado_id_ );
  }

  public function getInfoAsociadoId()
  {
    return $this->info_asociado_id;
  }

  public function setTipoInfoAsociadoId($tipo_info_asociado_id_)
  {
    $this->tipo_info_asociado_id = Validation::validate( $tipo_info_asociado_id_ );
  }

  public function getTipoInfoAsociadoId()
  {
    return $this->tipo_info_asociado_id;
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

  public function setUrlFile($url_file_)
  {
    $this->url_file = Validation::validate( $url_file_ );
  }

  public function getUrlFile()
  {
    return $this->url_file;
  }

  public function setPublicar($publicar_)
  {
    $this->publicar = Validation::validate( $publicar_ );
  }

  public function getPublicar()
  {
    return $this->publicar;
  }

  public function setEstado($estado_)
  {
    $this->estado = Validation::validate( $estado_ );
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setCreatedAt($created_at_)
  {
    $this->created_at = Validation::validate( $created_at_ );
  }

  public function getCreatedAt()
  {
    if(empty($this->created_at))
    {
      $this->created_at = HelperDate::timestampsBd();
    }
    return $this->created_at;
  }

}
