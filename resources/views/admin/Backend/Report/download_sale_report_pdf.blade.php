{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Download Sale Report</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css">

    td, th{
      border: 1px solid black;
    }

    th, td{
    padding: 0px 30px 0px 30px;
    }
     
      @media print {
          
          .print-button {
              display: none;
          }
      }

  </style>
  </head>
  <body>

    <h3>Sale Report</h3>
    <h5>Date - <span> {{$sdate}}</span> - <span>{{$edate}} </span></h5>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th class="text-center w-5" scope="col">SL.</th>
          <th class="text-center w-10" scope="col">Date</th>
          <th class="text-center w-10" scope="col">Customer</th>
          <th class="text-center w-20" scope="col">Sold By</th>
          <th class="text-center w-20" scope="col">Grand Total</th>
          
        </tr>
      </thead>
      <tbody>
        @php
          $sl = 1;
          $amount = 0;	
        @endphp
        @foreach($filter as $sale)
        <tr>
            <td>{{$sl++}}</td>
						<td>{{ $sale->sale_date }}</td>
            <td>{{ $sale->customer->customer_name }}</td>
						<td>{{ $sale->user->name }}</td>
						<td>{{ $sale->grand_total }}</td>
            <td style="display:none;">{{$amount += $sale->grand_total}}</td>
					
					</tr>
        @endforeach
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>{{$amount}}</td>		   
         </tr>
      </tbody>
    </table>

  </body>
</html> --}}


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sale Report</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 13px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }

    .authority1 {
        /*text-align: center;*/
        float: left
    }
    .authority h5 {
        margin-top: -10px;
        color: #037c09;
        /*text-align: center;*/
        margin-left: 35px;
    }

    .authority1 h5 {
        margin-top: -10px;
        color: #037c09;
        /*text-align: center;*/
        margin-left: 35px;
    }
    
    .thanks p {
        color: #136108;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }

    .t {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>

</head>
<body>

  <table width="100%" style="background: #f7f7f7; padding:0 0px 0 0px;">
    <tr>
        <td valign="top">
          <!-- {{-- <img src="" alt="" width="150"/> --}} -->
          {{-- <br><br> --}}
          <br>
          <img width="200px" height="72px" src="frontend/assets/img/logo1.png" alt="Logo">
          {{-- <h2 style="color: #ff7c00; font-size: 26px;"><strong>Bengal Automation.</strong></h2> --}}
        </td>
        <td align="right">
          <pre class="font" style="margin: 2px; line-height: 1;">
            STATA IT LIMITED 
            Email: info@stataglobal.com
            {{-- <br> --}}
            Mob: 88 09678200509 
          </pre>
        </td>
    </tr>
  </table>



  <table width="100%" style="background:white; padding:2px;"></table>
  
  <br/>
{{-- <h3>Product List</h3> --}}
  <table class="t" width="100%">
    <thead style="background-color: #17810e; color:#FFFFFF;">
      <tr class="font">
        <th class="t">SL.</th>
        <th class="t">Date</th>
        <th class="t">Customer</th>
        <th class="t">Sold By</th>  
        <th class="t">Grand Total</th>
      </tr>
    </thead>
    <tbody>
        @php
            $sl = 1;
          $amount = 0;
        @endphp
     @foreach($filter as $sale)
      <tr class="font">
        <td class="t" align="center">{{$sl++}}</td>
        <td class="t" align="center">{{$sale->sale_date}}</td>
        <td class="t" align="center">{{$sale->customer->customer_name}}</td>
        <td class="t" align="center">{{$sale->user->name}} </td>
        <td class="t" align="center">{{$sale->grand_total}} </td>
        <td class="t" align="center" style="display:none;">{{$amount += $sale->grand_total}}</td>
   
      </tr>
      @endforeach
      <tr>
        <td class="t" align="center"></td>
        <td class="t" align="center"></td>
        <td class="t" align="center"></td>
        <td class="t" align="center"></td>		
        <td class="t" align="center">{{$amount}}</td>	 				
          
       </tr>
    </tbody>
  </table>
  
</body>
</html> 