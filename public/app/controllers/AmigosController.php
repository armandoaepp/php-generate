<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class AmigosController
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
            $amigos  = new Amigos();

            $data = $amigos->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setAmigos($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $amigos  = new Amigos($this->cnx);

            $bean_amigos = new BeanAmigos();
            
            $bean_amigos->setId($id);
            $bean_amigos->setTitulo($titulo);
            $bean_amigos->setImagen($imagen);
            $bean_amigos->setImagen2($imagen_2);
            $bean_amigos->setEmail($email);
            $bean_amigos->setOrden($orden);
            $bean_amigos->setFecha($fecha);
            
            $data = $amigos->save($bean_amigos) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateAmigos($params = array())
    {
        try
        {
            
            extract($params) ; 

            $amigos  = new Amigos($this->cnx);
            $bean_amigos = new BeanAmigos();
            
            $bean_amigos->setId($id);
            $bean_amigos->setTitulo($titulo);
            $bean_amigos->setImagen($imagen);
            $bean_amigos->setImagen2($imagen_2);
            $bean_amigos->setEmail($email);
            $bean_amigos->setOrden($orden);
            $bean_amigos->setFecha($fecha);

            $data = $amigos->update($bean_amigos) ;
            
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

            $amigos  = new Amigos($this->cnx);
            $bean_amigos = new BeanAmigos();
            
            $bean_amigos->setId($id);
            $bean_amigos->setEstado($estado);

            $data = $amigos->update($bean_amigos) ;
            
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
            $amigos  = new Amigos();

            $bean_amigos = new BeanAmigos();

            $bean_amigos->setId($id);

            $data = $amigos->getById( $bean_amigos) ;

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
            $amigos  = new Amigos();

            $bean_amigos = new BeanAmigos();

            $bean_amigos->setId($id);

            $data = $amigos->deleteById( $bean_amigos ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
