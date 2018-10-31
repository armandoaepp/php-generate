<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanBuzonContacto{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $nombre;
    private $dni;
    private $email;
    private $telefono;
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

    public function setNombre($nombre_)
    {
        $this->nombre = Validation::validate( $nombre_ );
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setDni($dni_)
    {
        $this->dni = Validation::validate( $dni_ );
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function setEmail($email_)
    {
        $this->email = Validation::validate( $email_ );
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefono($telefono_)
    {
        $this->telefono = Validation::validate( $telefono_ );
    }

    public function getTelefono()
    {
        return $this->telefono;
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