<?php
class index extends Dcontroller{
    
    public function __construct()
    {   $data = array();
        parent::__construct();
    }
   public function home(){
   $this->load->view('header');
   $homemodel =  $this->load->models('homemodel');
   $data['category'] = $homemodel->category();
   $this->load->view('home', $data);   
   $this->load->view('footer');
   }
}
?>