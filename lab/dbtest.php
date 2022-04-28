<?php
$dsn = 'sqlite:x3d.db';
try{
    $db = new PDO ($dsn,'user','password',array(
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES=>false,
    ));
    $db->exec("INSERT INTO user  VALUES (1 ,'luck' ,'tttt')");
}catch (PDOEXception $e){
    // echo "can't connect to the database";
    print new Exception ($e->getMessage());
}