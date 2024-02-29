<?php

// MySQL Connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databasename";

$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($mysqli->connect_error) {
//     die("Failed to connect to MySQL: " . $mysqli->connect_error);
// }

//   // sql to create table
//   $dbtable = "CREATE TABLE puzzle_leads (
//     id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NULL,
//     email VARCHAR(255) NULL,
//     answers VARCHAR(255) NULL,
//     created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
//     updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
//   )";
    
//   if (mysqli_query($mysqli, $dbtable)) {
//     echo "Table leads created successfully";
//   } else {
//     echo "Error creating table: " . mysqli_error($mysqli);
//   }


?>