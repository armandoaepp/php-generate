<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class CampusController
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
            $campus  = new Campus();

            $data = $campus->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setCampus($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $campus  = new Campus($this->cnx);

            $bean_campus = new BeanCampus();
            
            $bean_campus->setId($id);
            $bean_campus->setTitulo($titulo);
            $bean_campus->setSubtitulo($subtitulo);
            $bean_campus->setDescripcion($descripcion);
            $bean_campus->setImagen($imagen);
            $bean_campus->setUrl($url);
            $bean_campus->setOrden($orden);
            $bean_campus->setFecha($fecha);
            
            $data = $campus->save($bean_campus) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateCampus($params = array())
    {
        try
        {
            
            extract($params) ; 

            $campus  = new Campus($this->cnx);
            $bean_campus = new BeanCampus();
            
            $bean_campus->setId($id);
            $bean_campus->setTitulo($titulo);
            $bean_campus->setSubtitulo($subtitulo);
            $bean_campus->setDescripcion($descripcion);
            $bean_campus->setImagen($imagen);
            $bean_campus->setUrl($url);
            $bean_campus->setOrden($orden);
            $bean_campus->setFecha($fecha);

            $data = $campus->update($bean_campus) ;
            
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

            $campus  = new Campus($this->cnx);
            $bean_campus = new BeanCampus();
            
            $bean_campus->setId($id);
            $bean_campus->setEstado($estado);

            $data = $campus->update($bean_campus) ;
            
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
            $campus  = new Campus();

            $bean_campus = new BeanCampus();

            $bean_campus->setId($id);

            $data = $campus->getById( $bean_campus) ;

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
            $campus  = new Campus();

            $bean_campus = new BeanCampus();

            $bean_campus->setId($id);

            $data = $campus->deleteById( $bean_campus ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
