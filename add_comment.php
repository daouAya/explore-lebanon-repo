<?php
session_start();

// Connect to the database
$host = "localhost";
$user = "username";
$password = "password";
$dbname = "database_name";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$username = mysqli_real_escape_string($conn, $_POST['username']);
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

// Insert the comment into the database
$sql = "INSERT INTO comments (username, comment, date_added) VALUES ('$username', '$comment', NOW())";
if (mysqli_query($conn, $sql)) {
    echo "Comment added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>