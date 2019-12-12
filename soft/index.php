<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wakocoding | Home</title>
    <meta charset="UTF-8">
    <meta name="description" content="Wakocoding online school">
    <meta name="keywords" content="html, coding, school">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon -->   
    <link href="img/WAKKO22.png" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!---Font Awesome--->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" type="text/css">


    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Page Preloder -->
    <div class="container">
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="container">
            <div class="row " style="background-color:#fff;">
                <div class="col-lg-3 col-md-3" >
                    <div class="site-logo">
                    <a href="index.php"><img src="img/WAKKO22.png" height="43.34px !important" alt=""></a>

                    </div --site-logo>
                    <div class="nav-switch">
                        <i class="fa fa-bars"></i>
                    </div --nav-switch>
                </div --col-lg-3>
                <div class="col-lg-9 col-md-9">
                   
                    <nav class="main-menu" >
                  
                        <ul>
                            
                            <li><a href="index.php" style="color:rgba(145,216,247,1);">Home</a></li>
                            <li><a href="courses.html" style="color:rgba(145,216,247,1);">Tutorials</a></li>
                            <li><a href="" data-toggle="modal" data-target="#contactModal" style="color:rgba(145,216,247,1);" >Contact</a></li>
                            <li><a href="" data-toggle="modal" data-target="#signupModal" style="color:rgba(145,216,247,1);" >Signup</a></li>
                             <li><a href="login.php"style="color:rgba(145,216,247,1);" data-toggle="modal" data-target="#loginModal">Login</a></li>
                            <!-- <li><a href="home.php"style="color:rgba(145,216,247,1);" >disp</a></li> -->
                           
                        </ul>
                    </nav>
                </div --col-9>
            </div --row>
        </div --continer>
        <!-- CONTACT MODAL -->
  <div class="modal fade text-dark" id="contactModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contact Us</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form class=" form" action="" name = "myForm" method="post">
            <div class="form-group "  >
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="Name" oninput="checkInput()">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control"  id="email" name="Email" oninput="checkInput()">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="Message" oninput="checkInput()"></textarea>
            </div>
         
        </div>
        <div class="modal-footer">
          <button class="btn btn-info btn-block site-btn" type="submit" disabled>Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- sign up modal -->
  <div class="modal fade text-dark" id="signupModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sign Up and Start Learning</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
         
        <div class="modal-body">
          <form id="sup" method="post" class=" formy" action="home.php" >
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="fullname" class="form-control" name="Name" oninput="checkSign()">
            </div>
            
            <div class="form-group">
              <label for="phone">phone</label>
              <input type="number"  class="form-control phone" oninput="checkSign()">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="emailer" class="form-control" oninput="checkSign()">
            </div>
            <div class="form-group">
              <label for="state">State/Area</label>
              <input type="text" id="state" class="form-control" oninput="checkSign()">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="pass" class="form-control" oninput="checkSign()">
            </div>
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" id="cpass" class="form-control" oninput="checkSign()">
            </div>
          
        </div>
        <div class="modal-footer">
          <button class="btn btn-info btn-block sup" name="submit"  disabled  type="submit">Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>



  <!-- login modal -->

   <div class="modal fade text-dark" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class=" forma" action="" name = "form" method="post">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="emailin" name="emailin" oninput="checkNow()">
            </div>
            <div class="form-group">
              <label for="message">Password</label>
              <input type="password" class="form-control" id="pwd" name="pwd" oninput="checkNow()">
            </div>
            <div class="form-group">
              <label for="message">Teacher</label>
              <input type="radio" class="mr-5" id="type1" name="type" value="teacher" oninput="checkNow()">
              <label for="message">Student</label>
              <input type="radio" class="" id="type2" name="type" value="student" oninput="checkNow()">
            </div>
        
        </div>
        <div class="modal-footer">
          <button class="btn btn-info btn-block logged" id="logged" name="submit" type="submit" disabled  >Submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section set-bg" style="background: #d63031;">
        <div class="container">
            <div class="hero-text text-white">
                <h2 style="font-family: 'Nunito', sans-serif; "><h1><span style="color:rgba(145,216,247,1);">Become</span> a 
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "Tech Entrepreneur.", "Software Developer.", "Tech Guru."]'></span>
</h1></h2>
                <p>Wakocoding is powered by SoftNotch</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xl-6 col-sm-12 col-xs-6">
                    
                    </form-->
                    <img  class=" bot1" src="img/courses/programming.jpg" alt=""> 
                    <a href=""  data-toggle="modal" data-target="#signupModal"  class="text-light"> <button class="btn btn-info  bot2"><h4 class="text-light">REGISTER NOW</h4></button></a>
                </div>
            </div>
        </div>
    </section>

   
    <!-- Hero section end -->

    
           <section class="container mb-5">
           <h2 class="text-center mb-5 mt-5" >Achieve your goals with Wakocoding</h2>

               <div class="row">
                   <div class="col-md">
               <div class="card text-center">
                       <img src="img/COLLECTIVE 5.jpg" alt="" class="card-img-top img-fluid">
                       <div class="card-body ">
                           <h4 class="card-title">GET READY FOR CAREER UPGRADE</h4>
                           <p class="card-text"><!--The only constant is change, if you are not  about changing yourself through--> Be intentional with self-improvement, else the desired industry you seek would reject you.
