<?php
class loginmodel extends Dmodel
{
  public function __construct()
  {
    parent::__construct();
  }
  public function login($table_admin, $userName, $password)
  {
    $sql = "SELECT * FROM $table_admin WHERE userName=? AND password=?";
    return $this->db->affectedRows($sql, $userName, $password);

  }
  
}
