<?php
class login extends Dcontroller
{

    public function __construct()
    {
        $message = array();
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

    public function dashboard(){
        echo '<h1>This is Dashboard page</h1>';
    }
    
    public function authentication_User(){
        $userName = $_POST['username'];
        $password = md5($_POST['password']);
        $table_admin = 'tbl_admin';
        $loginmodel = $this->load->models('loginmodel');

        $cont = $loginmodel->login($table_admin, $userName, $password);
        if($cont == 0 ){
            // echo $message['msg'] = 'User or password incorrect';
            header('Location:'.BASE_URL.'login');
            
        }else{
            header('Location:'.BASE_URL.'login/dashboard');
        }
    }
    
}
