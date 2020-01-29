<?php

class AuthModel
{
    
    private $db;
    
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    
    public function login($name, $pass)
    {
        $query = $this->db->prepare('SELECT * FROM `user` WHERE `user_name` = :name');
        $query->execute(array(
            ':name' => $name
        ));
        $row = $query->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($pass, $row['user_pass'])) {
            
            return $row;
        } else {
            
            return false;
        }
    }
}

?>