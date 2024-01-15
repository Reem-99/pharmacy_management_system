<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Drop-down Menu Bar</title>
    <link rel="stylesheet" href="H1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>

      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="style/main.css">
      <style>
      /*  body{

          background-color: rgb(58, 54, 54);

        }*/
        family=Montserrat|Open+Sans|Roboto');
*{
 margin:150px;
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
 margin-top:50px;
  margin-left:170px;
  margin-bottom: 200px;
/* position: absolute;
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
 background-color: #b13aa1;
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
tr:nth-child(odd){
 background-color: #d4cdd3;
}
body{
 
 background: -webkit-gradient(linear, left bottom, left top, from(#f1eaef), to(#f1eaef));
 background: -webkit-linear-gradient(bottom, #f1eaef 0%, #f1eaef 100%);
 background: -moz-linear-gradient(bottom, #f1eaef 0%, #f1eaef 100%);
 background: -o-linear-gradient(bottom, #f1eaef 0%, #f1eaef 100%);
 background: linear-gradient(to top, #f1eaef 0%, #080707 100%);
 background-attachment: fixed;
 background-size: :cover;
 background-repeat: no-repeat;
}
  td img{
    height:60px;
    width: 60px;
    border-radius:100%;
    border:5px solid #b1a9b0;
  }
 
  tr:hover td{
    background-color:#eeee;
    color:#b13aa1;
  }


        </style>
  </head>
  <body id="page-top">
    <nav >
      <div class="logo">Pharmacy management system </div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li ><a href="mainPageA">Home</a></li>
        <li>
          <label for="btn-1" class="show"> Sections</label>
          <a href="section.show">Sections</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a href="section.add">add</a></li>
            <li><a href="section.showToEdit">edit</a></li>
            <li><a href="section.delete">delete</a></li>
          </ul>
        </li>
        <li>
          <label for="btn-2" class="show">Medicine +</label>
          <a href="medicine.show">Medicine</a>
          <input type="checkbox" id="btn-2">
          <ul>
            <li><a href="medicine.add">add</a></li>
            <li><a href="medicine.edit">edit</a></li>
            <li><a href="medicine.parcodeForDelete">delete</a></li>
            <li>
              <label for="btn-3" class="show">More +</label>
              <a href="#">More <span class="fa fa-plus"></span></a>
              <input type="checkbox" id="btn-3">
              <ul>
                <li><a href="#">Submenu-1</a></li>
                <li><a href="#">Submenu-2</a></li>
                <li><a href="#">Submenu-3</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
   
</div>
</div>
<div class="bg-circle-1 bg-circle"></div>
<div class="bg-circle-2 bg-circle"></div>
<div class="bg-circle-3 bg-circle"></div>
<div class="bg-circle-4 bg-circle"></div>
</header>
<!--<div >
      
    @if(Session::has('addCost'))
  <script>swal("Warning","{!! session('addCost') !!}","error",{button:"Ok"})</script>
  @endif
  </div>
<-- Content section 1--
@foreach ( $med as $row)
<-- Content section 1-->

<!--<section id="scroll" style="background-color: rgb(43, 41, 42)">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="p-5"><img class="img-fluid rounded-circle" style="width:50%;height:50%;border-radius:60%" src="/storage/image/{{ $row['image'] }}" alt="..." /></div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="p-5">-->
                  
                   <!-- @foreach($sec as $row1) 
                    @if($row['parcode'] == $row1['parcode'])--
                    
                      <li style="color:rgb(92, 106, 168)"><i class="icofont-rounded-right"></i> <strong style="color:gray">Section:</strong> {{ $row1['section_name'] }}</li>
                    @endif
                    @endforeach
                    <ul>
                    <li style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)">Commerce name:</strong>{{  $row['commerce_name']}}</li>
                    <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)"> Physical name:</strong> {{$row['physical_name'] }}</li>
                    <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)""> Parcode:</strong> {{ $row['parcode'] }}</li>
                    
                    <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)""> Type:</strong> {{ $row['type'] }}</li>
                    <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)"">Degree:</strong> {{ $row['degree'] }}</li>
                    <li  style="color: rgb(204, 196, 223)"><i class="icofont-rounded-right"></i> <strong style="color: rgb(189, 140, 182)"">Company name:</strong> {{ $row['company_name'] }}</li>
                </div>
                <div class="line-1"><hr style="background-color:purple"></div>
                <div class="line-1"><hr style="background-color:purple"></div>
            </div>
        </div>
    </div>
</section>

@endforeach
</table>
<-- Footer--
<footer class="py-5 bg-black">
<div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2021</p></div>
</footer>-->
<table>
                  <tr>

                      <th>Image</th>
                      <th>Commerce name</th>
                      <th>Physical name</th>
                      <th>Parcode</th>
                      <th>Type</th>
                      <th>Degree</th>
                      <th>Company Name</th>
                      <th>Section</th>
                  </tr> 
                  <tr>
                      <td><img src="img/dark2.jpg" alt=""></td>
                      <td>jhvjjhjhf</td>
                      <td>jfdhg</td>
                      <td>jfhjdghjfhj</td>
                      <td>jfhg</td>
                      <td>mfggfgfg</td>
                      <td>fjghjfjfhg</td>
                      <td>jkfghjjjgj</td>
                  </tr>
                  <tr>
                      <td><img src="img/dark2.jpg" alt=""></td>
                      <td>jhvjjhjhf</td>
                      <td>jfdhg</td>
                      <td>jfhjdghjfhj</td>
                      <td>jfhg</td>
                      <td>mfggfgfg</td>
                      <td>fjghjfjfhg</td>
                      <td>jkfghjjjgj</td>
                  </tr>
                  <tr>
                      <td><img src="img/dark2.jpg" alt=""></td>
                      <td>jhvjjhjhf</td>
                      <td>jfdhg</td>
                      <td>jfhjdghjfhj</td>
                      <td>jfhg</td>
                      <td>mfggfgfg</td>
                      <td>fjghjfjfhg</td>
                      <td>jkfghjjjgj</td>
                  </tr>
                  <tr>
                      <td><img src="img/dark2.jpg" alt=""></td>
                      <td>jhvjjhjhf</td>
                      <td>jfdhg</td>
                      <td>jfhjdghjfhj</td>
                      <td>jfhg</td>
                      <td>mfggfgfg</td>
                      <td>fjghjfjfhg</td>
                      <td>jkfghjjjgj</td>
                  </tr>
                  <tr>
                      <td><img src="img/dark2.jpg" alt=""></td>
                      <td>jhvjjhjhf</td>
                      <td>jfdhg</td>
                      <td>jfhjdghjfhj</td>
                      <td>jfhg</td>
                      <td>mfggfgfg</td>
                      <td>fjghjfjfhg</td>
                      <td>jkfghjjjgj</td>
                  </tr>
                  <tr>
                      <td><img src="img/dark2.jpg" alt=""></td>
                      <td>jhvjjhjhf</td>
                      <td>jfdhg</td>
                      <td>jfhjdghjfhj</td>
                      <td>jfhg</td>
                      <td>mfggfgfg</td>
                      <td>fjghjfjfhg</td>
                      <td>jkfghjjjgj</td>
                  </tr>
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

  </body>
</html>
