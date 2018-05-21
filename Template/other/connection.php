<?php
$servername = "localhost";
$username = "ace";
$password = "myP4ssw0rd";
$dbname = "ace";

// Create connection
$conn = new mysqli($localhost, $ace, $myP4ssw0rd, $ace);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO ace (name, email, category, questions)
VALUES ('John Doe', 'john@example.com', 'volunteer', 'some text',)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>