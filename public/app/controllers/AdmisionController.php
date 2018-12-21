<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class AdmisionController
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
      $admision  = new Admision();

      $data = $admision->getAll();
      $data = Serialize::unSerializeArray($data);
        

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

      $admision  = new Admision($this->cnx);

      $bean_admision = new BeanAdmision();
            
      $bean_admision->setTitulo($titulo);
      $bean_admision->setImagen($imagen);
      $bean_admision->setRequisitos($requisitos);
      $bean_admision->setHorarios($horarios);
      $bean_admision->setInversion($inversion);
      $bean_admision->setEmail($email);
            
      $data = $admision->save($bean_admision) ;

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

      $admision  = new Admision($this->cnx);
      $bean_admision = new BeanAdmision();
            
      $bean_admision->setId($id);
      $bean_admision->setTitulo($titulo);
      $bean_admision->setImagen($imagen);
      $bean_admision->setRequisitos($requisitos);
      $bean_admision->setHorarios($horarios);
      $bean_admision->setInversion($inversion);
      $bean_admision->setEmail($email);

      $data = $admision->update($bean_admision) ;
            
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

      $admision  = new Admision($this->cnx);
      $bean_admision = new BeanAdmision();
            
      $bean_admision->setId($id);
      $bean_admision->setEstado($estado);

      $data = $admision->updateEstado($bean_admision) ;
            
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
      $admision  = new Admision();

      $bean_admision = new BeanAdmision();

      $bean_admision->setId($id);

      $data = $admision->find( $bean_admision) ;
      $data = Serialize::unSerializeArray($data);
        

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($params)
  {
    try
    {

      extract($params) ;

      $admision  = new Admision();

      $bean_admision = new BeanAdmision();

      $bean_admision->setId($id);

      $data = $admision->deleteById( $bean_admision ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
