<?php

// Connect to your database (replace these values with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_portal";


try {
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check for database connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

} catch (\Throwable $th) {
    die("Connection failed: " . $th->error_log);
}



?>
