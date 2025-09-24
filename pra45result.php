<?php
$score = 0;

$answers = array(
    'q1' => 'a',
    'q2' => 'b',
    'q3' => 'b'
);

foreach ($answers as $q => $ans) {
    if (isset($_POST[$q]) && $_POST[$q] == $ans) {
        $score++;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Quiz Result</title>
</head>
<body>
  <h2>Your Score: <?php echo $score; ?> / 3</h2>
</body>
</html>
