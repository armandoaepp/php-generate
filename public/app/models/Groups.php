<?php 
# Class Model Generada - ByPower @armandaepp 
class Groups extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM groups";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_groups)
    {
        try{
            $id = $bean_groups->getId();
            $name = $bean_groups->getName();
            $description = $bean_groups->getDescription();

            $this->query = "INSERT INTO groups
                            (
                                name,
                                description
                            )
                            VALUES(
                                '$name',
                                '$description'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_groups)
    {
        try{
            $id = $bean_groups->getId();
            $name = $bean_groups->getName();
            $description = $bean_groups->getDescription();

            $this->query = "UPDATE groups SET 
                                name = '$name,
                                description = '$description
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
    public function updateEstado($bean_groups)
    {
        try{
            $id = $bean_groups->getId();
            $estado = $bean_groups->getEstado();

            $this->query = "UPDATE groups SET 
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
    public function getById($bean_groups)
    {
        try{
            $id = $bean_groups->getId();

            $this->query = "SELECT * FROM groups WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_groups)
    {
        try{
            $id = $bean_groups->getId();

            $this->query = "DELETE FROM groups WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>