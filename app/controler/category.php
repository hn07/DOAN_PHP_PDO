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
        $homemodel =  $this->load->models('homemodel');

        $tbl_category = 'tbl_category';
        $data['category'] = $homemodel->category($tbl_category);

        $this->load->view('category', $data);
        $this->load->view('footer');
    }
    // liệt kê theo id
    public function catebyid()
    {
        $this->load->view('header');
        $homemodel =  $this->load->models('homemodel');
        $id = 1;
        $tbl_category = 'tbl_category';
        $data['categorybyid'] = $homemodel->categorybyid($tbl_category,$id);

        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }
}
