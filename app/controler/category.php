<?php
class category extends Dcontroller
{

    public function __construct()
    {
        $data = array();
        $message = array();
        parent::__construct();
    }

    // liệt kê toàn bộ
    public function categorylist()
    {
        $this->load->view('header');
        $catemodel =  $this->load->models('catemodel');

        $tbl_category = 'tbl_category';
        $data['category'] = $catemodel->category_all($tbl_category);

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
        $data['categorybyid'] = $catemodel->categorybyid($tbl_category, $id);

        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function addcategory()
    {
        $this->load->view('addcategory');
    }
    public function insertcategory()
    {
        $catemodel =  $this->load->models('catemodel');
        $tbl_category = 'tbl_category';
        $title = $_POST['title'];
        $data = array(
            'catName' => $title
        );
        $result = $catemodel->insert_category($tbl_category, $data);
        if ($result == 1) {
            echo $message['msg'] = "Thêm dữ liệu thành công";
        } else {
            echo $message['msg'] = "Thêm dữ liệu thất bại";
        }
        $this->load->view('addcategory', $message);
    }
    public function updatecategory()
    {
        $catemodel =  $this->load->models('catemodel');
        $tbl_category = 'tbl_category';
        // $title = $_POST['title'];
        $id = 8;
        $cond = "tbl_category.catid='$id'";
        $data = array(
            'catName' => 'Laptop'
        );
        $result = $catemodel->update_category($tbl_category, $data, $cond);
        if ($result == 1) {
            echo $message['msg'] = "Cập nhật dữ liệu thành công";
        } else {
            echo $message['msg'] = "Cập nhật dữ liệu thất bại";
        }
        // $this->load->view('addcategory', $message);
    }
    public function deletecategory(){
        $catemodel =  $this->load->models('catemodel');
        $tbl_category = 'tbl_category';
        // $title = $_POST['title'];
        $id = 8;
        $cond = "catid='$id'";
        $data = array(
            'catName' => 'Laptop'
        );
        $result = $catemodel->delete_category($tbl_category,$cond);
        if ($result == 1) {
            echo $message['msg'] = "Xoa dữ liệu thành công";
        } else {
            echo $message['msg'] = "Xoa dữ liệu thất bại";
        }
        // $this->load->view('addcategory', $message);
    }
    
}
