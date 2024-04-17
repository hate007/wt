<?php
    // Connect to the database
    $conn = pg_connect("host=localhost port=5432 dbname=teacher user=postgres password=makasare0031");

    // Check connection
    if(!$conn){
        die("Connection failed: " . pg_last_error());
    }

    // Retrieve data
    if(isset($_POST['tno'])){
        $tno = $_POST['tno'];
        $sql = "SELECT * FROM teacher WHERE tno='$tno'";
        $result = pg_query($conn, $sql);
        
        if($result){
            $numRows = pg_num_rows($result);

            if($numRows > 0){
                $row = pg_fetch_assoc($result);
                echo "<br><b>Teacher Name:</b> " . $row['tname'] . "<br>";
                echo "<b>Qualification:</b> " . $row['qualification'] . "<br>";
                echo "<b>Salary:</b> " . $row['salary'] . "<br>";
            } else {
                echo "No data found.";
            }
        } else {
            echo "Error in query: " . pg_last_error();
        }
    }

    // Close database connection
    pg_close($conn);
?>
