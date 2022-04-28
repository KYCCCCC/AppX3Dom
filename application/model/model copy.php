<?php
class Model{

    public function model3D_info(){
        return array(
            "name"=>"value"
        );
    }

    public $dbhandle;

    public function __construct(){
        $dsn = 'sqlite:x3d.db';
        try{
            $db = new PDO ($dsn,'user','password',array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false,
            ));
            $db->exec("INSERT INTO user  VALUES (4 ,'luck4' ,'tttt4')");
        }catch (PDOEXception $e){
            // echo "can't connect to the database";
            print new Exception ($e->getMessage());
        }
    }

    $query = "UPDATE brand SET title =title,subTitle =subTitle, `description` =description  WHERE id =bid;";

    function build_pdo_query($string, $array) {
        //Get the key lengths for each of the array elements.
        $keys = array_map('strlen', array_keys($array));
        //Sort the array by string length so the longest strings are replaced first.
        array_multisort($keys, SORT_DESC, $array);
        foreach($array as $k => $v) {
            //Quote non-numeric values.
            $replacement = is_numeric($v) ? $v : "'{$v}'";
            //Replace the needle.
            $string = str_replace("=".$k, "=".$replacement, $string);
        }

        return $string;
    }

    public function update(){
        

    }
}