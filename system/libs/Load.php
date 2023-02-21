<!-- GOi MOI THU CO TRONG VIEW -->

<?php
class Load{
    public function __construct()
    {
      
    }
    public function view($filename,$data = NULL){
        include 'app/views/'.$filename.'.php';
    }
    public function models($filename){
        include 'app/models/'.$filename.'.php';
        return new $filename();
    }
}
?>