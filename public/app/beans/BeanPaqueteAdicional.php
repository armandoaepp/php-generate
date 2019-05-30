<?php

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPaqueteAdicional{
  # Constructor
  public function __construct(){}

  # Atributos
  private $paquete_adicional_id;
  private $paquete_id;
  private $adicional_id;
  private $precio;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setPaqueteAdicionalId($paquete_adicional_id_)
  {
    $this->paquete_adicional_id = Validation::validate( $paquete_adicional_id_ );
  }

  public function getPaqueteAdicionalId()
  {
    return $this->paquete_adicional_id;
  }

  public function setPaqueteId($paquete_id_)
  {
    $this->paquete_id = Validation::validate( $paquete_id_ );
  }

  public function getPaqueteId()
  {
    return $this->paquete_id;
  }

  public function setAdicionalId($adicional_id_)
  {
    $this->adicional_id = Validation::validate( $adicional_id_ );
  }

  public function getAdicionalId()
  {
    return $this->adicional_id;
  }

  public function setPrecio($precio_)
  {
    $this->precio = Validation::validate( $precio_ );
  }

  public function getPrecio()
  {
    return $this->precio;
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
