










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
        <h3 style="text-align: center;"><b>My Order</b></h3> 
    <br><br>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Date</th>
            <th scope="col">Status Msg</th>
            <th scope="col">Payment method</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
       
      
      @foreach ($order as $item)
         
              <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->status }}</td>
                  <td>{{ $item->pmode }}</td>
                  <td><a href="{{route('order.orderDetails',$item->id)}}" class="btn btn-primary " >View</a></td>
              </tr>
          
          @endforeach
      
        </tbody>
      </table>
      {{$order->links()}}
      <br><br>

    

    
    


   
    

    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')



    <!--End of Tawk.to Script-->

</body>

</html>
























