TAKE A COURSE</p>
                       </div>
                   </div>
                   </div>
                   <div class="col-md">
                   <div class="card text-center">
                       <img src="img/COLLECTIVE 4.jpg" alt="" class="card-img-top img-fluid">
                       <div class="card-body ">
                           <h4 class="card-title">GET CONNECTED TO JOB OFFERS</h4>
                           <p class="card-text">Take 2 courses and get validated by our platforms in other to position yourself for a good job offer.</p>
                       </div>
                   </div>
                   </div>
                   <div class="col-md">
                   <div class="card text-center">
                       <img src="img/COLLECTIVE 1.jpg" alt="" class="card-img-top img-fluid">
                       <div class="card-body ">
                           <h4 class="card-title">GET FREELANCE DEALS AND IMPROVE EARNING</h4>
                           <p class="card-text">Get connected to entrepreneurs seeking your services by registering and uploading your CV</p>
                       </div>
                   </div>
                   </div>
                   <div class="col-md">
                   <div class="card text-center">
                       <img src="img/COLLECTIVE 2.jpg" alt="" class="card-img-top img-fluid">
                       <div class="card-body">
                           <h4 class="card-title">HIRE A PROGRAMMER</h4>
                           <p class="card-text">Do you seek the services of a freelance developer to carry out your task? Sign up below and tell us what you need.</p>
                       </div>
                   </div>
                   </div>
                   <div class="col-md">
                   <div class="card  text-center">
                       <img src="img/COLLECTIVE 3.jpg" alt="" class="card-img-top img-fluid">
                       <div class="card-body ">
                           <h4 class="card-title">TEACH & EARN</h4>
                           <p class="card-text">This platform is the uber of developers where you earn by staying connected or via teaching on our platform.</p>
                       </div>
                   </div>
                   </div>
               </div>
           </section>

    <!-- categories section -->
    <section class="categories-section spad">
        <div class="container">
            <div class="section-title">
                <h2>Our Course Categories</h2>
                
            </div>
            <div class="row">
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" style="background: #ff6b6b">
                            
   <div class="price" style="background: #ff6b6b; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 8000</div>
   <img src="img/dm.jpg">
   
   
