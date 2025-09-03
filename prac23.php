<?php
// Array create
$arr = array(50, 20, 40, 10, 30);

echo "Original Array:<br>";
print_r($arr);
echo "<br><br>";

// 1. sort() - Ascending order (values ke basis par)
$sortArr = $arr;
sort($sortArr);
echo "After sort() (Ascending Values):<br>";
print_r($sortArr);
echo "<br><br>";

// 2. rsort() - Descending order (values ke basis par)
$rsortArr = $arr;
rsort($rsortArr);
echo "After rsort() (Descending Values):<br>";
print_r($rsortArr);
echo "<br><br>";

// 3. asort() - Ascending order (values ke basis par, index preserve)
$asortArr = $arr;
asort($asortArr);
echo "After asort() (Ascending Values, Index Preserved):<br>";
print_r($asortArr);
echo "<br><br>";

// 4. arsort() - Descending order (values ke basis par, index preserve)
$arsortArr = $arr;
arsort($arsortArr);
echo "After arsort() (Descending Values, Index Preserved):<br>";
print_r($arsortArr);
echo "<br><br>";

// 5. ksort() - Ascending order (keys ke basis par)
$ksortArr = $arr;
ksort($ksortArr);
echo "After ksort() (Ascending Keys):<br>";
print_r($ksortArr);
echo "<br><br>";

// 6. krsort() - Descending order (keys ke basis par)
$krsortArr = $arr;
krsort($krsortArr);
echo "After krsort() (Descending Keys):<br>";
print_r($krsortArr);
?>