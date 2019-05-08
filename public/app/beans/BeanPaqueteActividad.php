<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPaqueteActividad{
  # Constructor
  public function __construct(){}

  # Atributos
  private $paquete_actividad_id;
  private $paquete_id;
  private $actividad_id;
  private $horas;
  private $descripcion;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setPaqueteActividadId($paquete_actividad_id_)
  {
    $this->paquete_actividad_id = Validation::validate( $paquete_actividad_id_ );
  }

  public function getPaqueteActividadId()
  {
    return $this->paquete_actividad_id;
  }

  public function setPaqueteId($paquete_id_)
  {
    $this->paquete_id = Validation::validate( $paquete_id_ );
  }

  public function getPaqueteId()
  {
    return $this->paquete_id;
  }

  public function setActividadId($actividad_id_)
  {
    $this->actividad_id = Validation::validate( $actividad_id_ );
  }

  public function getActividadId()
  {
    return $this->actividad_id;
  }

  public function setHoras($horas_)
  {
    $this->horas = Validation::validate( $horas_ );
  }

  public function getHoras()
  {
    return $this->horas;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
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
