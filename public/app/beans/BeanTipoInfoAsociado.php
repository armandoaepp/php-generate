<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanTipoInfoAsociado{
  # Constructor
  public function __construct(){}

  # Atributos
  private $tipo_info_asociado_id;
  private $descripcion;
  private $publicar = "S" ;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setTipoInfoAsociadoId($tipo_info_asociado_id_)
  {
    $this->tipo_info_asociado_id = Validation::validate( $tipo_info_asociado_id_ );
  }

  public function getTipoInfoAsociadoId()
  {
    return $this->tipo_info_asociado_id;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
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

}
