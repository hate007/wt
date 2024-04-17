<?php
setcookie('font_style', $_POST['font_style'], time() + (86400 * 30), "/");
setcookie('font_size', $_POST['font_size'], time() + (86400 * 30), "/");
setcookie('font_color', $_POST['font_color'], time() + (86400 * 30), "/");
setcookie('bg_color', $_POST['bg_color'], time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Preferences</title>
</head>
<body>
    <h2>Display Preferences</h2>
    <p>Font Style: <?php echo $_POST['font_style']; ?></p>
    <p>Font Size: <?php echo $_POST['font_size']; ?></p>
    <p>Font Color: <?php echo $_POST['font_color']; ?></p>
    <p>Background Color: <?php echo $_POST['bg_color']; ?></p>
    <a href="s2q1b.php">View Actual Page</a>
</body>
</html>
