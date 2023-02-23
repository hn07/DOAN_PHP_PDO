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
        $this->load->view('cpandel/login');
        $this->load->view('footer');
    }
    
    public function authentication_User(){
        echo $userName = $_POST['username'];
        echo $password = md5($_POST['password']);
    }
    
}
