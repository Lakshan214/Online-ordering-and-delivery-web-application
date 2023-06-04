










<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('Home.links')
</head>

<body>
    <!-- Page Preloder -->
    @include('Home.navbar')
    <!-- Humberger End -->
  
    <!-- Header Section Begin -->
    @include('Home.header')
    <!-- Header Section End -->
        <h3 style="text-align: center; font-size:30px; color:#7fad39;"><b>My Order Details</b></h3> 
 
        
          <div style="padding:40px;">
          <table class="table"  >
            <thead class="thead-light">
              <tr>
               
                <th scope="col">Castrmoer Details</th>
                <th scope="col">Order Details</th>
              </tr>
            </thead>
            @foreach ($order as $item)
            <tbody>
              <tr>
                
              
                <td  style="font-size:20px;" ><h2>1. Name:<b>{{ $item->name }}</b></h2>
                    <h3>2. Email:<b>{{ $item->email }}</b></h3>
                    <h3>3. Phone:<b>{{ $item->phone }}</b></h3>
                    <h3>4. Address:<b>{{ $item->address }},</b></h3>
                   <h3>   <b>{{ $item->City }},{{ $item->Locatontype }}</b></h3>
                </td>
                <td style="font-size:20px;">
                    <h3>1. Order Id:<b>{{ $item->id }}</b></h3>
                    <h3>2. Order Created date:<b> {{ $item->created_at }}</b></h3>
                    <h3>3. Payment Mode: <b>{{ $item->pmode }}</b></h3>
                    <h3>4. Status:<b> {{ $item->status }}</b></h3>

                </td>
                @endforeach
              </tr>
             
            
            </tbody>
          </table>


          
    

          </div>
    
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Quntity</th>
                <th scope="col">Price</th>
                <th scope="col">Sub Total</th>
                
                
              </tr>
            </thead>
            @foreach ($orderItem as $key=> $item)
            <tbody>
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{ $item->Name}}</td>
                <td>
                  <img style="width: 50px; height: 50px;" src="/product/{{$item->img}}">
                </td>
                <td>{{ $item->quntity}}</td>
                <td>{{ $item->Price}}</td>
                <td>{{ $item->Price* $item->quntity}}</td>
              </tr>
            
            </tbody>
            @endforeach
          </table>
          <br><br>

   
    

    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')



    <!--End of Tawk.to Script-->

</body>

</html>
























































