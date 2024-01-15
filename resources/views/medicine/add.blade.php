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
        <!--css 
        <link rel="stylesheet" href="/css/mymain.css" />
        <link rel="stylesheet" href="/css/myTamplate.css" />-->
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
        
        width:100%;
       
    }
        </style>
    </head>
    <body>
        <h1>Pharmacy management system</h1>
      <!--  <br/><br/><br/><br/>
        <div class="myBorder">
        <h2 class="greatePro"><strong>Add a new medicine</strong></h2>
        @if (session()->has('Error'))
            <div class="alert alert-danger">
              {{ session()->get('Error') }}
            </div>
          @endif
        <div class="myNewAccount">
 <form class="col-md-12" action="/medicine.add" method="POST" enctype="multipart/form-data">
   @csrf
   {{ csrf_field() }}
   <div>
    {{--
    --}}
          <label for="validationCustom02" class="form-label">Section name</label>
              <select id="validationCustom02" name="section_name" class="row"  style="width:100%; margin-left:-3px; border-radius: 5px;">
                @foreach ($sections as $section )
                <option value={{ $section->sname }} >{{ $section->sname }}</option>
                @endforeach
            </select>
          </div>
        
          <div>
           <label for="validationCustom03" class="form-label">Parcode</label>
           <input type="number" class="form-control" id="validationCustom03" name='parcode' required>
          </div>
    
          <div>
           <label for="validationCustom04" class="form-label">Physical name</label>
           <input type="text" class="form-control" id="validationCustom04" name='physical_name' required>
          </div>
    
          <div>
           <label for="validationCustom05" class="form-label">Commerce name</label>
           <input type="text" class="form-control" id="validationCustom05" name='commerce_name' required>
          </div>
    
          <div>
            <label for="validationCustom05" class="form-label">Chemical composition</label>
            <input type="text" class="form-control" id="validationCustom05" name='chemical_composition' required>
           </div>
    
           <div>
            <label for="validationCustom05" class="form-label">Diseases</label>
            <input type="text" class="form-control" id="validationCustom05" name='diseases' required>
           </div>
    
    
          <div class="form-check">
         <p style="margin-top:10px;"> Needs a prescription  </p>
          <input  type="radio" value="1" name="need_a_prescription"  >
          <label >
           yes
          </label>
          <input  type="radio" value="0" name="need_a_prescription" >
          <label >
           no
          </label>
         </div>
    </div>
    <div class="col-md-3">
        
          <div>
           <label for="validationCustom09" class="form-label">Type</label>
           <input type="text" class="form-control" id="validationCustom09" name="type" required>
          </div>
    
          <div>
           <label for="validationCustom10" class="form-label">Degree</label>
           <input type="text" class="form-control" id="validationCustom10" name="degree" required>
          </div>
    
    
          <div>
           <label for="validationCustom12" class="form-label">Company name</label>
           <input type="text" class="form-control" id="validationCustom12" name="company_name"  required>
          </div>
    
          <div>
            <label for="validationCustom05" class="form-label">image:</label>
            <input type="file" class="form-control" id="validationCustom05" name='image' required>
          </div>




 
   
  <div class="ty">
  <div class="op">
   
  <div>
    <input class="btn btn-primary" type="submit" name="submit" value="Add">
  </div>
</form></div>
        </div>
    -->


   <div style="postion:relative; top:500px;">
		<div class="section-center">
			<div class="container"> 
				<div class="row" >
					<div class="booking-form">
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Sectio Name</span>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Parcode</span>
										<input class="form-control" type="text">
									</div>
								</div>
							</div><div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Physical Name</span>
										<input class="form-control" type="text" >
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Commerce Name</span>
										<input class="form-control" type="text">
									</div>
								</div>
							</div><div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Chemical Composition</span>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Diseases</span>
										<input class="form-control" type="text">
									</div>
								</div>
							</div>
              <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Type</span>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Digree</span>
										<input class="form-control" type="text">
									</div>
								</div>
							</div>
              <div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Company Name</span>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Image</span>
                    <input type="file" class="form-control" id="validationCustom05" name='image' required>
									</div>
								</div>
							</div>
              <div class="form-group" style=" position:relative; left:500px;">
								<div class="form-checkbox">
                <p style="margin-top:10px; color:white;"> Needs a prescription  </p>
									<label for="Yes">
										<input type="radio" id="Yes" name="Yes">
										<span></span>Yes
									</label>
									<label for="No">
										<input type="radio" id="No" name="No">
										<span></span>No
									</label>
									
								</div>
							</div>
								<div class="col-md-3">
									<div class="form-btn" style="position:relative; left:430px; margin-top:50px;">
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