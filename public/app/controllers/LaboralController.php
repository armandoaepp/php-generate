<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class LaboralController
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
      $laboral  = new Laboral();

      $data = $laboral->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado( $params = array() )
  {
    try
    {
            
      extract($params) ; 

      $laboral  = new Laboral();
            
      $bean_laboral = new BeanLaboral();
            
      $bean_laboral->setEstado($estado);

      $data = $laboral->getByEstado($bean_laboral);

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

      $laboral  = new Laboral($this->cnx);

      $bean_laboral = new BeanLaboral();
            
      $bean_laboral->setEmpresaId($empresa_id);
      $bean_laboral->setTitulo($titulo);
      $bean_laboral->setTipo($tipo);
      $bean_laboral->setVacantes($vacantes);
      $bean_laboral->setRequisitos($requisitos);
      $bean_laboral->setConocimientos($conocimientos);
      $bean_laboral->setSalario($salario);
      $bean_laboral->setNombrecontacto($nombrecontacto);
      $bean_laboral->setTelefonocontacto($telefonocontacto);
      $bean_laboral->setEmailcontacto($emailcontacto);
      $bean_laboral->setItem($item);
      $bean_laboral->setPublicar($publicar);
            
      $data = $laboral->save($bean_laboral) ;

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

      $laboral  = new Laboral($this->cnx);
      $bean_laboral = new BeanLaboral();
            
      $bean_laboral->setId($id);
      $bean_laboral->setEmpresaId($empresa_id);
      $bean_laboral->setTitulo($titulo);
      $bean_laboral->setTipo($tipo);
      $bean_laboral->setVacantes($vacantes);
      $bean_laboral->setRequisitos($requisitos);
      $bean_laboral->setConocimientos($conocimientos);
      $bean_laboral->setSalario($salario);
      $bean_laboral->setNombrecontacto($nombrecontacto);
      $bean_laboral->setTelefonocontacto($telefonocontacto);
      $bean_laboral->setEmailcontacto($emailcontacto);
      $bean_laboral->setItem($item);
      $bean_laboral->setPublicar($publicar);

      $data = $laboral->update($bean_laboral) ;
            
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

      $laboral  = new Laboral($this->cnx);
            
      $bean_laboral = new BeanLaboral();
            
      $bean_laboral->setId($id);
      $bean_laboral->setEstado($estado);

      $data = $laboral->updateEstado($bean_laboral) ;
            
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
      $laboral  = new Laboral();

      $bean_laboral = new BeanLaboral();

      $bean_laboral->setId($id);

      $data = $laboral->find( $bean_laboral) ;
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

      $laboral  = new Laboral();

      $bean_laboral = new BeanLaboral();

      $bean_laboral->setId($id);

      $data = $laboral->deleteById( $bean_laboral ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updatePublish($params = array())
  {
    try
    {
            
      extract($params) ; 

      $laboral  = new Laboral($this->cnx);
      $bean_laboral = new BeanLaboral();
            
      $bean_laboral->setId($id);
      $bean_laboral->setPublicar($publicar);

      $data = $laboral->updatePublish($bean_laboral) ;
            
      return $data;
    }
    catch (Exception $e)
    {
           throw new Exception($e->getMessage());
    }
  }

  public function getPublished($params = array())
  {
    try
    {
            
      extract($params) ; 

      $laboral  = new Laboral($this->cnx);
      $bean_laboral = new BeanLaboral();
            
      $bean_laboral->setPublicar($publicar);

      $data = $laboral->getPublished($bean_laboral) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
