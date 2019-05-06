<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanActividad{
  # Constructor
  public function __construct(){}

  # Atributos
  private $tipo_paquete_id;
  private $nombre;
  private $descripcion;
  private $horas;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setTipoPaqueteId($tipo_paquete_id_)
  {
    $this->tipo_paquete_id = Validation::validate( $tipo_paquete_id_ );
  }

  public function getTipoPaqueteId()
  {
    return $this->tipo_paquete_id;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setHoras($horas_)
  {
    $this->horas = Validation::validate( $horas_ );
  }

  public function getHoras()
  {
    return $this->horas;
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
