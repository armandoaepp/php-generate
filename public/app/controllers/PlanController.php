<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PlanController
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
      $plan  = new Plan();

      $data = $plan->getAll();

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

      $plan  = new Plan();
            
      $bean_plan = new BeanPlan();
            
      $bean_plan->setEstado($estado);

      $data = $plan->getByEstado($bean_plan);

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

      $plan  = new Plan($this->cnx);

      $bean_plan = new BeanPlan();
            
      $bean_plan->setNombre($nombre);
      $bean_plan->setEspacio($espacio);
      $bean_plan->setNumDatabases($num_databases);
      $bean_plan->setNumMails($num_mails);
      $bean_plan->setCreatedAt($created_at);
      $bean_plan->setUpdatedAt($updated_at);
            
      $data = $plan->save($bean_plan) ;

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

      $plan  = new Plan($this->cnx);
      $bean_plan = new BeanPlan();
            
      $bean_plan->setId($id);
      $bean_plan->setNombre($nombre);
      $bean_plan->setEspacio($espacio);
      $bean_plan->setNumDatabases($num_databases);
      $bean_plan->setNumMails($num_mails);
      $bean_plan->setCreatedAt($created_at);
      $bean_plan->setUpdatedAt($updated_at);

      $data = $plan->update($bean_plan) ;
            
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

      $plan  = new Plan($this->cnx);
            
      $bean_plan = new BeanPlan();
            
      $bean_plan->setId($id);
      $bean_plan->setEstado($estado);

      $data = $plan->updateEstado($bean_plan) ;
            
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
      $plan  = new Plan();

      $bean_plan = new BeanPlan();

      $bean_plan->setId($id);

      $data = $plan->find( $bean_plan) ;
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

      $plan  = new Plan();

      $bean_plan = new BeanPlan();

      $bean_plan->setId($id);

      $data = $plan->deleteById( $bean_plan ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
