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
        Session::checkSession();
        $this->load->view('cpandel/dashboard');
    }
    
    public function authentication_User(){
        $userName = $_POST['username'];
        $password = md5($_POST['password']);

        $table_admin = 'tbl_admin';
        $loginmodel = $this->load->models('loginmodel');

        $cont = $loginmodel->login($table_admin, $userName, $password);
        if($cont == 0 ){
            echo $message['msg'] = 'User or password incorrect';
            header('Location:'.BASE_URL.'login');
            
        }else{ 
            $result = $loginmodel->getLogin($table_admin, $userName, $password);
            Session::init();
            Session::set('login',true);
            Session::set('username',$result[0]['username']);
            Session::set('admin_id',$result[0]['admin_id']);

            header('Location:'.BASE_URL.'login/dashboard');
      
        }
    }
    public function logout() {
        Session::init();
        Session::destroy();
        header('Location:'.BASE_URL.'login');


    }
    
}
