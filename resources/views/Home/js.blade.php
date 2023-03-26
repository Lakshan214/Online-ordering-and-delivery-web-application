 <!-- jQuery -->
 <script src="Home/assets/js/jquery-2.1.0.min.js"></script>

 <!-- Bootstrap -->
 <script src="Home/assets/js/popper.js"></script>
 <script src="Home/assets/js/bootstrap.min.js"></script>

 <!-- Plugins -->
 <script src="Home/assets/js/owl-carousel.js"></script>
 <script src="Home/assets/js/accordions.js"></script>
 <script src="Home/assets/js/datepicker.js"></script>
 <script src="Home/assets/js/scrollreveal.min.js"></script>
 <script src="Home/assets/js/waypoints.min.js"></script>
 <script src="Home/assets/js/jquery.counterup.min.js"></script>
 <script src="Home/assets/js/imgfix.min.js"></script> 
 <script src="Home/assets/js/slick.js"></script> 
 <script src="Home/assets/js/lightbox.js"></script> 
 <script src="Home/assets/js/isotope.js"></script> 
 
 <!-- Global Init -->
 <script src="Home/assets/js/custom.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

 <script>

     $(function() {
         var selectedClass = "";
         $("p").click(function(){
         selectedClass = $(this).attr("data-rel");
         $("#portfolio").fadeTo(50, 0.1);
             $("#portfolio div").not("."+selectedClass).fadeOut();
         setTimeout(function() {
           $("."+selectedClass).fadeIn();
           $("#portfolio").fadeTo(50, 1);
         }, 500);
             
         });
     });

 </script>