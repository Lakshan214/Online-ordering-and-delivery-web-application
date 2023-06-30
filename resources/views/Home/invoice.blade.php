<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #f2f2f2;
}

.container {
  margin: 50px auto;
  max-width: 800px;
  padding: 20px;
  background-color: #ffffff;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
}

.heading {
  text-align: center;
  font-size: 30px;
  color: #e1e4de;
  margin-bottom: 30px;
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

.table th,
.table td {
  border: 1px solid #ddd;
  padding: 10px;
}

.table th {
  background-color: #023321;
  color: white;
}

.table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

.total {
  text-align: right;
  font-size: 24px;
  color: #960505;
  margin-top: 30px;
}

.total span {
  font-weight: bold;
}

.customer-details {
  font-size: 18px;
  color: #333333;
}

.customer-details b {
  color: #960505;
}

.invoice-note {
  font-size: 14px;
  color: #555555;
  margin-top: 20px;
}

.invoice-note p {
  margin: 5px 0;
}

.footer {
  margin-top: 30px;
  text-align: center;
  font-size: 14px;
  color: #777777;
}

.footer p {
  margin: 5px 0;
}
</style>
</head>
<body>

<div class="container">
  <h3 class="heading" style="background-color: #023321">  Invoice</h3>
  <p>Invoice generated on {{ date('Y-m-d') }}</p>
  <table class="table">
    <thead>
      <tr>
        <th>Customer Details</th>
        <th>Order Details</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($order as $item)
      <tr>
        <td class="customer-details">
          <h4>1. Name: <b>{{ $item->name }}</b></h4>
          <h4>2. Email: <b>{{ $item->email }}</b></h4>
          <h4>3. Phone: <b>{{ $item->phone }}</b></h4>
          <h4>4. Address: <b>{{ $item->address }},</b></h4>
          <h4><b>{{ $item->City }}, {{ $item->Locatontype }}</b></h4>
        </td>
        <td>
          <h4>1. Order Id: <b>{{ $item->id }}</b></h4>
          <h4>2. Order Created date: <b>{{ $item->created_at }}</b></h4>
          <h4>3. Payment Mode: <b>{{ $item->pmode }}</b></h4>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Sub Total</th>
      </tr>
    </thead>
    <tbody>
      <?php $total = 0; ?>
      @foreach ($orderItem as $key => $item)
      <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $item->Name }}</td>
        <td>{{ $item->quntity }}</td>
        <td>Rs.{{ $item->Price }}</td>
        <td>Rs.{{ $item->Price * $item->quntity }}</td>
      </tr>
      <?php $total += $item->Price * $item->quntity; ?>
      @endforeach
    </tbody>
  </table>

  <h3 class="total">Total: Rs.<span>{{ $total }}</span>.00</h3>

  <div class="invoice-note">
    <p>Note: Please make the payment within 7 days of receiving this invoice.</p>
  </div>

  <div class="footer">
    <p>Thank you for your business!</p>
    <p>Invoice generated on {{ date('Y-m-d') }}</p>
  </div>
</div>

</body>
</html>
