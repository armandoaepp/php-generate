<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanCuentaHost{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $propietario_id;
  private $plan_id;
  private $dominio;
  private $descripcion;
  private $solo_host;
  private $tiempo_alq;
  private $facturado;
  private $estado = 1 ;
  private $created_at;
  private $updated_at;

  #Auto Increment Item

  # METODOS
  public function setId($id_)
  {
    $this->id = Validation::validate( $id_ );
  }

  public function getId()
  {
    return $this->id;
  }

  public function setPropietarioId($propietario_id_)
  {
    $this->propietario_id = Validation::validate( $propietario_id_ );
  }

  public function getPropietarioId()
  {
    return $this->propietario_id;
  }

  public function setPlanId($plan_id_)
  {
    $this->plan_id = Validation::validate( $plan_id_ );
  }

  public function getPlanId()
  {
    return $this->plan_id;
  }

  public function setDominio($dominio_)
  {
    $this->dominio = Validation::validate( $dominio_ );
  }

  public function getDominio()
  {
    return $this->dominio;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setSoloHost($solo_host_)
  {
    $this->solo_host = Validation::validate( $solo_host_ );
  }

  public function getSoloHost()
  {
    return $this->solo_host;
  }

  public function setTiempoAlq($tiempo_alq_)
  {
    $this->tiempo_alq = Validation::validate( $tiempo_alq_ );
  }

  public function getTiempoAlq()
  {
    return $this->tiempo_alq;
  }

  public function setFacturado($facturado_)
  {
    $this->facturado = Validation::validate( $facturado_ );
  }

  public function getFacturado()
  {
    return $this->facturado;
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
    return $this->created_at;
  }

  public function setUpdatedAt($updated_at_)
  {
    $this->updated_at = Validation::validate( $updated_at_ );
  }

  public function getUpdatedAt()
  {
    return $this->updated_at;
  }

}
