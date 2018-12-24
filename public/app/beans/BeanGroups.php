<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanGroups{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $name;
    private $description;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name_)
    {
        $this->name = Validation::validate( $name_ );
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDescription($description_)
    {
        $this->description = Validation::validate( $description_ );
    }

    public function getDescription()
    {
        return $this->description;
    }

}
