<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class CategoriaController
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
            $categoria  = new Categoria();

            $data = $categoria->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function save($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $categoria  = new Categoria($this->cnx);

            $bean_categoria = new BeanCategoria();
            
            $bean_categoria->setNombre($nombre);
            $bean_categoria->setUrl($url);
            $bean_categoria->setImagen($imagen);
            $bean_categoria->setPublicar($publicar);
            
            $data = $categoria->save($bean_categoria) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function update($params = array())
    {
        try
        {
            
            extract($params) ; 

            $categoria  = new Categoria($this->cnx);
            $bean_categoria = new BeanCategoria();
            
            $bean_categoria->setIdcategoria($idcategoria);
            $bean_categoria->setNombre($nombre);
            $bean_categoria->setUrl($url);
            $bean_categoria->setImagen($imagen);
            $bean_categoria->setPublicar($publicar);

            $data = $categoria->update($bean_categoria) ;
            
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

            $categoria  = new Categoria($this->cnx);
            $bean_categoria = new BeanCategoria();
            
            $bean_categoria->setIdcategoria($idcategoria);
            $bean_categoria->setEstado($estado);

            $data = $categoria->update($bean_categoria) ;
            
            return $data;
        }
        catch (Exception $e)
        {
           throw new Exception($e->getMessage());
        }
    }

    public function find($id)
    {
        try
        {
            $categoria  = new Categoria();

            $bean_categoria = new BeanCategoria();

            $bean_categoria->setIdcategoria($id);

            $data = $categoria->find( $bean_categoria) ;

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
            $categoria  = new Categoria();

            $bean_categoria = new BeanCategoria();

            $bean_categoria->setIdcategoria($id);

            $data = $categoria->deleteById( $bean_categoria ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
