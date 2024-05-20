<?php
$host = "localhost";
$port = "5432";
$dbname = "hospital-db";
$user = "postgres";
$password = "Radica13!";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
} else {
    echo "Connection successful";
}

pg_close($conn);
?>>
