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
        // echo "<br><hr>\n init home=========================<hr>";
        // $data = $this->model->model3D_info();
        $brands = $this->model->queryAllBrand();
        $this->load->view('home',$brands);
    }

    function update(){
        // echo "update";
        $in = $_REQUEST;
        $title=$in['title'];
        // print_r($in);
        // echo "<hr>";
        $subTitle=$in['subTitle'];
        $description=$in['description'];
        $update=array();


        // $query_update = "";
        for ($i=0 ; $i<=3;$i++){
            $t = array();
            $t['bid']=$i+1;
            $t['title']= $title[$i];
            $t['subTitle']= $subTitle[$i];
            $t['description']= $description[$i];
            $update[] = $t;
            $this->model->update_brand($t);
            // $query =$query.$query_in.$t['bid'].",\"".$t['title']."\",\"".$t['subTitle']."\",\"".$t['description']."\");";
        }
        // echo "<hr>";
        // print_r($update);
        // echo "<hr>";
        // $brands = $this->model->queryAllBrand();
        //重定向浏览器 
        header("Location: index.php"); 
        // //确保重定向后，后续代码不会被执行 
        // exit;
    }

    function getJson(){
        // echo "get josn <hr>";
        $brands = $this->model->queryAllBrand();

        for($i = 1;$i<=4;$i++){
            $t["x3dModelTitle"] = $brands[$i]["title"]." Model";
            $t["x3dCreationMethod"] = "This X3D model wes create by blender, you can see the archive in codebase .";
            $t["title"] = $brands[$i]["title"];
            $t["subTitle"] = $brands[$i]["subTitle"];
            $t["description"] = $brands[$i]["description"];
            $brands[] = $t;
        }
        $json["pageTextData"] =$brands;
//
        // print_r($brands);
        // echo "<hr>";
        echo json_encode($json);
    }
    function test(){

    }
}