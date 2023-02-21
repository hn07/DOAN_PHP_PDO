<?php
class Database extends PDO
{

    public function __construct()
    {
        $connect = 'mysql:dbname=pdo_website;host=localhost;charset=utf8';
        $user = 'root';
        $pass = '';
        parent::__construct($connect, $user, $pass);
    }
    public function select()
    {
        $sql = "SELECT * FROM tbl_category ";
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(); 
    }
}
