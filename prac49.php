<?php
if (isset($_COOKIE['visits'])) {
    // Agar cookie already hai to value +1 karo
    $visits = $_COOKIE['visits'] + 1;
    setcookie("visits", $visits, time() + 86400 * 30, "/"); // 30 din tak cookie valid
    echo "You have visited $visits times.";
} else {
    // Agar pehli baar visit kiya hai
    $visits = 1;
    setcookie("visits", $visits, time() + 86400 * 30, "/");
    echo "This is your first visit!";
}
?>