<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanUsersGroups{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $user_id;
    private $group_id;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setUserId($user_id_)
    {
        $this->user_id = Validation::validate( $user_id_ );
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setGroupId($group_id_)
    {
        $this->group_id = Validation::validate( $group_id_ );
    }

    public function getGroupId()
    {
        return $this->group_id;
    }

}
?>