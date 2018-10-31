<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class BuzonContactoController
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
            $buzon_contacto  = new BuzonContacto();

            $data = $buzon_contacto->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setBuzonContacto($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $buzon_contacto  = new BuzonContacto($this->cnx);

            $bean_buzon_contacto = new BeanBuzonContacto();
            
            $bean_buzon_contacto->setId($id);
            $bean_buzon_contacto->setNombre($nombre);
            $bean_buzon_contacto->setDni($dni);
            $bean_buzon_contacto->setEmail($email);
            $bean_buzon_contacto->setTelefono($telefono);
            $bean_buzon_contacto->setFecha($fecha);
            
            $data = $buzon_contacto->save($bean_buzon_contacto) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateBuzonContacto($params = array())
    {
        try
        {
            
            extract($params) ; 

            $buzon_contacto  = new BuzonContacto($this->cnx);
            $bean_buzon_contacto = new BeanBuzonContacto();
            
            $bean_buzon_contacto->setId($id);
            $bean_buzon_contacto->setNombre($nombre);
            $bean_buzon_contacto->setDni($dni);
            $bean_buzon_contacto->setEmail($email);
            $bean_buzon_contacto->setTelefono($telefono);
            $bean_buzon_contacto->setFecha($fecha);

            $data = $buzon_contacto->update($bean_buzon_contacto) ;
            
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

            $buzon_contacto  = new BuzonContacto($this->cnx);
            $bean_buzon_contacto = new BeanBuzonContacto();
            
            $bean_buzon_contacto->setId($id);
            $bean_buzon_contacto->setEstado($estado);

            $data = $buzon_contacto->update($bean_buzon_contacto) ;
            
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
            $buzon_contacto  = new BuzonContacto();

            $bean_buzon_contacto = new BeanBuzonContacto();

            $bean_buzon_contacto->setId($id);

            $data = $buzon_contacto->getById( $bean_buzon_contacto) ;

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
            $buzon_contacto  = new BuzonContacto();

            $bean_buzon_contacto = new BeanBuzonContacto();

            $bean_buzon_contacto->setId($id);

            $data = $buzon_contacto->deleteById( $bean_buzon_contacto ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
