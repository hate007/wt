<?php
session_start();

$Eno = $_SESSION['Eno'];
$Ename = $_SESSION['Ename'];
$Address = $_SESSION['Address'];
$Basic = $_SESSION['Basic'];
$DA = $_SESSION['DA'];
$HRA = $_SESSION['HRA'];

$total = $Basic + $DA + $HRA;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Information</title>
</head>
<body>
    <h2>Employee Information</h2>
    <p>Employee Number: <?php echo $Eno; ?></p>
    <p>Employee Name: <?php echo $Ename; ?></p>
    <p>Address: <?php echo $Address; ?></p>
    <p>Basic: <?php echo $Basic; ?></p>
    <p>DA: <?php echo $DA; ?></p>
    <p>HRA: <?php echo $HRA; ?></p>
    <p>Total Earnings: <?php echo $total; ?></p>
</body>
</html>
