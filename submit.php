<<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection settings
$host = "localhost"; // Your database host
$port = "5432"; // Your database port
$dbname = "hospital-db"; // Your database name
$user = "postgres"; // Your database user
$password = "Radica13!"; // Your database password

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Check connection
if (!$conn) {
    error_log("Connection failed: " . pg_last_error());
    http_response_code(500);
    echo "Internal Server Error";
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];

    // Prepare and execute the SQL query
    $query = "INSERT INTO appointments (name, email, phone, appointment_date) VALUES ('$name', '$email', '$number', '$date')";
    $result = pg_query($conn, $query);

    // Check the result of the query
    if (!$result) {
        error_log("Error in SQL query: " . pg_last_error());
        http_response_code(500);
        echo "Internal Server Error";
        exit();
    } else {
        // Redirect to the home section after successful submission
        header("Location: home.html#home");
        exit();
    }
}

// Close the database connection
pg_close($conn);
?>
>
