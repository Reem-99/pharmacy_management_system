<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <!-- IE Compatibility meta-->
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <!--first mobile meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap -->
        <link rel="stylesheet" href="/css/css boot/bootstrap.css" />
        <!--[if lt IE 9]-->
        <script src="/js/html5shiv.min.js"></script>
        <script src="/js/respond.min.js"></script>
        <![endif]-->
        <!--css 
        <link rel="stylesheet" href="/css/mymain.css" />
        <link rel="stylesheet" href="/css/myTamplate.css" />-->
        <link type="text/css" rel="stylesheet" href="css/addstyle.css" />
    <link type="text/css" rel="stylesheet" href="css/css boot/bootstrap.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     
        <![endif]-->
        <style>
              h1 {
        
        font-size: 40px;
        color:  #ccc2c2;/*white*/
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #080808;
        height: 70px;
        background-size: cover;
        margin-bottom: 40px;
        position: fixed;
        width:100%;
        z-index: 2;
    }
        </style>
    </head>
    <body>
        <h1>Pharmacy management system</h1>
       <!-- <br/><br/><br/><br/>
       
        @if(Session::has('msg'))
        <script>swal("There is an error","{!! session('msg') !!}","error",{button:"Ok"})</script>
        @endif
        </div>
        <div class="myNewAccount">
 <form class="col-md-12" action="/important.add" method="POST" enctype="multipart/form-data">
   @csrf
   {{ csrf_field() }}
  

 

  <div>
    <label for="validationCustom04" class="form-label">parcode</label>
    <input type="text" class="form-control" id="validationCustom04" name="parcode"  required>
  </div>


  <div>
    <label for="validationCustom05" class="form-label">minimum of quantity</label>
    <input type="number" class="form-control" id="validationCustom05" name="min" required>
  </div>

 
   
  <div class="ty">
  <div class="op">
   
  <div>
    <input class="btn btn-primary" type="submit" name="submit" value="submit">
  </div>
</form></div>
        </div>
  -->

  
<div id="booking" class="section">
		<div class="section-center">
			<div class="container" style="width: 700px;">
				<div class="row">
					<div class="booking-form">
						<form>
							
							<div class="row">
								<div class="col-md-7">
									<div class="form-group" style="position:relative; left:150px; text-align:center;">
										<span class="form-label">Customers</span>
										<input class="form-control" type="text">
									</div>
								</div>
               </div>
               <div class="row">
								<div class="col-md-7">
									<div class="form-group" style="position:relative; left:150px; text-align:center; margin-top:40px;" >
										<span class="form-label">Medicine</span>
										<input class="form-control" type="text" >
									</div>
								</div>
							</div>
              <div class="col-md-3">
									<div class="form-btn" style="position:relative; left: 250px; margin-top:50px; ">
										<button class="submit-btn">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
</body>
</html>