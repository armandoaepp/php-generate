<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class TextosController
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
            $textos  = new Textos();

            $data = $textos->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setTextos($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $textos  = new Textos($this->cnx);

            $bean_textos = new BeanTextos();
            
            $bean_textos->setId($id);
            $bean_textos->setIdentificador($identificador);
            $bean_textos->setTitulo($titulo);
            $bean_textos->setDescripcion($descripcion);
            $bean_textos->setOrden($orden);
            $bean_textos->setFecha($fecha);
            
            $data = $textos->save($bean_textos) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateTextos($params = array())
    {
        try
        {
            
            extract($params) ; 

            $textos  = new Textos($this->cnx);
            $bean_textos = new BeanTextos();
            
            $bean_textos->setId($id);
            $bean_textos->setIdentificador($identificador);
            $bean_textos->setTitulo($titulo);
            $bean_textos->setDescripcion($descripcion);
            $bean_textos->setOrden($orden);
            $bean_textos->setFecha($fecha);

            $data = $textos->update($bean_textos) ;
            
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

            $textos  = new Textos($this->cnx);
            $bean_textos = new BeanTextos();
            
            $bean_textos->setId($id);
            $bean_textos->setEstado($estado);

            $data = $textos->update($bean_textos) ;
            
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
            $textos  = new Textos();

            $bean_textos = new BeanTextos();

            $bean_textos->setId($id);

            $data = $textos->getById( $bean_textos) ;

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
            $textos  = new Textos();

            $bean_textos = new BeanTextos();

            $bean_textos->setId($id);

            $data = $textos->deleteById( $bean_textos ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
