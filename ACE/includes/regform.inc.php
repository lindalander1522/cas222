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
$sql = "INSERT INTO registration ( name, email, phone, category, saturday, sunday, gender, size, ename, ephone ) VALUES ( '{$mysqli->real_escape_string($_POST['name'])}', '{$mysqli->real_escape_string($_POST['email'])}', '{$mysqli->real_escape_string($_POST['phone'])}', '{$mysqli->real_escape_string($_POST['category'])}', '{$mysqli->real_escape_string($_POST['saturday'])}', '{$mysqli->real_escape_string($_POST['sunday'])}', '{$mysqli->real_escape_string($_POST['gender'])}', '{$mysqli->real_escape_string($_POST['size'])}', '{$mysqli->real_escape_string($_POST['ename'])}', '{$mysqli->real_escape_string($_POST['ephone'])}')";
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
    <label for="phone">Phone</label>
  <input name="phone" type="text">
    <br>
    <br>
    <label for="category">Category</label>
  <select size="1" name="category" id="category">
          <option>Choose Your Category</option>
          <option value="athlete">Athlete</option>
          <option value="volunteer">Volunteer</option>
        </select>
    <br>
    <br>
    <label for="saturday">Saturday</label>
  <select size="1" name="saturday" id="saturday">
          <option>Choose Your Event</option>
          <option value="longcoursetriathlon">Long Course Triathlon - $240</option>
          <option value="olympictriathlon">Olympic Triathlon - $110</option>
          <option value="10k">10k">10K - $50</option>
          <option value="halfmarathon">Half Marathon - $75</option>
        </select>
    <br>
    <br>
    <label for="sunday">Sunday</label>
  <select size="1" name="sunday" id="sunday">
          <option>Choose Your Event</option>
          <option value="sprinttriathlon">Sprint Triathlon - $90</option>
          <option value="tryatri">Tri-A-Tri - $65</option>
          <option value="splashndash">Splash-n-Dash - Free with Adult, or $25</option>
        </select>
    <br>
    <br>
    
    <label for="gender">Gender</label>
  <select size="1" name="gender" id="gender">
          <option>Gender</option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="non-binary">Non-binary</option>
        </select>
    <br>
    <br>
    
    <label for="size">T-shirt size</label>
  <select size="1" name="size" id="size">
          <option>Size</option>
          <option value="xs">XS</option>
          <option value="s">S</option>
          <option value="m">M</option>
          <option value="L">L</option>
          <option value="xl">XL</option>
          <option value="xxl">XXL</option>
          <option value="xxxl">XXXL</option>
     
        </select>
    <br>
    <br>
    
    
    <label for="ename">Emergency Name</label>
  <input name="ename" type="text">
    <br>
    <br>
    
    <label for="ephone">Emergency Phone</label>
  <input name="ephone" type="text">
    <br>
    
    <br>
    
    
  <input type="submit" value="Submit Form">
</form>