<!doctype html>

<!--File Name: template.html -->
<!--Date: 04/30/2018 -->
<!--Programmer: Linda Lander -->

<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>ACE MultiSport Home</title>
    
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
    <!-- 
    <div class="hero-section">
  <div class="hero-section-text">
    <h1>HERO IMAGE</h1>
    <h2>PLACE HOLER</h2>
  </div>
</div>
    -->
   
   
    <?php include 'includes/slides.inc.php';?>   

    <section>
        <h2>
        ABOUT ACE IN THE HOLE MULTISPORT EVENTS
        </h2>
    
    <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
        
    </section>
    
    <section>
        <h2>
        ABOUT THE EVENT
        </h2>
    <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
        
    <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
    
    </section>
    
    <section>
        <h2>
        WHAT TO BRING
        </h2>
        
        <p>Watch the weather closely. The show goes on no matter what the weather is doing.</p>
    
         <p>You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p>
        <br>
        
        <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" >PORTLAND WEATHER</a>

        
        <p><h3>Swim:</h3> Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p>
        
        <p><h3>Bike:</h3> A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
        
        <p><h3>Run:</h3> You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you.</p>
        
    
    </section>
    


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