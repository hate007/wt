<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['Basic'] = $_POST['Basic'];
    $_SESSION['DA'] = $_POST['DA'];
    $_SESSION['HRA'] = $_POST['HRA'];
    header("Location: s4q1b.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Earning Details</title>
</head>
<body>
    <h2>Earning Details</h2>
    <form method="post" action="">
        Basic: <input type="text" name="Basic"><br>
        DA: <input type="text" name="DA"><br>
        HRA: <input type="text" name="HRA"><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
