<!doctype html>

<!--File Name: template.html -->
<!--Date: 04/30/2018 -->
<!--Programmer: Linda Lander -->

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>ACE MultiSport</title>
    
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
    
    <div class="content">
    <h1>      
        Ace in the Hole Multisport Events<img src="images/placeholder.jpg" alt="Place Holder Image" title="Place Holder" >
    </h1>
    </div>
    
   
    <nav class="menu-navigation-round">
      
      <ul>
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#coursedetails">Course Details</a></li>
            <li><a href="#Events Schedule">Event Schedule</a></li>
            <li><a href="#cost-registration">Cost and Registation</a></li>
            <li><a href="#faq">FAQs</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>   
       
    </nav>
        
      
  </header>  
      

<main>
    <!--  
    
<div class="hero-section">
  <div class="hero-section-text">
    <h1>HERO IMAGE</h1>
    <h2>PLACE HOLER</h2>
  </div>
</div>
    -->
     
    
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/athletes.jpg" style="width:100%">
  <div class="text">PLACE HOLDER</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/finish-line.jpg" style="width:100%">
  <div class="text">PLACE HOLDER</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/race.jpg" style="width:100%">
  <div class="text">PLACE HOLDER</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

    <section>
    
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
        
    </section>
    
    <section>
    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    
    </section>
    
    <section>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    
    </section>
    


</main>

<footer>
     <h2>
        Ace in the Hole Multisport Events
    </h2>
    
    <div class="container">   
        <ul>       
            
            <li><a href="#">Contact Link</a></li>
            <li><a href="#">Site Map Link</a></li>
            <li><a href="#">Face Book</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Instagram</a></li>
    </ul> 
            <p>&copy; Copyright 2018 Ace In The Hole Multisport Events</p>
       
    </div>
 </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="scripts/jquery.slicknav.min.js"></script>
    <script src="scripts/jquery.slide.js"></script>
    

<script>

    $(function(){

        var menu = $('.menu-navigation-round');

        menu.slicknav();

        // Mark the clicked item as selected

        menu.on('click', 'a', function(){
            var a = $(this);

            a.siblings().removeClass('selected');
            a.addClass('selected');
        });
    });


    

</script>
    
   
    
</body>
</html>