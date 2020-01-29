<?php

class AdminModel
{
    
    private $db;
    
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    
    public function select()
    {
        $stmt = $this->db->query('SELECT * FROM `images`');
        $row  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }
    
    public function insert($data)
    {
        if (!is_string($data)) {
            return false;
        }
        
        $stmt = $this->db->prepare('INSERT INTO `images` (`img_id`,`img_name`) VALUES (NULL,:data)');
        $stmt->execute(array(
            ':data' => $data
        ));
    }
    
    
    public function delete($data)
    {
        $stmt = $this->db->prepare('DELETE FROM `images` WHERE `images`.`img_id` = :data');
        $stmt->execute(array(
            ':data' => $data
        ));
    }
    
    
    public function update($img, $id)
    {
        $stmt = $this->db->prepare('UPDATE `images` SET `img_name` = :img WHERE `images`.`img_id` = :id');
        $stmt->execute(array(
            ':img' => $img,
            ':id' => $id
        ));
    }
    
    
}


?>