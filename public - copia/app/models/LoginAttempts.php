<?php 
# Class Model Generada - ByPower @armandaepp 
class LoginAttempts extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM login_attempts";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_login_attempts)
    {
        try{
            $id = $bean_login_attempts->getId();
            $ip_address = $bean_login_attempts->getIpAddress();
            $login = $bean_login_attempts->getLogin();
            $time = $bean_login_attempts->getTime();

            $this->query = "INSERT INTO login_attempts
                            (
                                ip_address,
                                login,
                                time
                            )
                            VALUES(
                                '$ip_address',
                                '$login',
                                '$time'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_login_attempts)
    {
        try{
            $id = $bean_login_attempts->getId();
            $ip_address = $bean_login_attempts->getIpAddress();
            $login = $bean_login_attempts->getLogin();
            $time = $bean_login_attempts->getTime();

            $this->query = "UPDATE login_attempts SET 
                                ip_address = '$ip_address,
                                login = '$login,
                                time = '$time
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
    public function updateEstado($bean_login_attempts)
    {
        try{
            $id = $bean_login_attempts->getId();
            $estado = $bean_login_attempts->getEstado();

            $this->query = "UPDATE login_attempts SET 
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
    public function getById($bean_login_attempts)
    {
        try{
            $id = $bean_login_attempts->getId();

            $this->query = "SELECT * FROM login_attempts WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_login_attempts)
    {
        try{
            $id = $bean_login_attempts->getId();

            $this->query = "DELETE FROM login_attempts WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>