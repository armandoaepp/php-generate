<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class EventoImgController
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
      $evento_img  = new EventoImg();

      $data = $evento_img->getAll();
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

      $evento_img  = new EventoImg($this->cnx);

      $bean_evento_img = new BeanEventoImg();
            
      $bean_evento_img->setImagen($imagen);
      $bean_evento_img->setIdPadre($id_padre);
      $bean_evento_img->setOrden($orden);
      $bean_evento_img->setFecha($fecha);
            
      $data = $evento_img->save($bean_evento_img) ;

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

      $evento_img  = new EventoImg($this->cnx);
      $bean_evento_img = new BeanEventoImg();
            
      $bean_evento_img->setId($id);
      $bean_evento_img->setImagen($imagen);
      $bean_evento_img->setIdPadre($id_padre);
      $bean_evento_img->setOrden($orden);
      $bean_evento_img->setFecha($fecha);

      $data = $evento_img->update($bean_evento_img) ;
            
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

      $evento_img  = new EventoImg($this->cnx);
      $bean_evento_img = new BeanEventoImg();
            
      $bean_evento_img->setId($id);
      $bean_evento_img->setEstado($estado);

      $data = $evento_img->updateEstado($bean_evento_img) ;
            
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
      $evento_img  = new EventoImg();

      $bean_evento_img = new BeanEventoImg();

      $bean_evento_img->setId($id);

      $data = $evento_img->find( $bean_evento_img) ;
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

      $evento_img  = new EventoImg();

      $bean_evento_img = new BeanEventoImg();

      $bean_evento_img->setId($id);

      $data = $evento_img->deleteById( $bean_evento_img ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
