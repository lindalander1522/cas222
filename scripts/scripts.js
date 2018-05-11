<script type="text/javascript">
	jQuery(function($){
    	$( '.menu-btn' ).click(function(){
    		$('.responsive-menu').addClass('expand')
    		$('.menu-btn').addClass('btn-none')
    	})
    	
    	 $( '.close-btn' ).click(function(){
    		$('.responsive-menu').removeClass('expand')
    		$('.menu-btn').removeClass('btn-none')
    	})
  	})
 </script>





var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}