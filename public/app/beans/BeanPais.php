<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPais{
  # Constructor
  public function __construct(){}

  # Atributos
  private $pais_id;
  private $nombre;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setPaisId($pais_id_)
  {
    $this->pais_id = Validation::validate( $pais_id_ );
  }

  public function getPaisId()
  {
    return $this->pais_id;
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
