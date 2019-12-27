<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPlato{
  # Constructor
  public function __construct(){}

  # Atributos
  private $plato_id;
  private $categoria_id;
  private $nombre;
  private $descripcion;
  private $precio;
  private $descuento;
  private $precio_descuento;
  private $imagen = "" ;
  private $fecha_ini_promo;
  private $fecha_fin_promo;
  private $num_visitas;
  private $publicar = "S" ;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setPlatoId($plato_id_)
  {
    $this->plato_id = Validation::validate( $plato_id_ );
  }

  public function getPlatoId()
  {
    return $this->plato_id;
  }

  public function setCategoriaId($categoria_id_)
  {
    $this->categoria_id = Validation::validate( $categoria_id_ );
  }

  public function getCategoriaId()
  {
    return $this->categoria_id;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setPrecio($precio_)
  {
    $this->precio = Validation::validate( $precio_ );
  }

  public function getPrecio()
  {
    return $this->precio;
  }

  public function setDescuento($descuento_)
  {
    $this->descuento = Validation::validate( $descuento_ );
  }

  public function getDescuento()
  {
    return $this->descuento;
  }

  public function setPrecioDescuento($precio_descuento_)
  {
    $this->precio_descuento = Validation::validate( $precio_descuento_ );
  }

  public function getPrecioDescuento()
  {
    return $this->precio_descuento;
  }

  public function setImagen($imagen_)
  {
    $this->imagen = Validation::validate( $imagen_ );
  }

  public function getImagen()
  {
    return $this->imagen;
  }

  public function setFechaIniPromo($fecha_ini_promo_)
  {
    $this->fecha_ini_promo = Validation::validate( $fecha_ini_promo_ );
  }

  public function getFechaIniPromo()
  {
    return $this->fecha_ini_promo;
  }

  public function setFechaFinPromo($fecha_fin_promo_)
  {
    $this->fecha_fin_promo = Validation::validate( $fecha_fin_promo_ );
  }

  public function getFechaFinPromo()
  {
    return $this->fecha_fin_promo;
  }

  public function setNumVisitas($num_visitas_)
  {
    $this->num_visitas = Validation::validate( $num_visitas_ );
  }

  public function getNumVisitas()
  {
    return $this->num_visitas;
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
