<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class SlidehomeController
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
            $slidehome  = new Slidehome();

            $data = $slidehome->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setSlidehome($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $slidehome  = new Slidehome($this->cnx);

            $bean_slidehome = new BeanSlidehome();
            
            $bean_slidehome->setId($id);
            $bean_slidehome->setTitulo($titulo);
            $bean_slidehome->setSubtitulo($subtitulo);
            $bean_slidehome->setDescripcion($descripcion);
            $bean_slidehome->setImagen($imagen);
            $bean_slidehome->setUrl($url);
            $bean_slidehome->setOrden($orden);
            $bean_slidehome->setFecha($fecha);
            
            $data = $slidehome->save($bean_slidehome) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateSlidehome($params = array())
    {
        try
        {
            
            extract($params) ; 

            $slidehome  = new Slidehome($this->cnx);
            $bean_slidehome = new BeanSlidehome();
            
            $bean_slidehome->setId($id);
            $bean_slidehome->setTitulo($titulo);
            $bean_slidehome->setSubtitulo($subtitulo);
            $bean_slidehome->setDescripcion($descripcion);
            $bean_slidehome->setImagen($imagen);
            $bean_slidehome->setUrl($url);
            $bean_slidehome->setOrden($orden);
            $bean_slidehome->setFecha($fecha);

            $data = $slidehome->update($bean_slidehome) ;
            
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

            $slidehome  = new Slidehome($this->cnx);
            $bean_slidehome = new BeanSlidehome();
            
            $bean_slidehome->setId($id);
            $bean_slidehome->setEstado($estado);

            $data = $slidehome->update($bean_slidehome) ;
            
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
            $slidehome  = new Slidehome();

            $bean_slidehome = new BeanSlidehome();

            $bean_slidehome->setId($id);

            $data = $slidehome->getById( $bean_slidehome) ;

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
            $slidehome  = new Slidehome();

            $bean_slidehome = new BeanSlidehome();

            $bean_slidehome->setId($id);

            $data = $slidehome->deleteById( $bean_slidehome ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
