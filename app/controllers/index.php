<?php
class index extends Controller
{
    public function __construct()
    {
        $this->IndexModel = $this->model('Dev'); 
       
    }

    public function index()
    {
       $post = $this->IndexModel->getData();
        $data = [
            'tbluser' => $post
        ];
        $this->view('index/index',$data);
    }
    public function test($id)
    {
        echo $id;
    }
}
