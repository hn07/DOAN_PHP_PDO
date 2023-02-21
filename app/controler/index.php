<?php
class index extends Dcontroller
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    // tra ve trang home 
    public function homepage()
    {
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');
    }
    
}
