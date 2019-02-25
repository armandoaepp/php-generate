<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ChefController
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
      $chef  = new Chef();

      $data = $chef->getAll();
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

      $chef  = new Chef($this->cnx);

      $bean_chef = new BeanChef();
            
      $bean_chef->setTitulo($titulo);
      $bean_chef->setSubtitulo($subtitulo);
      $bean_chef->setResumen($resumen);
      $bean_chef->setDescripcion($descripcion);
      $bean_chef->setImagen($imagen);
      $bean_chef->setOrden($orden);
      $bean_chef->setFecha($fecha);
            
      $data = $chef->save($bean_chef) ;

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

      $chef  = new Chef($this->cnx);
      $bean_chef = new BeanChef();
            
      $bean_chef->setId($id);
      $bean_chef->setTitulo($titulo);
      $bean_chef->setSubtitulo($subtitulo);
      $bean_chef->setResumen($resumen);
      $bean_chef->setDescripcion($descripcion);
      $bean_chef->setImagen($imagen);
      $bean_chef->setOrden($orden);
      $bean_chef->setFecha($fecha);

      $data = $chef->update($bean_chef) ;
            
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

      $chef  = new Chef($this->cnx);
      $bean_chef = new BeanChef();
            
      $bean_chef->setId($id);
      $bean_chef->setEstado($estado);

      $data = $chef->updateEstado($bean_chef) ;
            
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
      $chef  = new Chef();

      $bean_chef = new BeanChef();

      $bean_chef->setId($id);

      $data = $chef->find( $bean_chef) ;
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

      $chef  = new Chef();

      $bean_chef = new BeanChef();

      $bean_chef->setId($id);

      $data = $chef->deleteById( $bean_chef ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
