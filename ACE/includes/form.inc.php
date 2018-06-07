<?php
// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {

  // Connect to MySQL
  $mysqli = new mysqli( 'localhost', 'ace1234', 'myP4ssw0rd', 'ace123' );

  // Check our connection
  if ( $mysqli->connect_error ) {
    die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
  }

  // Insert our data
  $sql = "INSERT INTO contact ( name, email, category, questions ) VALUES ( '{$mysqli->real_escape_string($_POST['name'])}', '{$mysqli->real_escape_string($_POST['email'])}', '{$mysqli->real_escape_string($_POST['category'])}', '{$mysqli->real_escape_string($_POST['questions'])}')";
  $insert = $mysqli->query($sql);

  // Print response from MySQL
  if ( $insert ) {
    echo "Success! Row ID: {$mysqli->insert_id}";
  } else {
    die("Error: {$mysqli->errno} : {$mysqli->error}");
  }

  // Close our connection
  $mysqli->close();
}
?>
<form method="post" action="">
    <label for="name">Name</label>
  <input name="name" type="text">
    <br>
    <br>
    <label for="email">E-mail</label>
  <input name="email" type="email">
    <br>
    <br>
    <label for="category">Category</label>
    
        <select size="1" name="category" id="category">
          <option>Choose Your Category</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
          <option value="interested party">Interested Party</option>
        </select>
    <br>
    <br>
    <label for="comment">Comment or Question</label>
    <input name="questions" type="text">
    <br>
    <br>
  <input type="submit" value="Submit Form">
</form>