










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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @php
          $previousUserId = null;
       @endphp
      
      @foreach ($order as $item)
          @php
              $id = $item->userId;
          @endphp
      
          @if ($id !== $previousUserId)
              <tr>
                  <th scope="row">{{ $item->id }}</th>
                  <td>{{ $item->userName }}</td>
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->status }}</td>
                  <td><a class="btn btn-primary " >View</a></td>
              </tr>
          @endif
      
          @php
              $previousUserId = $id;
          @endphp
          @endforeach
      
        </tbody>
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
























































