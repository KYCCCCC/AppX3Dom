<?php
$b=array(
    aa=>"aaa",
    bs=>"bbb"
);
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));

print_r (array_merge($a,$b));
echo json_encode(array_merge($a,$b));
// echo($a);