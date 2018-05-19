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
    
    <!--  
    
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/athletes.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/finish-line.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/race.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
-->
    <section>
    
    <p>SOME TEXT</p>
        
     <form action="contact_form.php" method="post">
    <label for="cname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="ce-mail">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your e-mail..">

    <label for="category">Category</label>
    <input type="text" id="category" name="category" placeholder="Your category..">

    <label for="comment">Comment or Question</label>
    <textarea id="comment" name="comment">Put your comment here.</textarea>

    <input type="submit" value="Submit">
</form>   
        
     
    </section>
    
  
    
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