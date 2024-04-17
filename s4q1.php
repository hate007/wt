<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['Eno'] = $_POST['Eno'];
    $_SESSION['Ename'] = $_POST['Ename'];
    $_SESSION['Address'] = $_POST['Address'];
    header("Location: s4q1a.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <h2>Employee Details</h2>
    <form method="post" action="">
        Employee Number: <input type="text" name="Eno"><br>
        Employee Name: <input type="text" name="Ename"><br>
        Address: <input type="text" name="Address"><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
