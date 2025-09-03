<?php
$arr=array();
for($i=0; $i<10; $i++){
    $arr[$i]=$i+1;
}
echo"Indexed Array of size 10 :<br>";
for($i=0; $i<10; $i++){
    echo"Index $i=>".$arr[$i]."<br>";
}
?>