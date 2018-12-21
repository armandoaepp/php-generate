<?php
Class Connection
{
  private static $db_host = 'localhost';
  private static $db_user = 'root';
  private static $db_pass = '';
  protected $db_name      = 'escuelac_w_ne16';
  protected $db_port      = '3306';
  protected $db_driver    = 'mysql';

  protected $query     = '';
  protected $rows      = array();
  protected $conn      = null  ;
  protected $status_exe = false ;

  # Conectar a la base de datos utilizamos la libreria pdo
  private function openConnection()
  {
    $cadena = $this->db_driver.":host=".self::$db_host.";port=".$this->db_port.";dbname=" .$this->db_name;

    $this->conn = new PDO($cadena,self::$db_user,self::$db_pass);
    # para manejar errores y excepcciones especiales para el manejo de transacciones
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    # codificacion utf-8
    $this->conn->query("SET NAMES 'utf8'");
  }

  # Desconectar la base de datos
  private function closeConnection()
  {
    $this->conn = null;
  }


  /**
   * [executeQuery EJECUTAR UN QUERY DEL ITPO INSERT , DELETE , UPDATE , SELECT]
   * @return [type] [SI ES UN SELECT RETORNO UN ARRAY CON DATOS LOS CUALES PUEDEN SER ACCEDIDOS POR LOS NOMBRES DE COLUMNAS]
   */
  protected function executeQuery()
  {
    $rows = array();
    $this->status_exe = false ;
    # conn si es nulo inicializamos la conexion
    if( $this->conn == null )
    {
      $this->openConnection();
    }

    $stm = $this->conn->prepare($this->query);

    $this->status_exe = $stm->execute() ;


    if($this->status_exe)
    {
      # Verificacmos si el resultado tiene columnas para no tener problemas con los INSERT, UPDATE o DELETE
      # esto para que el metodo de conexion no duelva error cuando se trabaja con transacciones
      $column_count = $stm->columnCount() ;
      if ($column_count > 0)
      {
        # solo se accede por nombres de columnas y facil convertir en json
        $rows  = $stm->fetchAll(PDO::FETCH_ASSOC) ;
      }

    }
    $this->rows =  $rows ;

  }
  # Iniciar un transaccion
  public function beginTransaction()
  {
      if( $this->conn == null )
      {
        # nos conectamos
        $this->openConnection();
        # iniciamos la transaccion
        $this->conn->beginTransaction();
      }
      elseif( $this->conn != null )
      {
        # iniciamos la transaccion
        $this->conn->beginTransaction();
      }
  }

  # si a tenido existo hacemos un commit para volcar los datos
  public function commit()
  {
    $this->conn->commit();
    $this->closeConnection();
  }
  # si hay errores para dehacer el volcado de datos
  public function rollback()
  {
    $this->conn->rollback();
    $this->closeConnection();
  }

  # este metoo nos siver para iniciar la conexion desde una capa externa al models
  # trabajar con multiples clases para transacciones
  public function getConnection()
  {
    $this->openConnection() ;
    return $this->conn;
  }
  # retornar el query para log
  public function getQuery()
  {
    $sql = $this->query ;
    return $sql ;
  }

  #return only row
  protected function executeFind()
  {
    try{
      $rows = array();

      $this->executeQuery();

      if(count($this->rows) > 0 )
      {
          $rows = $this->rows[0] ;
      }

      $this->rows =  $rows ;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }

  }

  // retornar el ID insertador
  protected function lastInsertId()
  {
    return $this->conn->lastInsertId();
  }

}