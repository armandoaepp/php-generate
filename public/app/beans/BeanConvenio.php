<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanConvenio{
  # Constructor
  public function __construct(){}

  # Atributos
  private $convenio_id;
  private $tipo_convenio_id;
  private $nombre;
  private $caracteristica;
  private $precio;
  private $glosa;
  private $publicar = "S" ;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setConvenioId($convenio_id_)
  {
    $this->convenio_id = Validation::validate( $convenio_id_ );
  }

  public function getConvenioId()
  {
    return $this->convenio_id;
  }

  public function setTipoConvenioId($tipo_convenio_id_)
  {
    $this->tipo_convenio_id = Validation::validate( $tipo_convenio_id_ );
  }

  public function getTipoConvenioId()
  {
    return $this->tipo_convenio_id;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setCaracteristica($caracteristica_)
  {
    $this->caracteristica = Validation::validate( $caracteristica_ );
  }

  public function getCaracteristica()
  {
    return $this->caracteristica;
  }

  public function setPrecio($precio_)
  {
    $this->precio = Validation::validate( $precio_ );
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function setGlosa($glosa_)
  {
    $this->glosa = Validation::validate( $glosa_ );
  }

  public function getGlosa()
  {
    return $this->glosa;
  }

  public function setPublicar($publicar_)
  {
    $this->publicar = Validation::validate( $publicar_ );
  }

  public function getPublicar()
  {
    return $this->publicar;
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
