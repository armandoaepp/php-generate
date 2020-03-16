<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class ComentarioController
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
      $comentario  = new Comentario();

      $data = $comentario->getAll();

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

      $comentario  = new Comentario();
            
      $bean_comentario = new BeanComentario();
            
      $bean_comentario->setEstado($estado);

      $data = $comentario->getByEstado($bean_comentario);

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

      $comentario  = new Comentario($this->cnx);

      $bean_comentario = new BeanComentario();
            
      $bean_comentario->setEmail($email);
      $bean_comentario->setMensaje($mensaje);
      $bean_comentario->setCalificacion($calificacion);
            
      $data = $comentario->save($bean_comentario) ;

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

      $comentario  = new Comentario($this->cnx);
      $bean_comentario = new BeanComentario();
            
      $bean_comentario->setComentarioId($comentario_id);
      $bean_comentario->setEmail($email);
      $bean_comentario->setMensaje($mensaje);
      $bean_comentario->setCalificacion($calificacion);

      $data = $comentario->update($bean_comentario) ;
            
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

      $comentario  = new Comentario($this->cnx);
            
      $bean_comentario = new BeanComentario();
            
      $bean_comentario->setComentarioId($comentario_id);
      $bean_comentario->setEstado($estado);

      $data = $comentario->updateEstado($bean_comentario) ;
            
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
      $comentario  = new Comentario();

      $bean_comentario = new BeanComentario();

      $bean_comentario->setComentarioId($id);

      $data = $comentario->find( $bean_comentario) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($comentario_id)
  {
    try
    {

      $comentario  = new Comentario();

      $bean_comentario = new BeanComentario();

      $bean_comentario->setComentarioId($comentario_id);

      $data = $comentario->deleteById( $bean_comentario ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
