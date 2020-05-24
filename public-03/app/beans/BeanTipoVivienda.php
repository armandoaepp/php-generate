<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanTipoVivienda{
  # Constructor
  public function __construct(){}

  # Atributos
  private $tipo_vivienda_id;
  private $desc_vivienda;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setTipoViviendaId($tipo_vivienda_id_)
  {
    $this->tipo_vivienda_id = Validation::validate( $tipo_vivienda_id_ );
  }

  public function getTipoViviendaId()
  {
    return $this->tipo_vivienda_id;
  }

  public function setDescVivienda($desc_vivienda_)
  {
    $this->desc_vivienda = Validation::validate( $desc_vivienda_ );
  }

  public function getDescVivienda()
  {
    return $this->desc_vivienda;
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
