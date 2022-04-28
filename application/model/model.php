<?php
class Model{

    public function model3D_info(){
        return array(
            "name"=>"value"
        );
    }

    public $db;

    public function __construct(){
        $dsn = 'sqlite:application/db/x3d.db';
        try{
            $this->db = new PDO ($dsn,'user','password',array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false,
            ));
            // print_r($this->queryAllBrand());
        }catch (PDOEXception $e){
            // echo "can't connect to the database";
            print_r( new Exception ($e->getMessage()));
        }
    }

    public function queryAllBrand(){
        $sql = 'SELECT id, title, subTitle, description  FROM brand ORDER BY id';
        $ret = array();
        foreach ($this->db->query($sql) as $row) {
            $ret[]=$row;
            // print $row['title'] . "\t";
            // print $row['subTitle'] . "\t";
            // print $row['description'] . "\n<br>";
        }
        // echo "<hr>";
        return $ret;
    }
    

    function update_brand ($array) {
        // echo $this->build_pdo_update_brand($array);
        // echo "<hr><hr>";
        $this->db->exec($this->build_pdo_update_brand($array));

    }
    function build_pdo_update_brand ($array) {

        $string = "UPDATE brand SET title =title,subTitle =subTitle, `description` =description  WHERE id =bid;";
        //Get the key lengths for each of the array elements.
        $keys = array_map('strlen', array_keys($array));
        //Sort the array by string length so the longest strings are replaced first.
        array_multisort($keys, SORT_DESC, $array);
        foreach($array as $k => $v) {
            //Quote non-numeric values.
            $replacement = is_numeric($v) ? $v : "\"".$v."\"";
            //Replace the needle.
            $string = str_replace("=".$k, "=".$replacement, $string);
        }

        return $string;
    }

    public function update(){
        

    }
}