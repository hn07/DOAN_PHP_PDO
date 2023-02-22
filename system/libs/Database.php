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
    public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC)
    {
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindParam($key, $value);
        }

        $statement->execute();
        return $statement->fetchAll();
    }
    public function insert($table, $data)
    {
        $key = implode(",", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table($key) VALUES ($values)";
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        return $statement->execute();
    }

    public function update($table, $data, $cond)
    {   //quyet tung cot trong db
        $updatekeys = NULL;
        foreach ($data as $key => $value) {
            $updatekeys .="$key=:$key";
        }
        //cat dau , ở cuối hàng
        $updatekeys = rtrim($updatekeys,",");

        $sql = "UPDATE $table SET $updatekeys WHERE $cond";
        $statement = $this->prepare($sql);

        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value);
        }
        return $statement->execute();
    }

    public function delete($table,$cond,$limit = 1){
        $sql = "DELETE FROM $table  WHERE $cond LIMIT $limit";
        return $this->exec($sql);
    }
}
