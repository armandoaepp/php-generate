<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanTipoHabitacion{
  # Constructor
  public function __construct(){}

  # Atributos
  private $tipo_habitacion_id;
  private $nombre;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setTipoHabitacionId($tipo_habitacion_id_)
  {
    $this->tipo_habitacion_id = Validation::validate( $tipo_habitacion_id_ );
  }

  public function getTipoHabitacionId()
  {
    return $this->tipo_habitacion_id;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
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
