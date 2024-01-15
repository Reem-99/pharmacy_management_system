<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">One Page Wonder</h1>
                    <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/01.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">For those about to rock...</h2>
                            <form  id="myNewAccount" action="/employee.createNewAccount" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{ csrf_field() }}
                                <div class="row">
                              <div class="col-6">
                             
                               <div>
                                 <label for="validationCustomUsername" class="form-label">Username</label>
                                 <div class="input-group has-validation">
                                   <span class="input-group-text" id="inputGroupPrepend">@</span>
                                   <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="uname" required>
                                 </div>
                               </div>
                             
                               <div>
                                 <label for="validationCustom04" class="form-label">Phone</label>
                                 <input type="phone-number" class="form-control" id="validationCustom04" name="number" value="{{ $emp->number }}"  required>
                               </div>
                              <div>
                                 <label for="validationCustom05" class="form-label">Password</label>
                                 <input type="password" class="form-control" id="validationCustom05" name="password" value="{{ $emp->password }}"required>
                               </div>
                               </div>
                               <div class="col-6">
                               <div>
                                 <label for="validationCustom03" class="form-label">From Time</label>
                                 <input type="time" class="form-control" id="validationCustom03" name="ftime" required>
                               </div>
                               <div>
                                 <label for="validationCustom03" class="form-label">To Time</label>
                                 <input type="time" class="form-control" id="validationCustom03" name="etime" required>
                               </div>
                                
                               <div class="ty">
                               <div class="op">
                                 <div>
                                   <label for="choose" class="form-label" >Set if admin or not</label>
                                   <select type="text" class="form-control" id="choose" name="type" required>
                                     <option value="admin">Admin</option>
                                     <option value="notadmin">Not Admin</option>
                                   </select>
                                 </div>
                                  <div>
                                   <label for="validationCustom05" class="form-label">Select an image:</label>
                                   <input type="file" class="form-control" id="validationCustom05" name="image" required>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                               <div class="row">
                                 <div class="col-6">
                                 <input class="btn btn-primary" type="submit" name="submit" value="Create a new account" style="margin-left:10%;margin-top:5px; ">
                               </div> </div>
                             </form>  </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/02.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">We salute you!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="assets/img/03.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Let there be rock!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
