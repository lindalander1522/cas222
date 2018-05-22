<?php

$servername = "localhost";
$username = "ace";
$password = "myP4ssw0rd";
$dbname = "ace";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_category = $_POST['categor'];
$users_questions = $_POST['questions'];

// Create connection
$conn = new mysqli($localhost, $ace, $myP4ssw0rd, $ace);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `ace`.`contact` (`name`, `email`, `category`, `questions`) VALUES (NULL, '$users_name',
        '$users_email', '$users_category', '$users_questions',
        CURRENT_TIMESTAMP);";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

