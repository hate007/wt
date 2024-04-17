<?php

session_start();

if(isset($_SESSION['page_visits'])) {
    $_SESSION['page_visits']++;
} else {
    $_SESSION['page_visits'] = 1;
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Page Visit Counter</title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Page Visit Counter</h1>
        <p>You have visited this page <?php echo $_SESSION['page_visits']; ?> time(s).</p>
    </div>
</body>
</html>
