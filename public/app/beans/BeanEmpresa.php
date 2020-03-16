<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanEmpresa{
  # Constructor
  public function __construct(){}

  # Atributos
  private $empresa_id;
  private $ruc;
  private $nombre;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setEmpresaId($empresa_id_)
  {
    $this->empresa_id = Validation::validate( $empresa_id_ );
  }

  public function getEmpresaId()
  {
    return $this->empresa_id;
  }

  public function setRuc($ruc_)
  {
    $this->ruc = Validation::validate( $ruc_ );
  }

  public function getRuc()
  {
    return $this->ruc;
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
