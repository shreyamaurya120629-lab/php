<?php
// Array create karo
$arr = array(10, 20, 30, 40, 50, 60);

echo "Original Array:<br>";
print_r($arr);
echo "<br><br>";

// 1. Without using array_reverse()
echo "Array in Reverse Order (without array_reverse()):<br>";
for ($i = count($arr) - 1; $i >= 0; $i--) {
    echo $arr[$i] . " ";
}
echo "<br><br>";

// 2. With using array_reverse()
echo "Array in Reverse Order (with array_reverse()):<br>";
$revArr = array_reverse($arr);
print_r($revArr);
?>