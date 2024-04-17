<?php
// Establish connection to PostgreSQL database
$conn = pg_connect("host=localhost port=5432 dbname=teacher user=postgres password=makasare0031");

// Check if connection was successful
if (!$conn) {
    echo "Connection failed.";
    exit;
}

// Create student table
$query = "CREATE TABLE student1 (
            Rollno INTEGER PRIMARY KEY,
            Name VARCHAR(50) NOT NULL,
            Class VARCHAR(10) NOT NULL
          )";
$result = pg_query($conn, $query);
if (!$result) {
    echo "Error creating table: " . pg_last_error($conn);
    exit;
} else {
    echo "<br>Table created successfully.<br>";
}

// Insert records into student table
$insert_query = "INSERT INTO student1 (rollno, name, class)
                VALUES 
                (1, 'Kunal Datiar', 'SYBCS'),
                (2, 'Arpita Kharkar', 'TYBCS-A'),
                (3, 'Naufil Shaha', 'TYBCS-B'),
                (4, 'Ishika Abbad', 'FYBCS'),
                (5, 'Vashnavi Aringale', 'TYBCS-B')";
$insert_result = pg_query($conn, $insert_query);
if (!$insert_result) {
    echo "Error inserting records: " . pg_last_error($conn);
    exit;
} else {
    echo "<br>Records inserted successfully.<br>";
}

// Close database connection
pg_close($conn);
?>
