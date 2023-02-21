<?php
class index extends Dcontroller
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function homepage()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
    public function category()
    {
        $this->load->view('header');
        $homemodel =  $this->load->models('homemodel');

        $tbl_category = 'tbl_category';
        $data['category'] = $homemodel->category($tbl_category);

        $this->load->view('category', $data);
        $this->load->view('footer');
    }
    public function catebyid()
    {
        $this->load->view('header');
        $homemodel =  $this->load->models('homemodel');
        $id = 1;
        $tbl_category = 'tbl_category';
        $data['category'] = $homemodel->categorybyid($tbl_category,$id);

        $this->load->view('category', $data);
        $this->load->view('footer');
    }
}
