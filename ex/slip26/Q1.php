<?php
// Connect to your PostgreSQL database
$conn = pg_connect("host=localhost port=5432 dbname=teacher user=postgres password=makasare0031");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Get ename from POST data
$ename = pg_escape_string($_POST['ename']);  // Prevent SQL injection

// Fetch employee details from the database
$query = "SELECT * FROM EMP WHERE ename = '$ename'";
$result = pg_query($conn, $query);

// Display employee details
if ($row = pg_fetch_assoc($result)) {
    echo "<p>Employee Details:</p>";
    echo "<p>Employee Number: {$row['eno']}</p>";
    echo "<p>Employee Name: {$row['ename']}</p>";
    echo "<p>Designation: {$row['designation']}</p>";
    echo "<p>Salary: {$row['salary']}</p>";
} else {
    echo "No data found for the entered employee name.";
}

// Close the connection
pg_close($conn);
?>
