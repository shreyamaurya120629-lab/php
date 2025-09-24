<?php
$name = isset($_POST['name']) ? $_POST['name'] : 'Student';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Thank You</title>
</head>
<body>
  <h2>Thank you, <?php echo htmlspecialchars($name); ?>! Your feedback has been submitted.</h2>
</body>
</html>
