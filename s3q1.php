<?php
session_start();

$correct_username = "admin";
$correct_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_SESSION['attempt_count'])) {
        $_SESSION['attempt_count']++;
    } else {
        $_SESSION['attempt_count'] = 1;
    }

    if ($_SESSION['attempt_count'] > 3) {
        $error_message = "Maximum login attempts exceeded. Please try again later.";
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === $correct_username && $password === $correct_password) {
            header("Location: s3q1a.php");
        } else {
            $error_message = "Invalid username or password. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
        }
        h2 {
            color: #333;
        }
        p {
            color: #666;
            font-size: 18px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Form</h2>
        <?php if(isset($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } ?>
        <form method="post" action="s3q1.php">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
