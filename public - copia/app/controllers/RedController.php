<?php
# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp
 class RedController
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
            $red  = new Red();

            $data = $red->getAll();

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function setRed($params = array() )
    {
        try
        {
            
            extract($params) ; 

            $red  = new Red($this->cnx);

            $bean_red = new BeanRed();
            
            $bean_red->setId($id);
            $bean_red->setTitulo($titulo);
            $bean_red->setSubtitulo($subtitulo);
            $bean_red->setTipo($tipo);
            $bean_red->setVacantes($vacantes);
            $bean_red->setRequisitos($requisitos);
            $bean_red->setConocimientos($conocimientos);
            $bean_red->setSalario($salario);
            $bean_red->setNombrecontacto($nombrecontacto);
            $bean_red->setTelefonocontacto($telefonocontacto);
            $bean_red->setEmailcontacto($emailcontacto);
            $bean_red->setOrden($orden);
            $bean_red->setFecha($fecha);
            
            $data = $red->save($bean_red) ;

            return $data ;
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function updateRed($params = array())
    {
        try
        {
            
            extract($params) ; 

            $red  = new Red($this->cnx);
            $bean_red = new BeanRed();
            
            $bean_red->setId($id);
            $bean_red->setTitulo($titulo);
            $bean_red->setSubtitulo($subtitulo);
            $bean_red->setTipo($tipo);
            $bean_red->setVacantes($vacantes);
            $bean_red->setRequisitos($requisitos);
            $bean_red->setConocimientos($conocimientos);
            $bean_red->setSalario($salario);
            $bean_red->setNombrecontacto($nombrecontacto);
            $bean_red->setTelefonocontacto($telefonocontacto);
            $bean_red->setEmailcontacto($emailcontacto);
            $bean_red->setOrden($orden);
            $bean_red->setFecha($fecha);

            $data = $red->update($bean_red) ;
            
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

            $red  = new Red($this->cnx);
            $bean_red = new BeanRed();
            
            $bean_red->setId($id);
            $bean_red->setEstado($estado);

            $data = $red->update($bean_red) ;
            
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
            $red  = new Red();

            $bean_red = new BeanRed();

            $bean_red->setId($id);

            $data = $red->getById( $bean_red) ;

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
            $red  = new Red();

            $bean_red = new BeanRed();

            $bean_red->setId($id);

            $data = $red->deleteById( $bean_red ) ;

            return $data;

        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }

}
