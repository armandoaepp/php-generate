<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class NoticiasController
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
            $noticias  = new Noticias();

            $data = $noticias->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setNoticias($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $noticias  = new Noticias($this->cnx);

            $bean_noticias = new BeanNoticias();
            
            $bean_noticias->setId($id);
            $bean_noticias->setTitulo($titulo);
            $bean_noticias->setDescripcion($descripcion);
            $bean_noticias->setImagen($imagen);
            $bean_noticias->setBanner($banner);
            $bean_noticias->setNombreseo($nombreseo);
            $bean_noticias->setOrden($orden);
            $bean_noticias->setFecha($fecha);
            $bean_noticias->setActivo($activo);
            
            $data = $noticias->save($bean_noticias) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateNoticias($params = array())
    {
        try
        {
            
            extract($params) ; 

            $noticias  = new Noticias($this->cnx);
            $bean_noticias = new BeanNoticias();
            
            $bean_noticias->setId($id);
            $bean_noticias->setTitulo($titulo);
            $bean_noticias->setDescripcion($descripcion);
            $bean_noticias->setImagen($imagen);
            $bean_noticias->setBanner($banner);
            $bean_noticias->setNombreseo($nombreseo);
            $bean_noticias->setOrden($orden);
            $bean_noticias->setFecha($fecha);
            $bean_noticias->setActivo($activo);

            $data = $noticias->update($bean_noticias) ;
            
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

            $noticias  = new Noticias($this->cnx);
            $bean_noticias = new BeanNoticias();
            
            $bean_noticias->setId($id);
            $bean_noticias->setEstado($estado);

            $data = $noticias->update($bean_noticias) ;
            
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
            $noticias  = new Noticias();

            $bean_noticias = new BeanNoticias();

            $bean_noticias->setId($id);

            $data = $noticias->getById( $bean_noticias) ;

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
            $noticias  = new Noticias();

            $bean_noticias = new BeanNoticias();

            $bean_noticias->setId($id);

            $data = $noticias->deleteById( $bean_noticias ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
