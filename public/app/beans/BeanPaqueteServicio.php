<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPaqueteServicio{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $paquete_id;
  private $servicio_id;
  private $tipo;
  private $estado = 1 ;
  private $created_at = NULL ;

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

  public function setPaqueteId($paquete_id_)
  {
    $this->paquete_id = Validation::validate( $paquete_id_ );
  }

  public function getPaqueteId()
  {
    return $this->paquete_id;
  }

  public function setServicioId($servicio_id_)
  {
    $this->servicio_id = Validation::validate( $servicio_id_ );
  }

  public function getServicioId()
  {
    return $this->servicio_id;
  }

  public function setTipo($tipo_)
  {
    $this->tipo = Validation::validate( $tipo_ );
  }

  public function getTipo()
  {
    return $this->tipo;
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
