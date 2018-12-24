<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class BuzonRetiroController
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
      $buzon_retiro  = new BuzonRetiro();

      $data = $buzon_retiro->getAll();
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

      $buzon_retiro  = new BuzonRetiro($this->cnx);

      $bean_buzon_retiro = new BeanBuzonRetiro();
            
      $bean_buzon_retiro->setNombres($nombres);
      $bean_buzon_retiro->setTituloRetiro($titulo_retiro);
      $bean_buzon_retiro->setEmail($email);
      $bean_buzon_retiro->setMensaje($mensaje);
      $bean_buzon_retiro->setFecha($fecha);
            
      $data = $buzon_retiro->save($bean_buzon_retiro) ;

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

      $buzon_retiro  = new BuzonRetiro($this->cnx);
      $bean_buzon_retiro = new BeanBuzonRetiro();
            
      $bean_buzon_retiro->setId($id);
      $bean_buzon_retiro->setNombres($nombres);
      $bean_buzon_retiro->setTituloRetiro($titulo_retiro);
      $bean_buzon_retiro->setEmail($email);
      $bean_buzon_retiro->setMensaje($mensaje);
      $bean_buzon_retiro->setFecha($fecha);

      $data = $buzon_retiro->update($bean_buzon_retiro) ;
            
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

      $buzon_retiro  = new BuzonRetiro($this->cnx);
      $bean_buzon_retiro = new BeanBuzonRetiro();
            
      $bean_buzon_retiro->setId($id);
      $bean_buzon_retiro->setEstado($estado);

      $data = $buzon_retiro->updateEstado($bean_buzon_retiro) ;
            
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
      $buzon_retiro  = new BuzonRetiro();

      $bean_buzon_retiro = new BeanBuzonRetiro();

      $bean_buzon_retiro->setId($id);

      $data = $buzon_retiro->find( $bean_buzon_retiro) ;
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

      $buzon_retiro  = new BuzonRetiro();

      $bean_buzon_retiro = new BeanBuzonRetiro();

      $bean_buzon_retiro->setId($id);

      $data = $buzon_retiro->deleteById( $bean_buzon_retiro ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
