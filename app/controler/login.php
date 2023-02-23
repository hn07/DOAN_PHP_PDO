<?php
class login extends Dcontroller
{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }


    // tra ve trang home 
    public function index(){
        $this->login();
    }

    public function login()
    {
        $this->load->view('header');
        $this->load->view('cpanel/login');
        $this->load->view('footer');
    }
    
    
}