</div>
                        <div class="ci-text">
                            <h5>Digital Marketing</h5>
                            <!--p>Session by Micheal King</p-->
                            <span></span>
                        </div>
                    </div>
                </div>

                        <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" style="background: #1dd1a1;">
                                            <div class="price" style="background: #1dd1a1; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 2000</div>
                                            <img src="img/cd.jpg" height="181.19px" >
                                        </div>
                        <div class="ci-text">
                            <h5>Web Design</h5>
                            <!--p>Session by Famous</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" style="background: #5f27cd;">
                        <div class="price"  style="background:#5f27cd; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 5000</div>                  
                        <img src="img/jwd.jpg" height="181.19px">
                    </div>
                        <div class="ci-text">
                            <h5>Web Development</h5>
                            <!--p>Session By Kelvin</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg"style="background: #576574;" >
                        <div class="price" style="background:#576574; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 6000</div>                  
                        <img src="img/WEB 3.jpg" height="181.19px">    
                    </div>
                        <div class="ci-text">
                            <h5>Hybrid App Development</h5>
                            <!--p>Session by Famous</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" style="background: #ff7675;">
                                            <div class="price" style="background:#ff7675; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; " >NGN 3000</div>
                                            <img src="img/wd.jpg" height="181.19px">
                                        </div>
                        <div class="ci-text">
                            <h5>UI & UX Design</h5>
                            <!--p>Session by Melody</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" style="background: #0984e3;">
                        <div class="price"   style="background:#0984e3; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 8500</div>                  
                        <img src="img/py.jpg" height="181.19px">    
                    </div>
                        <div class="ci-text">
                            <h5>Introduction to Python</h5>
                            <!--p>Session by Muritala David</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg"  style="background:#4834d4;">
                        <div class="price"  style="background:#4834d4; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 3000</div>                  
                        <img src="img/lc.jpg" height="181.19px">    
                    </div>
                        <div class="ci-text">
                            <h5>Logic Building </h5>
                            <!--p>Session by Muritala David</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg"  style="background:#4834d4;">
                        <div class="price"  style="background:#4834d4; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 3000</div>                  
                        <img src="img/WEB 4.jpg" height="181.19px">    
                    </div>
                        <div class="ci-text">
                            <h5>Ethical Hacking </h5>
                            <!--p>Session by Muritala David</p-->
                            <span></span>
                        </div>
                    </div>
                </div><!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg"  style="background:#4834d4;">
                        <div class="price"  style="background:#4834d4; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 3000</div>                  
                        <img src="img/WEB 5.jpg" height="181.19px">    
                    </div>
                        <div class="ci-text">
                            <h5>Foundations to Programming </h5>
                            <!--p>Session by Muritala David</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- categorie -->
                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg"   style="background:#fdcb6e;">
                        
                        <div class="price"  style="background:#fdcb6e; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 4000</div>                  
                        <img src="img/js.jpg" height="181.19px">    
                    </div>
                        <div class="ci-text">
                            <h5>Introduction To JavaScript</h5>
                            <!--p>Session by Kelvin</p-->
                            <span></span>
                        </div>
                    </div>
                </div>

                                <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg"   style="background:#10ac84">
                        <div class="price"  style="background:#10ac84; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 6000</div>                  
                        <img src="img/WEB 2.jpg">    
                    </div>
                        <div class="ci-text">
                            <h5>Artificial Intelligence</h5>
                            <!--p>Session by Kelvin</p-->
                            <span></span>
                        </div>
                    </div>
                </div>

                        <div class="col-lg-4 col-md-6">
                    <div class="categorie-item">
                        <div class="ci-thumb set-bg" style="background:#EE5A24;">
                                            <div class="price" style="background:#EE5A24; width:6rem; padding: 0.5rem 0.5rem 0.5rem 0.5rem; color: white; box-shadow: 0 1rem 1rem 1rem rgba(0, 0, 0, 0.1); font-family: 'poppins', sans-serif; ">NGN 5500</div>
                                            <img src="img/jv.jpg">
                                        </div>
                        <div class="ci-text">
                            <h5>Introduction To Java</h5>
                            <!--p>Session by John</p-->
                            <span></span>
                        </div>
                    </div>
                </div>
                  
            </div>
              <center>
                        <p href="#" style="font-size: 20px;">MORE</p>
                    </center>
        </div>


    </section>
    <!-- categories section end -->





    <!-- course section -->
    <section class="course-section spad">
        <div class="container">
            <div class="section-title mb-0">
                <h2>Tutorials</h2>
              <p>These tutorials are absolutely free</p>
            </div>
        </div>
        <div class="course-warp">
            <ul class="course-filter controls">
                <li class="control active" data-filter="all">All</li>
                <li class="control" data-filter=".finance">Web Design</li>
                <li class="control" data-filter=".design">Python</li>
                <li class="control" data-filter=".web">Web Development</li>
                <li class="control" data-filter=".photo">Hybrid Aplication Development</li>
            </ul>                                       
            <div class="row course-items-area">
                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/first.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Html 5 & Css 3</h5>
                                <p style="font-family: 'Nunito', sans-serif;">Duration 3 hours</p>
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                            
                                <p>SoftNotch <span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/cal.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Javascript Calculator </h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                            
                                <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/webdesign.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Build a website from scratch</h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Session by Muritala David</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                            
                                <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/login.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">PHP Login System</h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Session by Muritala David</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                    <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                       <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/images.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Node Js Installation</h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Session by Kelvin</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                    <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/stopwatch.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Javascript Stop Watch </h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                                <div class="ca-pic set-bg" data-setbg="img/authors/footer.jpg"></div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/footer.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Footer Design With Bootstrap</h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">

                                <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 web">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/database.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">MySQL Data Manipulation</h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                        
                                <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- course -->
                <div class="mix col-lg-3 col-md-4 col-sm-6 finance">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/boot.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;"> Bootstrap Tutorial</h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                        
                                <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>


                        <div class="mix col-lg-3 col-md-4 col-sm-6 design">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/python.jpg">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Python Basics</h5>
                                <!--p style="font-family: 'Nunito', sans-serif;">Lorem ipsum dolor sit amet, consectetur</p-->
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                        
                                <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                           <div class="mix col-lg-3 col-md-4 col-sm-6 photo">
                    <div class="course-item">
                        <div class="course-thumb set-bg" data-setbg="img/courses/apache.png">
                            <div class="price">Free</div>
                        </div>
                        <div class="course-info">
                            <div class="course-text">
                                <h5 style="font-family: 'Nunito', sans-serif;">Introduction to Ionic </h5>
                                <p style="font-family: 'Nunito', sans-serif;">Coming Soon</p>
                                <div class="students"></div>
                            </div>
                            <div class="course-author">
                        
                                <p>SoftNotch<span> Product</span></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- course section end -->


    <!-- signup section -->
    <section class="signup-section spad" id="register">
        <div class="signup-bg set-bg" data-setbg="img/signup-bg.jpg" ></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="signup-warp">
                        <div class="section-title text-white text-center">
                            <h2 style="font-family: 'Nunito', sans-serif;">Sign up to become a teacher</h2>
                            <p style="font-family: 'Nunito', sans-serif;">Join Wakocoding Today to add to our courses while earning.</p>
                        </div>
                        <!-- signup form -->
                        <form class="signup-form form" action="courses.html" method="post" >
                            <p style="color:red;" id="loon"></p>
                            <input type="text" placeholder="Your Name" name="nam" id="nam" oninput="checks()">
                            <input type="text" placeholder="Your E-mail" name="emai" id="emai" oninput="checks()">
                            <input type="password" id="password" name="password" placeholder="Password" id="password" oninput="checks()">
                            <input type="text" placeholder="Your Phone" name="phone" id="phone" oninput="checks()" >
                            <input type="text" placeholder="Proficiency" name="proficiency" id="proficiency" oninput="checks()" >
                            <label for="v-upload"  style="background-color:rgba(145,216,247,1);" class="file-up-btn" >Upload CV </label>
                            <input type="file" id="v-upload" name="file"  oninput="checks()">
                            <button id='reg_button' class=" site-btn ssup" name="register" type="submit">Request Verification</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup section end --> 


    <!-- banner section -->
    <section class="banner-section spad">
        <div class="container">
            <div class="section-title mb-0 pb-2">
                <h2>Join Our Community Now!</h2>
                <p>Join Wakocoding today to either learn or teach today !!!.</p>
            </div>
            <div class="text-center pt-5">
                <a href="login.php" style="background-color:rgba(145,216,247,1);" class="site-btn">Register Now</a>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- footer section -->
    <footer class="footer-section spad pb-0">
        <div class="footer-bottom">
            <div class="footer-warp">
                <ul class="footer-menu">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
                <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
