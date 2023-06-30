<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/mixitup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
   
<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/649a5a6b94cf5d49dc60068c/1h3tf2e1d';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->


  <script>
    let productCount = parseInt(localStorage.getItem("productCount")) || 0;
  
    function incrementProductCount() {
      productCount++;
      
      updateLocalStorage();
    }
  
    function decrementProductCount() {
      if (productCount > 0) {
        productCount--;
        updateLocalStorage();
      }
    }
  
    function zeroProductCount() {
      if (productCount > 0) {
        productCount = 0;
        updateLocalStorage();
      }
    }
  
    function updateProductCountDisplay() {
      document.getElementById("productCount").textContent = productCount;
      
    }
  
    function updateLocalStorage() {
      localStorage.setItem("productCount", productCount);
    }
    updateProductCountDisplay();
  </script>

  <script>
    let productCount = parseInt(localStorage.getItem("productCount")) || 0;
  
    function increment() {
      productCount++;
      
      updateLocalStorage();
    }
  
    function decrement() {
      if (productCount > 0) {
        productCount--;
        updateLocalStorage();
      }
    }
  
   
  
    function Display() {
      document.getElementById("Count").textContent = productCount;
      
    }
  
    function updateLocalStorage() {
      localStorage.setItem("productCount", productCount);
    }
    Display();
  </script>

    


