<?php 

class Controller{


    public function model($model)
    {
       require_once '../app/models/'.$model.'.php';

       return new $model();
    }

    public function view($view,$data = [])
    {
        if(file_exists('../app/views/'.$view.'.phtml')){

            require_once '../app/views/'.$view.'.phtml';
        }else{
            die('ViewPage Does Not Exist !  :(');
        }
    }
}