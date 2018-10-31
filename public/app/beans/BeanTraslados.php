<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanTraslados{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $imagen;
    private $presentacion;
    private $item1;
    private $item2;
    private $item3;
    private $item4;
    private $descitem1;
    private $descitem2;
    private $descitem3;
    private $descitem4;
    private $promocion;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitulo($titulo_)
    {
        $this->titulo = Validation::validate( $titulo_ );
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setPresentacion($presentacion_)
    {
        $this->presentacion = Validation::validate( $presentacion_ );
    }

    public function getPresentacion()
    {
        return $this->presentacion;
    }

    public function setItem1($item1_)
    {
        $this->item1 = Validation::validate( $item1_ );
    }

    public function getItem1()
    {
        return $this->item1;
    }

    public function setItem2($item2_)
    {
        $this->item2 = Validation::validate( $item2_ );
    }

    public function getItem2()
    {
        return $this->item2;
    }

    public function setItem3($item3_)
    {
        $this->item3 = Validation::validate( $item3_ );
    }

    public function getItem3()
    {
        return $this->item3;
    }

    public function setItem4($item4_)
    {
        $this->item4 = Validation::validate( $item4_ );
    }

    public function getItem4()
    {
        return $this->item4;
    }

    public function setDescitem1($descitem1_)
    {
        $this->descitem1 = Validation::validate( $descitem1_ );
    }

    public function getDescitem1()
    {
        return $this->descitem1;
    }

    public function setDescitem2($descitem2_)
    {
        $this->descitem2 = Validation::validate( $descitem2_ );
    }

    public function getDescitem2()
    {
        return $this->descitem2;
    }

    public function setDescitem3($descitem3_)
    {
        $this->descitem3 = Validation::validate( $descitem3_ );
    }

    public function getDescitem3()
    {
        return $this->descitem3;
    }

    public function setDescitem4($descitem4_)
    {
        $this->descitem4 = Validation::validate( $descitem4_ );
    }

    public function getDescitem4()
    {
        return $this->descitem4;
    }

    public function setPromocion($promocion_)
    {
        $this->promocion = Validation::validate( $promocion_ );
    }

    public function getPromocion()
    {
        return $this->promocion;
    }

}
?>