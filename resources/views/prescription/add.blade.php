<!DOCTYPE html>
<html>
    <head>
        <title>New</title>
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
        <!--css -->
        <link type="text/css" rel="stylesheet" href="css/addstyle.css" />
    <link type="text/css" rel="stylesheet" href="css/css boot/bootstrap.min.css" />
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
      <!--  <br/><br/><br/><br/>
        <div class="myBorder">
        <h2 class="greatePro"><strong>Add a new prescription</strong></h2>-->
        @if (session()->has('Error'))
            <div class="alert alert-danger">
              {{ session()->get('Error') }}
            </div>
          @endif
          <!--
        <div class="myNewAccount">
 <form class="col-md-12" action="/prescription.add" method="POST" enctype="multipart/form-data">
   @csrf
   {{ csrf_field() }}
  

  <div>
    <label for="validationCustomUsername" class="form-label">Patient name</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="pname" required>
    </div>
  </div>

  <div>
    <label for="validationCustom04" class="form-label">Doctor name</label>
    <input type="text" class="form-control" id="validationCustom04" name="dname"  required>
  </div>


  <div>
    <label for="validationCustom05" class="form-label">Prescription:</label>
    <input type="file" class="form-control" id="validationCustom05" name="image" required>
  </div>

 
   
  <div class="ty">
  <div class="op">
   
  <div>
    <input class="btn btn-primary" type="submit" name="submit" value="Add">
  </div>
</form></div>
        </div>
  -->

  

	<div id="booking" class="section" style="margin-top:0; position:relative; bottom: 10px;">
		<div class="section-center">
			<div class="container" style="position:relative; top: 50px; ">
				<div class="row">
					<div class="booking-form">
						<form  action="/prescription.add" method="POST" enctype="multipart/form-data">>
            @csrf
   {{ csrf_field() }}
			          
   <div class="row">
								<div class="col-md-6">
									<div class="form-group" style="text-align:center; position:relative; left: 250px; margin-top:30px;">
										<span class="form-label"><label for="validationCustomUsername" class="form-label">Patient name</label></span>
										<input class="form-control" type="text" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="pname" required>
									</div>
								</div>

              <div class="row">
								<div class="col-md-6">
									<div class="form-group" style="text-align:center; position:relative; left: 250px; margin-top:30px;">
										<span class="form-label"><label for="validationCustom05" class="form-label">Doctor name</label></span>
										<input class="form-control" type="text"  id="validationCustom05" name="image" required>
									</div>
								</div>
                <div class="row">
								<div class="col-md-6">
									<div class="form-group" style="text-align:center; position:relative; left: 250px; margin-top:30px;">
										<span class="form-label"><label for="validationCustom05" class="form-label">Prescription</label></span>
										<input class="form-control" type="file"  id="validationCustom05" name="image" required>
									</div>
								</div>
                                </div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn" type="submit" name="submit" value="Add" style="position:relative; left: 380px; margin-top:30px;">Submit</button>
									</div>
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