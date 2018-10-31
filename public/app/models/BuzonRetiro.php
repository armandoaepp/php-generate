<?php 
# Class Model Generada - ByPower @armandaepp 
class BuzonRetiro extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM buzon_retiro";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_buzon_retiro)
    {
        try{
            $id = $bean_buzon_retiro->getId();
            $nombres = $bean_buzon_retiro->getNombres();
            $titulo_retiro = $bean_buzon_retiro->getTituloRetiro();
            $email = $bean_buzon_retiro->getEmail();
            $mensaje = $bean_buzon_retiro->getMensaje();
            $estado = $bean_buzon_retiro->getEstado();
            $fecha = $bean_buzon_retiro->getFecha();

            $this->query = "INSERT INTO buzon_retiro
                            (
                                nombres,
                                titulo_retiro,
                                email,
                                mensaje,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$nombres',
                                '$titulo_retiro',
                                '$email',
                                '$mensaje',
                                '$estado',
                                '$fecha'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_buzon_retiro)
    {
        try{
            $id = $bean_buzon_retiro->getId();
            $nombres = $bean_buzon_retiro->getNombres();
            $titulo_retiro = $bean_buzon_retiro->getTituloRetiro();
            $email = $bean_buzon_retiro->getEmail();
            $mensaje = $bean_buzon_retiro->getMensaje();
            $estado = $bean_buzon_retiro->getEstado();
            $fecha = $bean_buzon_retiro->getFecha();

            $this->query = "UPDATE buzon_retiro SET 
                                nombres = '$nombres,
                                titulo_retiro = '$titulo_retiro,
                                email = '$email,
                                mensaje = '$mensaje,
                                estado = '$estado,
                                fecha = '$fecha
                            WHERE id = '$id'
                            LIMIT 1 ";
            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_buzon_retiro)
    {
        try{
            $id = $bean_buzon_retiro->getId();
            $estado = $bean_buzon_retiro->getEstado();

            $this->query = "UPDATE buzon_retiro SET 
                                estado = '$estado'
                            WHERE id='$id'
                            LIMIT 1 ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Buscar por ID
    public function getById($bean_buzon_retiro)
    {
        try{
            $id = $bean_buzon_retiro->getId();

            $this->query = "SELECT * FROM buzon_retiro WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_buzon_retiro)
    {
        try{
            $id = $bean_buzon_retiro->getId();

            $this->query = "DELETE FROM buzon_retiro WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>