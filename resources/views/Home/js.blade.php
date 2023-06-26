<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/mixitup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
   
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/645fca2f74285f0ec46b47fd/1h0b2rjia';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script>

<script>
    let value=0;
    function cartCounter(){
    value++;
    document.getElementById("count").innerHTML = value;
    }

</script>


  <script>
  
  // Retrieve the product count from localStorage or set it to 0 if not found
  let productCount = parseInt(localStorage.getItem("productCount")) || 0;

  // Function to increment the product count
  function incrementProductCount() {
    productCount++;
    updateProductCountDisplay();
    updateLocalStorage();
  }

  // Function to decrement the product count
  function decrementProductCount() {
    if (productCount > 0) {
      productCount--;
      updateProductCountDisplay();
      updateLocalStorage();
    }
    function zeroo() {
    
    productCount = 0;
    updateProductCountDisplay();
    updateLocalStorage();
    }
  }

  // Function to update the product count display
  function updateProductCountDisplay() {
    document.getElementById("productCount").textContent = productCount;
  }

  // Function to update the product count in localStorage
  function updateLocalStorage() {
    localStorage.setItem("productCount", productCount);
  }
</script>
    <script>
        // Update the product count display when the page is loaded
        window.addEventListener("DOMContentLoaded", updateProductCountDisplay);
      </script>


