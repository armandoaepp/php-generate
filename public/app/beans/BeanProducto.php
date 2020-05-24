<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanProducto{
  # Constructor
  public function __construct(){}

  # Atributos
  private $producto_id;
  private $sub_categoria_id;
  private $categoria_id;
  private $codigo;
  private $nombre;
  private $descripcion_corta;
  private $precio;
  private $descuento;
  private $precio_descuento;
  private $num_visitas;
  private $publicar = "S" ;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setProductoId($producto_id_)
  {
    $this->producto_id = Validation::validate( $producto_id_ );
  }

  public function getProductoId()
  {
    return $this->producto_id;
  }

  public function setSubCategoriaId($sub_categoria_id_)
  {
    $this->sub_categoria_id = Validation::validate( $sub_categoria_id_ );
  }

  public function getSubCategoriaId()
  {
    return $this->sub_categoria_id;
  }

  public function setCategoriaId($categoria_id_)
  {
    $this->categoria_id = Validation::validate( $categoria_id_ );
  }

  public function getCategoriaId()
  {
    return $this->categoria_id;
  }

  public function setCodigo($codigo_)
  {
    $this->codigo = Validation::validate( $codigo_ );
  }

  public function getCodigo()
  {
    return $this->codigo;
  }

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setDescripcionCorta($descripcion_corta_)
  {
    $this->descripcion_corta = Validation::validate( $descripcion_corta_ );
  }

  public function getDescripcionCorta()
  {
    return $this->descripcion_corta;
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
