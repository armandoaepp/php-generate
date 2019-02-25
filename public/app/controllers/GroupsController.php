<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class GroupsController
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
      $groups  = new Groups();

      $data = $groups->getAll();
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

      $groups  = new Groups($this->cnx);

      $bean_groups = new BeanGroups();
            
      $bean_groups->setName($name);
      $bean_groups->setDescription($description);
            
      $data = $groups->save($bean_groups) ;

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

      $groups  = new Groups($this->cnx);
      $bean_groups = new BeanGroups();
            
      $bean_groups->setId($id);
      $bean_groups->setName($name);
      $bean_groups->setDescription($description);

      $data = $groups->update($bean_groups) ;
            
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

      $groups  = new Groups($this->cnx);
      $bean_groups = new BeanGroups();
            
      $bean_groups->setId($id);
      $bean_groups->setEstado($estado);

      $data = $groups->updateEstado($bean_groups) ;
            
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
      $groups  = new Groups();

      $bean_groups = new BeanGroups();

      $bean_groups->setId($id);

      $data = $groups->find( $bean_groups) ;
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

      $groups  = new Groups();

      $bean_groups = new BeanGroups();

      $bean_groups->setId($id);

      $data = $groups->deleteById( $bean_groups ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
