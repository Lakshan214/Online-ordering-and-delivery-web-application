<section class="categories">
    <div class="container">
        <div class="row">
           
            <div class="categories__slider owl-carousel">
                @foreach ( $catagory1 as  $catagory1)
                <div class="col-lg-3">
                    
                   
                    
                    <div class="categories__item set-bg" data-setbg="/product/{{$catagory1->image}}" >
                        
                        <h5><a href="#">{{$catagory1->CatagoryName}} </a></h5>
                       
                    </div>
                   
                </div>
                @endforeach 
               
            </div>
            
        </div>
    </div>
</section><br><br>