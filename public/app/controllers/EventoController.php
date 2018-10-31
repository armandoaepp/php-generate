<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class EventoController
{
    private $cnx;

    public function __construct($cnx = null)
    {
        $this->cnx = $cnx;
    }
    
    public function getAll()
    {
        try
        {
            $evento  = new Evento();

            $data = $evento->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setEvento($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $evento  = new Evento($this->cnx);

            $bean_evento = new BeanEvento();
            
            $bean_evento->setId($id);
            $bean_evento->setTitulo($titulo);
            $bean_evento->setDescripcion($descripcion);
            $bean_evento->setImagen($imagen);
            $bean_evento->setNombreseo($nombreseo);
            $bean_evento->setOrden($orden);
            $bean_evento->setFecha($fecha);
            
            $data = $evento->save($bean_evento) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateEvento($params = array())
    {
        try
        {
            
            extract($params) ; 

            $evento  = new Evento($this->cnx);
            $bean_evento = new BeanEvento();
            
            $bean_evento->setId($id);
            $bean_evento->setTitulo($titulo);
            $bean_evento->setDescripcion($descripcion);
            $bean_evento->setImagen($imagen);
            $bean_evento->setNombreseo($nombreseo);
            $bean_evento->setOrden($orden);
            $bean_evento->setFecha($fecha);

            $data = $evento->update($bean_evento) ;
            
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

    public function updateEstado($params = array())
    {
        try
        {
            
            extract($params) ; 

            $evento  = new Evento($this->cnx);
            $bean_evento = new BeanEvento();
            
            $bean_evento->setId($id);
            $bean_evento->setEstado($estado);

            $data = $evento->update($bean_evento) ;
            
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

    public function getById($id)
    {
        try
        {
            $evento  = new Evento();

            $bean_evento = new BeanEvento();

            $bean_evento->setId($id);

            $data = $evento->getById( $bean_evento) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function deleteById($id)
    {
        try
        {
            $evento  = new Evento();

            $bean_evento = new BeanEvento();

            $bean_evento->setId($id);

            $data = $evento->deleteById( $bean_evento ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
