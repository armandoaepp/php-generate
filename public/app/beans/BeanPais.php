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
  private $id;
  private $nombre;
  private $tld;
  private $code;
  private $code_int;
  private $estado = 1 ;

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

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setTld($tld_)
  {
    $this->tld = Validation::validate( $tld_ );
  }

  public function getTld()
  {
    return $this->tld;
  }

  public function setCode($code_)
  {
    $this->code = Validation::validate( $code_ );
  }

  public function getCode()
  {
    return $this->code;
  }

  public function setCodeInt($code_int_)
  {
    $this->code_int = Validation::validate( $code_int_ );
  }

  public function getCodeInt()
  {
    return $this->code_int;
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