<!-- All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
a href="#">Backend By : Muritala David</a -->


        </div>
    </footer> 
    <!-- footer section end -->
    </div>
    <script>
    //signup validation
function checks(){
var name = document.getElementById('nam');
var phone = document.querySelector('#phone');
var email = document.getElementById('emai');
var cv = document.getElementById('v-upload');
var password = document.getElementById('password');
var button1 = document.querySelector('.ssup');
var regEx = /\S+@\S+\.\S+/;
var form = document.querySelector('.form');


if(name.value.trim() !=="" && regEx.test(email.value) && phone.value.trim() !=="" && cv.value.trim() !=="" && password.value.trim() !==""  ){
    button1.style.backgroundColor = 'lightBlue';
    button1.disabled = false;
   
} 

else{
    button1.style.backgroundColor = '#777';
    button1.disabled = true;
    
}
}
form.addEventListener('submit',function(event){
event.preventDefault();

})
</script>

    <script>

    //contact validation
    
function checkInput(){
var inputName = document.getElementById('name');
var inputMail = document.getElementById('email');
var inputMessage = document.getElementById('message');
var button = document.querySelector('.site-btn');
var regEx = /\S+@\S+\.\S+/;
var form = document.querySelector('.form');


    if(inputName.value.trim() !=="" && regEx.test(inputMail.value) && 
    inputMessage.value.trim() !==""){
    
    
        button.style.backgroundColor = 'lightBlue';
        button.disabled = false;
       
    } else{
        button.style.backgroundColor = '#777';
        button.disabled = true;
        
    }
}
form.addEventListener('submit',function(event){
    event.preventDefault();

})
    </script>
    


    <script>


    //login validation
    function checkNow(){

var email = document.getElementById('emailin');
var log = document.querySelector('.logged');
var password = document.querySelector('#pwd');
var form = document.querySelector('.forma');
var regEx = /\S+@\S+\.\S+/;


    if(regEx.test(email.value) && password.value.trim() !==""){
        log.style.backgroundColor = 'lightBlue';
        log.disabled = false;
    } else{
        
        log.style.backgroundColor = '#777';
        log.disabled = true;
    }
}
form.addEventListener('submit',function(event){
    event.preventDefault();

})
    </script>

<script>

//signup validation
function checkSign(){
var fullname = document.getElementById('fullname');
var phone = document.querySelector('.phone');
var email = document.getElementById('emailer');
var state = document.getElementById('state');
var password = document.getElementById('pass');
var cpassword = document.getElementById('cpass');
var button1 = document.querySelector('.sup');
var regEx = /\S+@\S+\.\S+/;
var form = document.querySelector('.formy');


if(fullname.value.trim() !=="" && regEx.test(emailer.value) && phone.value.trim() !=="" && state.value.trim() !=="" && password.value.trim() === cpassword.value.trim()&& password.value.trim() !=="" && cpassword.value.trim() !=="" ){
    button1.style.backgroundColor = 'lightBlue';
    button1.disabled = false;
   
} 

else{
    button1.style.backgroundColor = '#777';
    button1.disabled = true;
    
}
}
form.addEventListener('submit',function(event){
event.preventDefault();

})
</script>



<script type="text/javascript">
    var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/index.js"></script>
</html>