<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ConfiguracionController
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
      $configuracion  = new Configuracion();

      $data = $configuracion->getAll();
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

      $configuracion  = new Configuracion($this->cnx);

      $bean_configuracion = new BeanConfiguracion();
            
      $bean_configuracion->setTitulo($titulo);
      $bean_configuracion->setHorario($horario);
      $bean_configuracion->setDireccion($direccion);
      $bean_configuracion->setEmail($email);
      $bean_configuracion->setTelefono($telefono);
      $bean_configuracion->setFacebook($facebook);
      $bean_configuracion->setYoutube($youtube);
      $bean_configuracion->setInstagram($instagram);
      $bean_configuracion->setMapa($mapa);
      $bean_configuracion->setPopup($popup);
      $bean_configuracion->setShowPopup($show_popup);
            
      $data = $configuracion->save($bean_configuracion) ;

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

      $configuracion  = new Configuracion($this->cnx);
      $bean_configuracion = new BeanConfiguracion();
            
      $bean_configuracion->setId($id);
      $bean_configuracion->setTitulo($titulo);
      $bean_configuracion->setHorario($horario);
      $bean_configuracion->setDireccion($direccion);
      $bean_configuracion->setEmail($email);
      $bean_configuracion->setTelefono($telefono);
      $bean_configuracion->setFacebook($facebook);
      $bean_configuracion->setYoutube($youtube);
      $bean_configuracion->setInstagram($instagram);
      $bean_configuracion->setMapa($mapa);
      $bean_configuracion->setPopup($popup);
      $bean_configuracion->setShowPopup($show_popup);

      $data = $configuracion->update($bean_configuracion) ;
            
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

      $configuracion  = new Configuracion($this->cnx);
      $bean_configuracion = new BeanConfiguracion();
            
      $bean_configuracion->setId($id);
      $bean_configuracion->setEstado($estado);

      $data = $configuracion->updateEstado($bean_configuracion) ;
            
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
      $configuracion  = new Configuracion();

      $bean_configuracion = new BeanConfiguracion();

      $bean_configuracion->setId($id);

      $data = $configuracion->find( $bean_configuracion) ;
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

      $configuracion  = new Configuracion();

      $bean_configuracion = new BeanConfiguracion();

      $bean_configuracion->setId($id);

      $data = $configuracion->deleteById( $bean_configuracion ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
