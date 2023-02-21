<?php
class homemodel extends Dmodel{
    public function __construct()
    {
      parent::__construct();
    }
    public function category(){
      $sql = "SELECT * FROM tbl_category ORDER BY catid desc";
      $query = $this->db->query($sql);
      $result = $query->fetchAll();
      return $result;
    }
}
?>