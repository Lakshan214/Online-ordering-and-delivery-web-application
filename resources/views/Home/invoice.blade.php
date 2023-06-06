<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 6px;
  padding-bottom:6px;
  text-align: left;
  background-color: #023321;
  color: white;
}
#customers b {
    color:rgb(114, 14, 14); 
}
</style>
</head>
<body>

    <h3 style="text-align:center; font-size:30px; color:#7fad39;"><b>My Order Details</b></h3> 

<table id="customers">
  <tr>
    <th scope="col">Castrmoer Details</th>
    <th scope="col">Order Details</th>
  </tr>
  <tr>
    @foreach ($order as $item)
    <tbody>
      <tr>
        
      
        <td  style="font-size:20px;" ><h4>1. Name:<b>{{ $item->name }}</b></h4>
            <h4>2. Email:<b >{{ $item->email }}</b></h4>
            <h4>3. Phone:<b>{{ $item->phone }}</b></h4>
            <h4>4. Address:<b>{{ $item->address }},</b></h4>
           <h4>   <b>{{ $item->City }},{{ $item->Locatontype }}</b></h4>
        </td>
        <td style="font-size:20px;">
            <h4>1. Order Id:<b>{{ $item->id }}</b></h4>
            <h4>2. Order Created date:<b> {{ $item->created_at }}</b></h4>
            <h4>3. Payment Mode: <b>{{ $item->pmode }}</b></h4>
  
        </td>
        @endforeach
      </tr>
</table>
<br><br>
<table id="customers">
   <th scope="col">id</th>
      <th scope="col">Name</th>
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
      <td>{{ $item->quntity}}</td>
      <td>Rs.{{ $item->Price}}</td>
      <td>Rs.{{ $item->Price* $item->quntity}}</td>
    </tr>
    <?php $total+=$item->Price* $item->quntity; ?>
  </tbody>
  @endforeach
</table>
<hr>
<h3 style="text-align: center; font-size:30px; color:#960505;"><b>Total:Rs.{{$total}}.00</b></h3> 
<br><br>


</body>
</html>



















