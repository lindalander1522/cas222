

<!doctype html>

<!--File Name: template/contact.php -->
<!--Date: 05/17/2018 -->
<!--Programmer: Linda Lander -->

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>ACE MultiSport Contact</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
     <!-- <link rel="stylesheet" href="css/navigation-round.css">-->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
    
<body>

   
<header>
    
     <?php include 'includes/header.inc.php';?>
      
  </header>  
      

<main>
    
    <div class="hero-section">
  <div class="hero-section-text">
    <h1>HERO IMAGE</h1>
    <h2>PLACE HOLER</h2>
  </div>
</div>
    <br>
    
    <h2>
    Please fill in the contact form below to communicate your questions to us. We will contact you by email with answers. 
    </h2>

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
    <label for="email">E-mail</label>
  <input name="email" type="email">
    <br>
    <label for="category">Category</label>
    <input name="category" type="text">
    <br>
    <label for="comment">Comment or Question</label>
    <input name="questions" type="text">
    <br>
  <input type="submit" value="Submit Form">
</form>
    
    </main>
    
    <footer>
    
    
    <?php include 'includes/footer.inc.php';?>

</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="scripts/jquery.slicknav.min.js"></script>
    <script src="scripts/jquery.slide.js"></script>
   <script src="scripts/jquery.menu-navigation-round.js"></script>
    


    
   
    
</body>
</html>
