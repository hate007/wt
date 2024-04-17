<!DOCTYPE html>
<html>
<head>
    <title>Actual Page</title>
    <style>
        body {
            <?php echo 'font-family: ' . $_COOKIE['font_style'] . ';'; ?>
            <?php echo 'font-size: ' . $_COOKIE['font_size'] . ';'; ?>
            <?php echo 'color: ' . $_COOKIE['font_color'] . ';'; ?>
            <?php echo 'background-color: ' . $_COOKIE['bg_color'] . ';'; ?>
        }
    </style>
</head>
<body>
    <h2>Actual Page with Preferences</h2>
    <p>This is the actual implementation with the selected preferences.</p>
</body>
</html>
