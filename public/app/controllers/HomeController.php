<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class HomeController
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
      $home  = new Home();

      $data = $home->getAll();
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

      $home  = new Home($this->cnx);

      $bean_home = new BeanHome();
            
      $bean_home->setTitulo($titulo);
      $bean_home->setUrl($url);
      $bean_home->setImagen($imagen);
      $bean_home->setTitulo2($titulo_2);
      $bean_home->setUrl2($url_2);
      $bean_home->setImagen2($imagen_2);
      $bean_home->setTitulo3($titulo_3);
      $bean_home->setUrl3($url_3);
      $bean_home->setImagen3($imagen_3);
      $bean_home->setConvenios($convenios);
      $bean_home->setOrden($orden);
      $bean_home->setFecha($fecha);
            
      $data = $home->save($bean_home) ;

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

      $home  = new Home($this->cnx);
      $bean_home = new BeanHome();
            
      $bean_home->setId($id);
      $bean_home->setTitulo($titulo);
      $bean_home->setUrl($url);
      $bean_home->setImagen($imagen);
      $bean_home->setTitulo2($titulo_2);
      $bean_home->setUrl2($url_2);
      $bean_home->setImagen2($imagen_2);
      $bean_home->setTitulo3($titulo_3);
      $bean_home->setUrl3($url_3);
      $bean_home->setImagen3($imagen_3);
      $bean_home->setConvenios($convenios);
      $bean_home->setOrden($orden);
      $bean_home->setFecha($fecha);

      $data = $home->update($bean_home) ;
            
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

      $home  = new Home($this->cnx);
      $bean_home = new BeanHome();
            
      $bean_home->setId($id);
      $bean_home->setEstado($estado);

      $data = $home->updateEstado($bean_home) ;
            
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
      $home  = new Home();

      $bean_home = new BeanHome();

      $bean_home->setId($id);

      $data = $home->find( $bean_home) ;
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

      $home  = new Home();

      $bean_home = new BeanHome();

      $bean_home->setId($id);

      $data = $home->deleteById( $bean_home ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
