<?php
class Database extends PDO {
    
    public function __construct()
    {   
        $connect = 'mysql:dbname=pdo_website;host=localhost;charset=utf8';
        $user = 'root';
        $pass = '';
        parent::__construct($connect, $user, $pass);
        
    }
  
}
?>