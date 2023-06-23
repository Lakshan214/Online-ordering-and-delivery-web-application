










<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('Home.links')
</head>

<body>
  @include('sweetalert::alert')
    <!-- Page Preloder -->
    @include('Home.navbar')
    <!-- Humberger End -->
  
    <!-- Header Section Begin -->
    @include('Home.header')
    <!-- Header Section End -->
        <h3 style="text-align:center; font-size:30px; color:#7fad39;"><b>My Order Details</b></h3> 
       
          <div style="padding:40px;">
          <table class="table"  >
            
        <a href="{{route('order.printPDF',$orderid)}}" class="btn btn-success"  >Print Pdf</a><span style="margin-right: 10px;"></span>
        {{-- <a href="{{route('order.mail',$orderid)}}" class="btn btn-praymary"  >Send Email</a> --}}
         <a href="{{route('order.tracking',$orderid)}}" class="btn btn-warning">Order tracking</a>
        <br><br>
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
            <?php $total=0; ?>
            @foreach ($orderItem as $key=> $item)
            <tbody>
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{ $item->Name}}</td>
                <td>
                  <img style="width: 50px; height: 50px;" src="/product/{{$item->img}}">
                </td>
                <td>{{ $item->quntity}}</td>
                <td>Rs.{{ $item->Price}}</td>
                <td>Rs.{{ $item->Price* $item->quntity}}</td>
              </tr>
              <?php $total+=$item->Price* $item->quntity; ?>
            </tbody>
            @endforeach
          </table>
          <h3 style="text-align: center; font-size:30px; color:#8d2f2f;"><b>Total:Rs.{{$total}}.00</b></h3> 
          <br><br>
        
   
    

    <!-- Footer Section Begin -->
    @include('Home.footer')
    <!-- Footer Section End -->
    
    <!-- Js Plugins -->

    @include('Home.js')



    <!--End of Tawk.to Script-->

</body>

</html>
























































