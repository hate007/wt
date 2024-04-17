<?php
// Function to display database records
function display_records($table_name) {
    // Establish connection to PostgreSQL database
    $conn = pg_connect("host=localhost port=5432 dbname=teacher user=postgres password=makasare0031");

    // Check if connection was successful
    if (!$conn) {
        echo "Connection failed.";
        exit;
    }

    // Retrieve records from the specified table
    $query = "SELECT * FROM " . $table_name;
    $result = pg_query($conn, $query);

    // Check if query was successful
    if (!$result) {
        echo "Error retrieving records.";
        exit;
    }

    // Display records in an HTML table
    echo "<table>";
    echo "<tr><th>Roll No</th><th>Name</th><th>Class</th></tr>";

    while ($row = pg_fetch_assoc($result)) {
        echo "<tr><td>" . $row['rollno'] . "</td><td>" . $row['name'] . "</td><td>" . $row['class'] . "</td></tr>";
    }

    echo "</table>";

    // Close database connection
    pg_close($conn);
}

// Example usage: Display records from the "student" table
display_records("student");
?>
