<!DOCTYPE html>
<html lang="en">

  <head>
 
    
    @include('Home.links')
    
    <!-- ***** Header Area Start ***** -->
    @include('Home.header')
    <!-- ***** Header Area End ***** -->
    @include('Home.socal')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="left-images">
                    <img style="height: 600px;" src="/Home/assets/images/g1.png" alt="">
                    <img src="/Home/assets/images/p2.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>Face Wash</h4>
                    <span>RS.375.00</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>The skin around the eyes is delicate and susceptible to damage. Our wrinkle-fighting eye cream is engineered to fortify this skin, making it stronger, visibly smoother, and more resilient.
                        Helps visibly smooth lines and wrinkles and strengthen skin from multiple angles: boosts skin’s natural collagen, helps support skin’s natural structure, strengthens skin’s moisture barrier.</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>Helps strengthen your dermal support structure for smoother, younger-looking skin.</p>
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <button onclick="decrementCounter()" class="minus">-</button><input  type="text" id="counter" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><button onclick="incrementCounter()" class="minus">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: RS.210.00</h4>
                        <div class="main-border-button"><a href="#">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Footer Start ***** -->
    @include('Home.footer')
    

   @include('Home.js')

	<script>
		function incrementCounter() {
			var counter = document.getElementById("counter");
			var currentValue = parseInt(counter.value);
			counter.value = currentValue + 1;
		}

        function decrementCounter()
        {
			var counter = document.getElementById("counter");
			var currentValue = parseInt(counter.value);
			counter.value = currentValue - 1;
		}
	</script>
<


  </body>
</html>