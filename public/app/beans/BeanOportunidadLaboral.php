<?php

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanOportunidadLaboral{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $empresa_id;
    private $titulo;
    private $tipo;
    private $vacantes;
    private $requisitos;
    private $conocimientos;
    private $salario;
    private $nombrecontacto;
    private $telefonocontacto;
    private $emailcontacto;
    private $item;
    private $publicar = "S" ;
    private $estado = 1 ;
    private $created_up = NULL ;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setEmpresaId($empresa_id_)
    {
        $this->empresa_id = Validation::validate( $empresa_id_ );
    }

    public function getEmpresaId()
    {
        return $this->empresa_id;
    }

    public function setTitulo($titulo_)
    {
        $this->titulo = Validation::validate( $titulo_ );
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTipo($tipo_)
    {
        $this->tipo = Validation::validate( $tipo_ );
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setVacantes($vacantes_)
    {
        $this->vacantes = Validation::validate( $vacantes_ );
    }

    public function getVacantes()
    {
        return $this->vacantes;
    }

    public function setRequisitos($requisitos_)
    {
        $this->requisitos = Validation::validate( $requisitos_ );
    }

    public function getRequisitos()
    {
        return $this->requisitos;
    }

    public function setConocimientos($conocimientos_)
    {
        $this->conocimientos = Validation::validate( $conocimientos_ );
    }

    public function getConocimientos()
    {
        return $this->conocimientos;
    }

    public function setSalario($salario_)
    {
        $this->salario = Validation::validate( $salario_ );
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setNombrecontacto($nombrecontacto_)
    {
        $this->nombrecontacto = Validation::validate( $nombrecontacto_ );
    }

    public function getNombrecontacto()
    {
        return $this->nombrecontacto;
    }

    public function setTelefonocontacto($telefonocontacto_)
    {
        $this->telefonocontacto = Validation::validate( $telefonocontacto_ );
    }

    public function getTelefonocontacto()
    {
        return $this->telefonocontacto;
    }

    public function setEmailcontacto($emailcontacto_)
    {
        $this->emailcontacto = Validation::validate( $emailcontacto_ );
    }

    public function getEmailcontacto()
    {
        return $this->emailcontacto;
    }

    public function setItem($item_)
    {
        $this->item = Validation::validate( $item_ );
    }

    public function getItem()
    {
        if(!empty($this->item))
        {
            $oportunidad_laboral  = new OportunidadLaboral();

            $data = $oportunidad_laboral->countRow() ;

            if(!empty($data))
            {
                $this->item = $data['num_rows'];
            }

        }

        return $this->item;
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

    public function setCreatedUp($created_up_)
    {
        $this->created_up = Validation::validate( $created_up_ );
    }

    public function getCreatedUp()
    {
        return $this->created_up;
    }

}
