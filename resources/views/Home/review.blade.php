










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
    <!-- Page Preloder -->
   
  
    <!-- Header Section Begin -->
 
    <!-- Hero Section End -->
   
    
   

    <!-- Banner Begin -->
  
    @include('Home.banner')
    <br>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Review</th>
            
          </tr>
        </thead>
        @foreach ($review as $items)
        <tbody>
            @if($items->status==1)
            @if($items->user)
          <tr>
            <th scope="row">{{$items->id}}</th>
            <td>{{$items['user']['name']}}</td>
            @else
            <td >No name </td>
             @endif
            <td style="color: rgb(226, 43, 43)"><b>{{$items->review}}</b></td>
          
          </tr>
       
        </tbody>
      </table>
      @endif
     @endforeach

   <br>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
   
    <!-- Latest Product Section End -->

   
    
   
    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')


</body>

</html>




























