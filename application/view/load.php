<?php
class Load{
    function view ($file_name, $data = null){
        if(is_array($data)){
            extract($data);
        }
        // echo 'load'.$file_name;
        include $file_name.'.php';
    }
}