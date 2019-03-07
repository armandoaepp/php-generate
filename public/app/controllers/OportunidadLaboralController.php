<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class OportunidadLaboralController
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
      $oportunidad_laboral  = new OportunidadLaboral();

      $data = $oportunidad_laboral->getAll();

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

      $oportunidad_laboral  = new OportunidadLaboral();

      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setEstado($estado);

      $data = $oportunidad_laboral->getByEstado($bean_oportunidad_laboral);

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

      $oportunidad_laboral  = new OportunidadLaboral($this->cnx);

      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setEmpresaId($empresa_id);
      $bean_oportunidad_laboral->setTitulo($titulo);
      $bean_oportunidad_laboral->setTipo($tipo);
      $bean_oportunidad_laboral->setVacantes($vacantes);
      $bean_oportunidad_laboral->setRequisitos($requisitos);
      $bean_oportunidad_laboral->setConocimientos($conocimientos);
      $bean_oportunidad_laboral->setSalario($salario);
      $bean_oportunidad_laboral->setNombrecontacto($nombrecontacto);
      $bean_oportunidad_laboral->setTelefonocontacto($telefonocontacto);
      $bean_oportunidad_laboral->setEmailcontacto($emailcontacto);
      $bean_oportunidad_laboral->setItem($item);
      $bean_oportunidad_laboral->setPublicar($publicar);

      $data = $oportunidad_laboral->save($bean_oportunidad_laboral) ;

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

      $oportunidad_laboral  = new OportunidadLaboral($this->cnx);
      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setId($id);
      $bean_oportunidad_laboral->setEmpresaId($empresa_id);
      $bean_oportunidad_laboral->setTitulo($titulo);
      $bean_oportunidad_laboral->setTipo($tipo);
      $bean_oportunidad_laboral->setVacantes($vacantes);
      $bean_oportunidad_laboral->setRequisitos($requisitos);
      $bean_oportunidad_laboral->setConocimientos($conocimientos);
      $bean_oportunidad_laboral->setSalario($salario);
      $bean_oportunidad_laboral->setNombrecontacto($nombrecontacto);
      $bean_oportunidad_laboral->setTelefonocontacto($telefonocontacto);
      $bean_oportunidad_laboral->setEmailcontacto($emailcontacto);
      // $bean_oportunidad_laboral->setItem($item);
      $bean_oportunidad_laboral->setPublicar($publicar);

      $data = $oportunidad_laboral->update($bean_oportunidad_laboral) ;

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

      $oportunidad_laboral  = new OportunidadLaboral($this->cnx);

      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setId($id);
      $bean_oportunidad_laboral->setEstado($estado);

      $data = $oportunidad_laboral->updateEstado($bean_oportunidad_laboral) ;

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
      $oportunidad_laboral  = new OportunidadLaboral();

      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setId($id);

      $data = $oportunidad_laboral->find( $bean_oportunidad_laboral) ;
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

      $oportunidad_laboral  = new OportunidadLaboral();

      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setId($id);

      $data = $oportunidad_laboral->deleteById( $bean_oportunidad_laboral ) ;

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

      $oportunidad_laboral  = new OportunidadLaboral($this->cnx);
      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setId($id);
      $bean_oportunidad_laboral->setPublicar($publicar);

      $data = $oportunidad_laboral->updatePublish($bean_oportunidad_laboral) ;

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

      $oportunidad_laboral  = new OportunidadLaboral($this->cnx);
      $bean_oportunidad_laboral = new BeanOportunidadLaboral();

      $bean_oportunidad_laboral->setPublicar($publicar);

      $data = $oportunidad_laboral->getPublished($bean_oportunidad_laboral) ;

      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function countRows()
  {
    try
    {
      $oportunidad_laboral  = new OportunidadLaboral();

      $data = $oportunidad_laboral->countRows() ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
