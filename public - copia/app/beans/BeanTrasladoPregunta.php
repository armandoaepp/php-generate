<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanTrasladoPregunta{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $pregunta;
    private $respuesta;
    private $orden;
    private $estado;
    private $fecha;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setPregunta($pregunta_)
    {
        $this->pregunta = Validation::validate( $pregunta_ );
    }

    public function getPregunta()
    {
        return $this->pregunta;
    }

    public function setRespuesta($respuesta_)
    {
        $this->respuesta = Validation::validate( $respuesta_ );
    }

    public function getRespuesta()
    {
        return $this->respuesta;
    }

    public function setOrden($orden_)
    {
        $this->orden = Validation::validate( $orden_ );
    }

    public function getOrden()
    {
        return $this->orden;
    }

    public function setEstado($estado_)
    {
        $this->estado = Validation::validate( $estado_ );
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setFecha($fecha_)
    {
        $this->fecha = Validation::validate( $fecha_ );
    }

    public function getFecha()
    {
        return $this->fecha;
    }

}
?>