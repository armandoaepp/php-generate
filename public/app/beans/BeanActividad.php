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
  private $actividad_id;
  private $nombre;
  private $descripcion;
  private $horas;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setActividadId($actividad_id_)
  {
    $this->actividad_id = Validation::validate( $actividad_id_ );
  }

  public function getActividadId()
  {
    return $this->actividad_id;
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
