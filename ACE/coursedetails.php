<!doctype html>

<!--File Name: template.html -->
<!--Date: 04/30/2018 -->
<!--Programmer: Linda Lander -->

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>ACE Course Details</title>
    
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
    
   
    <?php include 'includes/slides.inc.php';?> 
      
      <section>
        <h4>
        COURSE DETAILS
        </h4>
    </section>

    <section>
        <h3>
        <a href="rules.php">Link to Course Rules</a>
        </h3>
    </section>
      
      <div class="water">
        <h2>
        WATER TEMPERATURE
        </h2>
    <p>It is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p>
        </div>
    
    <section id= "details">
    
 
        <h2>
        LONG COURSE SWIM - 1.2mi
        </h2>
        
        <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
    
    <hr>
        
        <h2>
        LONG COURSE BIKE - 58 Miles
        </h2>
        
         <p>A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>
        
     <hr>
        
        <h2>
        LONG COURSE RUN
        </h2>
        
        <p>13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
        
    <hr>
        
        <h2>
        OLYMPIC SWIM
        </h2>
        
        <p>11,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
        
    <hr>
        
        <h2>
        OLYMPIC BIKE – 28mi
        </h2>
        
        <p>28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections.</p>
        
    <hr>
        
        <h2>
        OLYMPIC RUN – 10K
        </h2>
        
        <p>A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>
        
    <hr>
        
        <h2>
        SPRINT
        </h2>
        
        <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>
        
    <hr>
        
        <h2>
        TRY-A-TRI
        </h2>
        
        <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>
        
    <hr>
        
        <h2>
        HALF MARATHON COURSE:
        </h2>
        
        <p>Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</p>
        
    <hr>
        
        <h2>
        10k COURSE
        </h2>
        
        <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>
        
    <hr>
        <br>
        </section>
      
      <div class="party-img">
      
      <img src="images/party.jpg" alt="After Race Party" title="After Race Party" >
          
          </div>
      
      <div class="party">
          
        <h4>After Race Party
        </h4>
    
        </div>
        
    
    </section>
    
<div id="remember">
        <h4><p>Remember to bring a change of clothing so you can enjoy the post-event festivities.</p></h4>
        </div>

</main>
    
    <footer>
    
    <?php include 'includes/footer.inc.php';?>
    

</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="scripts/jquery.slicknav.min.js"></script>
    <script src="scripts/jquery.slide.js"></script>
   <script src="scripts/jquery.menu-navigation-round.js"></script>
    <script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
    


    
   
    
</body>
</html>