<?php
class Auth extends Conexion {

  public $timestamps = true;

  public $user_id;
  public $email ;
  public $nombre ;
  public $apellidos ;
  public $password ;
  public $estado      = 1;
  private $created_up =  NULL;


  public function __construct (){ }

  public function login(){

    try{

      $this->md5Password();

      $this->query = "SELECT user_id, email, nombre, apellidos FROM user
                      WHERE email = '$this->email'
                      AND password = '$this->password'
                      AND estado = $this->estado
                      LIMIT 1 ;";


      $this->execute_find();

      $rows = $this->rows ;

      return $rows;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }

  }


  public function getById(){

    try{
      $this->query = "SELECT * FROM user where  user_id = '$this->user_id';";

      $this->execute_find();
      $rows = $this->rows ;

      return $rows;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }

  }



  private function md5Password(){
    $this->password = md5($this->password) ;
  }
}
