<?php
$numbers=array();
for($i=0; $i<10; $i++) {
    $numbers[$i]=$i+1;
}
echo"<h3>Indexed Array of size 10</h3>";
for($i=0; $i<10; $i++) {
    echo"Index[$i]=>".$numbers[$i]."<br>";
}
?>