<?php
class Model{

    public function model3D_info(){
        return array(
            "name"=>"value"
        );
    }

    public $dbhandle;

    public function __construct(){
        $dsn = 'sqlite:./db/test1.db';
        try{
            $this->dbhandle = new PDO ($dsn,'user','password',array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES=>false,
            ));
        }catch (PDOEXception $e){
            // echo "can't connect to the database";
            print new Exception ($e->getMessage());
        }
    }
}