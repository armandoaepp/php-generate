<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanRegion{
  # Constructor
  public function __construct(){}

  # Atributos
  private $region_id;
  private $nombre;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setRegionId($region_id_)
  {
    $this->region_id = Validation::validate( $region_id_ );
  }

  public function getRegionId()
  {
    return $this->region_id;
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
