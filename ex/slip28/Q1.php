<?php
// Establish database connection
$conn = pg_connect("host=localhost port=5432 dbname=teacher user=postgres password=makasare0031");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Get username and password from AJAX request
$username = $_POST['username'];
$password = $_POST['password'];

// Query the users table for the entered username and password
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = pg_query($conn, $sql);

if ($result) {
    $rows = pg_num_rows($result);

    if ($rows > 0) {
        echo "valid";
    } else {
        echo "invalid";
    }

    // Free result and close connection
    pg_free_result($result);
} else {
    echo "Error executing query: " . pg_last_error();
}

// Close database connection
pg_close($conn);
?>
