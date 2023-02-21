<?php
class homemodel extends Dmodel{
    public function __construct()
    {
      parent::__construct();
    }
    public function category($tbl_category){
      return $this->db->select('$tbl_category');
      // $sql = "SELECT * FROM tbl_category ORDER BY catid desc";
      // $query = $this->db->query($sql);
      // $result = $query->fetchAll();
      // return $result;

    }
    public function categorybyid($tbl_category,$id){
      $sql = "SELECT * FROM $tbl_category WHERE catid =:id";
      $statment = $this->db->prepare($sql);
      $statment->bindParam(':id',$id);
      $statment->execute();
      return $statment->fetchAll();
    }
}
?>