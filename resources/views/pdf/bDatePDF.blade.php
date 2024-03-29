<!DOCTYPE html>

<html>

<head>

 <title>Table layout</title>
 
 <style>
	 family=Montserrat|Open+Sans|Roboto');
*{
 margin:0;
 padding: 0;
 outline: 0;
}
.filter{
 position: absolute;
 left: 0;
 top: 0;
 bottom: 0;
 right: 0;
 z-index: 1;
 background: rgb(233,76,161);
background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);
opacity: .7;
}
table{
  margin-top:-100px;
  margin-right:230px;
  margin-bottom: 200px;
 /*position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);*/
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #506bb4;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}
body{
 

}
	 </style>

</head>

<body>


       <table > 
        <tr>

          <th>Medicine Name</th>
         
          <th>Quantity</th>
         
          <th>Cost</th>
         
          <th>Date </th>
         
          
         
          </tr> 
@foreach ( $sell as $row)
 
   <tr>
 
  <td>{{ $row['medname'] }}</td>
 
  <td>{{ $row['quantity'] }}</td>
 
  <td>{{$row['all'] }}</td>
 
  <td>{{$row['date'] }}</td>
 
 
 
  </tr>
      @endforeach
    
    </table>
  
 
  

    
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>


    <script>
      $('.icon').click(function(){
        $('span').toggleClass("cancel");
      });
    </script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>