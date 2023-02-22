<?php
class catemodel extends Dmodel
{
  public function __construct()
  {
    parent::__construct();
  }
  public function category_all($tbl_category)
  {
    $sql = "SELECT * FROM tbl_category ORDER BY catid desc";
    return $this->db->select($sql);
    // $sql = "SELECT * FROM tbl_category ORDER BY catid desc";
    // $query = $this->db->query($sql);
    // $result = $query->fetchAll();
    // return $result;

  }
  public function categorybyid($tbl_category, $id)
  {
    $sql = "SELECT * FROM $tbl_category WHERE catid =:id";
    $data = array(':id' => $id);
    return $this->db->select($sql, $data);
  }

  public  function insert_category($tbl_category, $data)
  {
    return $this->db->insert($tbl_category, $data);
  }

  public  function update_category($tbl_category, $data,$cond)
  {
    return $this->db->update($tbl_category, $data, $cond);
  }
  public  function delete_category($table,$cond,$limit = 1)
  {
    return $this->db->delete($table,$cond);
  }
}
