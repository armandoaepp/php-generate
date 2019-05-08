<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPaqueteImg{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $paquete_id;
  private $imagen = "" ;
  private $item;
  private $estado = 1 ;

  #Auto Increment Item
  public $item_autoincrement = true;

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

  public function setImagen($imagen_)
  {
    $this->imagen = Validation::validate( $imagen_ );
  }

  public function getImagen()
  {
    return $this->imagen;
  }

  public function setItem($item_)
  {
    $this->item = Validation::validate( $item_ );
  }

  public function getItem()
  {
    if(empty($this->item) && $this->item_autoincrement)
    {
      $paquete_img  = new PaqueteImg();
      $data = $paquete_img->countRows() ;
      if(!empty($data))
      {
          $this->item = $data["num_rows"] + 1;
      }
    }
    return $this->item;
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
