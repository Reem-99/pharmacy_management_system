<!DOCTYPE html>

<html>

<head>

 <title>Table layout</title>

 <link rel="stylesheet" href="style/main.css">
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
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);
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
 background-color: #ba68c8;
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
	 </style>

</head>

<body>


  <div class="filter">

 </div>

 <table >

 

 <tr>

 <th>Medicine Name</th>

 <th>Quantity</th>

 <th>Cost</th>

 <th>Date </th>

 

 </tr>


  <tr>

 <td>{{ $row['medname'] }}</td>

 <td>{{ $row['quantity'] }}</td>

 <td>{{$row['all'] }}</td>

 <td>{{$row['date'] }}</td>



 </tr>

 <tr>

 <td>2</td>

 <td>jack</td>

 <td>Duppont</td>

 <td>1368</td>

 <td>18 Dec 1962</td>

 <td>2000$</td>

 </tr>

 <tr>

 <td>3</td>

 <td>Jean</td>

 <td>leBon</td>

 <td>1368</td>

 <td>18 Nov 1972</td>

 <td>4200$</td>

 </tr>

 <tr>

 <td>4</td>

 <td>Nadia</td>

 <td>leBon</td>

 <td>1368</td>

 <td>18 Mar 1982</td>

 <td>6300$</td>

 </tr>

 <tr>

 <td>5</td>

 <td>Nadia</td>

 <td>leBon</td>

 <td>1368</td>

 <td>18 Mar 1982</td>

 <td>6300$</td>

 </tr>

 <tr>

 <td>6</td>

 <td>Nadia</td>

 <td>leBon</td>

 <td>1368</td>

 <td>18 Mar 1982</td>

 <td>6300$</td>

 </tr>

 <tr>

 <td>7</td>

 <td>Nadia</td>

 <td>leBon</td>

 <td>1368</td>

 <td>18 Mar 1982</td>

 <td>6300$</td>

 </tr>

 <tr>

 <td>8</td>

 <td>Nadia</td>

 <td>leBon</td>

 <td>1368</td>

 <td>18 Mar 1982</td>

 <td>6300$</td>

 </tr>

 </table>


 </body>

</html>