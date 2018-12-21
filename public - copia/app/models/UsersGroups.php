<?php 
# Class Model Generada - ByPower @armandaepp 
class UsersGroups extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM users_groups";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_users_groups)
    {
        try{
            $id = $bean_users_groups->getId();
            $user_id = $bean_users_groups->getUserId();
            $group_id = $bean_users_groups->getGroupId();

            $this->query = "INSERT INTO users_groups
                            (
                                user_id,
                                group_id
                            )
                            VALUES(
                                '$user_id',
                                '$group_id'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_users_groups)
    {
        try{
            $id = $bean_users_groups->getId();
            $user_id = $bean_users_groups->getUserId();
            $group_id = $bean_users_groups->getGroupId();

            $this->query = "UPDATE users_groups SET 
                                user_id = '$user_id,
                                group_id = '$group_id
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
    public function updateEstado($bean_users_groups)
    {
        try{
            $id = $bean_users_groups->getId();
            $estado = $bean_users_groups->getEstado();

            $this->query = "UPDATE users_groups SET 
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
    public function getById($bean_users_groups)
    {
        try{
            $id = $bean_users_groups->getId();

            $this->query = "SELECT * FROM users_groups WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_users_groups)
    {
        try{
            $id = $bean_users_groups->getId();

            $this->query = "DELETE FROM users_groups WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>