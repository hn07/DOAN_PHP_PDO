<?php
class category extends Dcontroller
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
   
    // liệt kê toàn bộ
    public function category()
    {
        $this->load->view('header');
        $catemodel =  $this->load->models('catemodel');

        $tbl_category = 'tbl_category';
        $data['category'] = $catemodel->category($tbl_category);

        $this->load->view('category', $data);
        $this->load->view('footer');
    }
    // liệt kê theo id
    public function catebyid()
    {
        $this->load->view('header');
        $catemodel =  $this->load->models('catemodel');
        $id = 1;
        $tbl_category = 'tbl_category';
        $data['categorybyid'] = $catemodel->categorybyid($tbl_category,$id);

        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function insert_category(){
       
        $catemodel =  $this->load->models('catemodel');
        $tbl_category = 'tbl_category';
        $data = array(
        'catName' => 'Mat kinh'
       );
        $catemodel->insert_category($tbl_category,$data);
        echo "<h2>Insert Category</h2";
    }



}
