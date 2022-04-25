<?php
class Controller{
    public $load;
    public $model;

    function __construct($pageURI = null){
        $this->load = new Load();
        $this->model = new Model();
        if(method_exists($this,$pageURI)){
            $this->$pageURI();
        }else{
            $this->home();
        }
  
    }
    function home(){
        echo "<br><hr>\n init home=========================<hr>";
        $data = $this->model->model3D_info();
        $this->load->view('home',$data);
    }
    function test(){

    }
}