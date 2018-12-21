<?php 
# Class Model Generada - ByPower @armandaepp 
class User extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM user";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_user)
    {
        try{
            $user_id = $bean_user->getUserId();
            $nombre = $bean_user->getNombre();
            $apellidos = $bean_user->getApellidos();
            $email = $bean_user->getEmail();
            $password = $bean_user->getPassword();
            $estado = $bean_user->getEstado();
            $created_up = $bean_user->getCreatedUp();

            $this->query = "INSERT INTO user
                            (
                                nombre,
                                apellidos,
                                email,
                                password,
                                estado,
                                created_up
                            )
                            VALUES(
                                '$nombre',
                                '$apellidos',
                                '$email',
                                '$password',
                                '$estado',
                                '$created_up'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_user)
    {
        try{
            $user_id = $bean_user->getUserId();
            $nombre = $bean_user->getNombre();
            $apellidos = $bean_user->getApellidos();
            $email = $bean_user->getEmail();
            $password = $bean_user->getPassword();
            $estado = $bean_user->getEstado();
            $created_up = $bean_user->getCreatedUp();

            $this->query = "UPDATE user SET 
                                nombre = '$nombre,
                                apellidos = '$apellidos,
                                email = '$email,
                                password = '$password,
                                estado = '$estado,
                                created_up = '$created_up
                            WHERE user_id = '$user_id'
                            LIMIT 1 ";
            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_user)
    {
        try{
            $user_id = $bean_user->getUserId();
            $estado = $bean_user->getEstado();

            $this->query = "UPDATE user SET 
                                estado = '$estado'
                            WHERE user_id='$user_id'
                            LIMIT 1 ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Buscar por ID
    public function getById($bean_user)
    {
        try{
            $user_id = $bean_user->getUserId();

            $this->query = "SELECT * FROM user WHERE user_id = '$user_id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_user)
    {
        try{
            $user_id = $bean_user->getUserId();

            $this->query = "DELETE FROM user WHERE user_id = '$user_id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>