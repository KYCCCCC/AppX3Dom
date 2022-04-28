<?php
$json = <<<EOF
[
    {
        "title": "Coca Cola Great Britain",
        "subTitle": "Founded in 1886 Dr John S Pemberton",		
        "description": "The Coca Cola Company is the world's leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands."
    },
    {
        "title": "Coca Cola",
        "subTitle": "New York Harbour, 1886",		
        "description": "It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!"
    },
    {
        "title": "Sprite",
        "subTitle": "West Germany, 1959",		
        "description": "First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories."
    },
    {
        "title": "Dr Pepper",
        "subTitle": "Texas, 1885",		
        "description": "Dr Pepper's unique, sparkling blend of 23 fruit flavours has been around for well over a century and it's still the same, with that distinctive flavour you just can't quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since."
    }
]
EOF;
$data = json_decode($json);
// echo "222";
print_r($data);
$title=array();
$subTitle=array();
$description=array();
for ($i=0 ; $i<=3;$i++){
    $title[] =$data[$i]->title;
    $subTitle[] =$data[$i]->subTitle;
    $description[] =$data[$i]->description;
}

?>

<form action="save.php" method = "post">

<?php
for ($i=0 ; $i<=3;$i++){
?>
title <input type="text" name="title[]" value = "<?php echo $title[$i] ?> "><br>
subTitle <input type="text" name="subTitle[]" value = " <?php echo $subTitle[$i] ?> "><br>
description <textarea type="text" name="description[]" value = "  ">
<?php echo $description[$i] ?>
</textarea>
<br>
<?php
}
?>
<input type="submit" >
</form>
<?php
$in = $_REQUEST;
$title=$in['title'];
$subTitle=$in['subTitle'];
$description=$in['description'];
$update=array();
$query_in = "INSERT INTO brand (id,title,subTitle,`description`) VALUES  ( ";
$query = "";
for ($i=0 ; $i<=3;$i++){
    $t = array();
    $t['bid']=$i+1;
    $t['title']= $title[$i];
    $t['subTitle']= $subTitle[$i];
    $t['description']= $description[$i];
    $update[] = $t;
    $query =$query.$query_in.$t['bid'].",\"".$t['title']."\",\"".$t['subTitle']."\",\"".$t['description']."\");";
}
echo "<hr><hr>";
echo $query;
exit();
$query = "UPDATE users SET title = title,subTitle = subTitle, `description` = description  WHERE id = bid";

// $query = "INSERT INTO brand (id,title,subTitle,`description`) VALUES  ( bid, title,subTitle,description)";

// $params = ['title' => 'foobear', 'subTitle' => 1001,'description' => "dkfjs",'bid' => 1];

function build_pdo_query($string, $array) {
    //Get the key lengths for each of the array elements.
    $keys = array_map('strlen', array_keys($array));

    //Sort the array by string length so the longest strings are replaced first.
    array_multisort($keys, SORT_DESC, $array);

    foreach($array as $k => $v) {
        //Quote non-numeric values.
        $replacement = is_numeric($v) ? $v : "'{$v}'";

        //Replace the needle.
        $string = str_replace($k, $replacement, $string);
    }

    return $string;
}

// echo build_pdo_query($query, $update[0]);


// $dsn = 'sqlite:x3d.db';
// try{
//     $db = new PDO ($dsn,'user','password',array(
//         PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_EMULATE_PREPARES=>false,
//     ));
//     $db->exec("INSERT INTO user  VALUES (1 ,'luck' ,'tttt')");
// }catch (PDOEXception $e){
//     // echo "can't connect to the database";
//     print new Exception ($e->getMessage());
// }