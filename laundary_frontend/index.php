
<!DOCTYPE html>
<html lang="en">
<head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THUNI CLEAN</title>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="css/indexDesign.css">
</head>

<body>

<script> 
 
 

</script>

<?php
require 'signup.php';
?>
<!-- The  Login  Modal -->
  <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-xl  modal-dialog-centered ">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header ">
                      <h4 class="modal-title">  WELCOME TO CLEAN THUNI </h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="row modal-body ">
                            <div class="col-sm-6">
                                    <img   height="300px" width="300px" class="img-fluid mx-auto d-block" src="images\undraw_Login_v483 (1).svg" alt="error">                 
                                </div>
                                <div class="col-sm-6">
                                        <!-- form for signup -->
                                                <form  id="signup"  action="signup.php" method="post" class="needs-validation  w3-animate-left" novalidate>
                                                                <div class="form-group pb-1 mb-2 ">
                                                                  <label for="uname">Username:</label>
                                                                  <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out Username field.</div>
                                                                </div>
                                                                <div class="form-group pb-1 mb-2 ">
                                                                                <label for="email">Email</label>
                                                                                <input type="text" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
                                                                                <div class="valid-feedback">Valid.</div>
                                                                                <div class="invalid-feedback">Please fill out Email field.</div>
                                                                              </div>
                                                                <div class="form-group pb-1 mb-2">
                                                                  <label for="pwd">Password:</label>
                                                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                                                                  <div class="valid-feedback">Valid.</div>
                                                                  <div class="invalid-feedback">Please fill out password field.</div>
                                                                </div>
                                                                <div class="form-group pb-1 mb-2">
                                                                                <label for="cpwd">Conform Password:</label>
                                                                                <input type="password" class="form-control" id="cpwd" placeholder="Enter  conform password" name="cpwd" required>
                                                                                <div class="valid-feedback">Valid.</div>
                                                                                <div class="invalid-feedback">Please fill out conform password field.</div>
                                                                              </div>


                                                                              <div class="form-group pb-1 mb-2 ">
                                                                          <label for="uadd">Address</label>
                                                                          <textarea class=" form-control" id="uadd" placeholder="Enter address " name="uadd" required></textarea>
                                                                          <div class="valid-feedback">Valid.</div>
                                                                          <div class="invalid-feedback">Please fill out adddress field.</div>
                                                                        </div>
                                                                        <div class="form-group pb-1 mb-2 ">
                                                                                        <label for="upin">pincode </label>
                                                                                        <input type="text" class="form-control" id="upin" placeholder="Enter pincode " name="upin" required>
                                                                                        <div class="valid-feedback">Valid.</div>
                                                                                        <div class="invalid-feedback">Please fill out  field.</div>
                                                                                      </div>
                                                                        <div class="form-group pb-1 mb-2 ">
                                                                                        <label for="uphone">Phone no</label>
                                                                                        <input type="text" class="form-control" id="uphone" placeholder="Enter phone no" name="uphone" required>
                                                                                        <div class="valid-feedback">Valid.</div>
                                                                                        <div class="invalid-feedback">Please fill out phone field.</div>
                                                                                      </div>
                                                                                 
                                                                <button  type="submit" id="signupp"  name="signup" class="btn btn-primary">Sign UP</button>
                                                              </form>
                                                             <!-- address form -->
                                                              <!-- <form style="display: none;" id="addre" action="" class="needs-validation  w3-animate-left " novalidate>
                                                                        <div class="form-group pb-1 mb-2 ">
                                                                          <label for="uname">Address</label>
                                                                          <input type="text" class="form-control" id="uadd" placeholder="Enter adress" name="uadd" required>
                                                                          <div class="valid-feedback">Valid.</div>
                                                                          <div class="invalid-feedback">Please fill out Username field.</div>
                                                                        </div>
                                                                        <div class="form-group pb-1 mb-2 ">
                                                                                        <label for="uphone">Phone no</label>
                                                                                        <input type="text" class="form-control" id="uphone" placeholder="Enter phone no" name="uphone" required>
                                                                                        <div class="valid-feedback">Valid.</div>
                                                                                        <div class="invalid-feedback">Please fill out Email field.</div>
                                                                                      </div>
                                                                        
                                                                        <button type="button"  name="add" class="btn btn-primary">Submit</button>
                                                                      </form> -->


                                                        <!-- form for login -->

                                                <form style="display:none;" id="login" method="post" action="login.php" class="needs-validation m-5 w3-animate-left " novalidate>
                                                        <div class="form-group p-2">
                                                          <label for="uname">Username:</label>
                                                          <input type="text" class="form-control" id="lname" placeholder="Enter username" name="lname" required>
                                                          <div class="valid-feedback">Valid.</div>
                                                          <div class="invalid-feedback">Please fill out this field.</div>
                                                        </div>
                                                        <div class="form-group p-2">
                                                          <label for="pwd">Password:</label>
                                                          <input type="password" class="form-control" id="lpwd" placeholder="Enter password" name="lpwd" required>
                                                          <div class="valid-feedback">Valid.</div>
                                                          <div class="invalid-feedback">Please fill out this field.</div>
                                                        </div>
                                                       
                                                        <button  type="submit" name="login" class="btn btn-primary">Login</button>
                                                      </form>
                                                      </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" onclick="invisble()" data-dismiss=""><span   id="btnchange"  class=" w3-animate-left">Login</span></button>
                    </div>                   
                  </div>
                </div>
              </div>
              <!-- nav bar section -->
    <section id="cover ">
        <div   class="header">
            <!-- nav bar 1  -->
                <ul    class="nav justify-content-center bg-light " >
                    <li class="nav-item">   
                    <h1 class="navbar-brand w3-animate-top wrap mt-3"> Clean Thuni </h1>
                    </li>
                        <li class="nav-item">
                         <div >
                                <span class="float-left"> <img src="images\icons8-clock.svg"  height="80px" width="80px" alt="error"></span>
                                <span  style="color:#E82828 !important; font-weight: bold;" class="nav-link float-right text-center pt-4  ">OPENS HOURS <br>  <span style="color:black !important; font-weight: bold;">8 AM-9 PM</span> </span>
                         </div>
                        </li>
                        <li class="nav-item">
                                        <div >
                                               <span class="float-left"> <img src="images\icons8-phone-100.png"  height="80px" width="80px" alt="error"></span>
                                               <span   style="color:#E82828 !important; font-weight: bolder;" class="nav-link float-right text-center pt-4  ">CONTACTS <br> <span style="color:black !important; font-weight: bold;"> 9898989898 </span> </span>
                                        </div>
                                       </li>
                        <li class="nav-item">
                        <button class="nav-link btn mt-4" data-toggle="modal" data-target="#myModal"  >BOOKING</button>
                        </li>
                    </ul>      
                    <hr>
                    <!-- nav bar 2 -->
    <nav id="nav-des"   class="navbar navbar-expand-sm  navbar-light justify-content-center ">   
        <ul class="navbar-nav ">
            <li class="nav-item">
                    <a id="nav-des1" class="nav-link c-dark" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                    <a  id="nav-des2"  class="nav-link  c-dark" href="#service">Service</a>
            </li>
            <li class="nav-item">
                    <a id="nav-des3"  class="nav-link  c-dark" href="#histsw">How ITS WORK</a>
            </li>   
            <li class="nav-item">
                    <a id="nav-des4" class="nav-link  c-dark" href="#pricing">PRICING</a>
            </li> 
            <li class="nav-item">
                    <a  id="nav-des5" class="nav-link  c-dark" href="#footer">ABOUT US</a>
            </li>  
            
        </ul>

    </nav>
</div>
    </section>

    <!-- carosel section -->
    <section id="carosel">
        <div class="container-fluid" height="100px">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">

                
                <ul class="carousel-indicators ">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>
                
                
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://latestmarkettrendsnews.files.wordpress.com/2019/07/online-laundry-service.jpg" alt="Los Angeles"  class=" d-block img-fluid w-100" >
                  </div>
                  <div class="carousel-item">
                    <img src="http://jeromelaundromat.com/wp-content/uploads/2017/04/qtq80-1LQsMH.jpeg" class=" d-block img-fluid w-100" alt="Chicago"  >
                  </div>
                  <div class="carousel-item">
                    <img src="https://image.freepik.com/free-vector/laundry-service-banner-with-laundry-room-elements_43605-2944.jpg"  class=" d-block img-fluid w-100" alt=" New York" >
                  </div>
                </div>
                
             
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
              
              </div>
            
    </section>
  
  <!-- service section -->

    <section id="service">
            <p class="h1 mt-2 text-center js-wp-9">SERVICE</p>
        <div class="card-group service-bg">
                      
                        
                        <div class="card m-4 js-wp-1 big">
                                <div class="card-header text-center">WASH</div>
                                <div class="card-body">
                                    <img class="card-img-top" src="images\wash1.png" alt="Card image">
                                </div>
                                <div class="card-footer">Our customer service team is ready to help you with any inquiries you…</div>
                        </div>
                   
              
                     <div class="card  m-4 js-wp-2 big">
                        <div class="card-header text-center">DRY</div>
                        <div class="card-body">
                             <img class="card-img-top" src="images\dry.png" alt="Card image">
                            </div>
                        <div class="card-footer">Our customer service team is ready to help you with any inquiries you…</div>
                      </div>
                
                     <div class="card  m-4 js-wp-3 big">
                        <div class="card-header text-center">IRON</div>
                        <div class="card-body"> <img class="card-img-top" src="images\iron.png" alt="Card image">
                        </div>
                        <div class="card-footer">Our customer service team is ready to help you with any inquiries you…</div>
                      </div>
               
              </div>
    </section>
<!-- section time line part -->
    <section id="histsw">
            <div class="section-timeline">
            <div class="container">
                    <p style="font-weight: bolder;"  class=" h1 text-center js-wp-10">HOW ITS WORK</p>
    <ul class="timeline">
            <span class="linedesgin"></span>
       <li class="js-wp-4">
           <div class="badge text-center">1</div>
           <div class="body-card text-center">
           <div  class="h1">SIGN UP</div>
           <div class="content">
                Enter your post code and location details to find a cleaner in your city and reachable places.
           </div>
        </div>
           </li> 
           <li class="odd js-wp-5">
                <div class="badge text-center">2</div>
                <div class="body-card text-center">
                <div   class="h1">PLACE ORDER</div>
                <div class="content">
                     Enter your post code and location details to find a cleaner in your city and reachable places.
                </div>
             </div>
                </li> 
                <li class="js-wp-6">
                        <div class="badge text-center">3</div>
                        <div class="body-card text-center">
                        <div class="h1">PICK UP</div>
                        <div class="content">
                                Choose the cleaning plan suitable for you and provide any more information to get the service immediately.
                        </div>
                     </div>
                        </li>
                <li class="odd js-wp-7">
                        <div class="badge text-center">4</div>
                        <div class="body-card text-center">
                        <div class="h1">WASH & IRON</div>
                        <div class="content">
                                Our service partnered up with the best professional cleaning agencies in your town and we ensure the cleaners are rated higher
                        </div>
                     </div>
                        </li> 

                        <li class="js-wp-8">
                                <div class="badge text-center">5</div>
                                <div class="body-card text-center">
                                <div class="h1">DELEVIRY</div>
                                <div class="content">
                                        Enjoy a fresh and clean home and feel convenient relaxation. Provide a review for quality improvement.
                                </div>
                             </div>
                                </li>

                                <span class="linedesgin1"></span>
    </ul>
</div>
  
</div>

    </section>
 <!-- price section -->

    <section id="pricing">
        <p  style="font-weight: bolder;"  class="h1 text-center js-wp-11">PRICING</p>
        <div class="card-group service-bg">
            <div class="card m-4 text-center  js-wp-13  big" >
                <div class="card-header ">IRON </div>
                <div class="card-body"> 
                        <img class="card-img-center mt-5" src="images\ironing_.png" alt="Card image">
                        <div class="h1 m-5">INR 5</div>
                </div>
                
            </div>
            <div class="card m-4 text-center js-wp-14  big ">
                    <div class="card-header">WASHING</div>
                    <div class="card-body">
                            <img class="card-img-center mt-5" src="images\laundary.png" alt="Card image">
                            <div class="h1 m-5">INR 5</div>
                    </div>
                    
                </div>
                <div class="card m-4 text-center   js-wp-14 big">
                        <div class="card-header">IRON & WASHING</div>
                        <div class="card-body">
                                <img class="card-img-center mt-5" src="images\ironingwashing.png" alt="Card image">
                                <div class="h1 m-5">INR 9</div>
                        </div>
                        
                    </div>
                    <div class="card m-4 text-center big js-wp-15 big">
                            <div class="card-header ">DRY CLEANING</div>
                            <div class="card-body">
                                    <img class="card-img-center mt-5" src="images\drycleaning.png" alt="Card image">
                                    <div class="h1 m-5">INR 3</div>
                            </div>
                           
                        </div>
        </div>            
        
    </section>
<!-- testimonials section -->
    <section id="review">
        <div class="container-fluid  text-center p-4  ">
                <p style="font-weight: bolder;" class="h1 text-center js-wp-12">TESTAMONIALS</p>
            <div class="row mt-5 js-wp-16">
                <div class="col-sm-3">
                    <img  onclick="review(1)" id="img1" class="rounded-circle big  " height="100px" width="100px" src="images\harinwe.jpg" alt="error">
                </div>
                <div class="col-sm-3"  >
                        <img  onclick="review(2)"  id="img2" class="rounded-circle imgDisable big" height="100px" width="100px" src="images\Penguins.jpg" alt="error">
                </div>
                <div class="col-sm-3">
                        <img  onclick="review(3)"  id="img3"  class="rounded-circle imgDisable big " height="100px" width="100px" src="images\Koala.jpg" alt="error">
                </div>
                <div class="col-sm-3">
                        <img   onclick="review(4)" id="img4" class="rounded-circle imgDisable big "  height="100px" width="100px" src="images\Chrysanthemum.jpg" alt="error">
                </div>
            </div>
           <div class="row mt-5 js-wp-16">
              <div id="text-img1" class="col text-center">
                    <p style="font-weight: bold;" class="h1 text-center">HARI</p>
                   <blockquote> "Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus. Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus".</blockquote>
              </div>
              <div id="text-img2" class="col text-center  textdisable">
                        <p style="font-weight: bold;"class="h1 text-center">KISHORE</p>
                       <blockquote> "Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus. Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus. Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus".</blockquote>
                  </div>
                  <div id="text-img3" class="col text-center  textdisable">
                                <p  style="font-weight: bold;" class="h1 text-center">MANI</p>
                               <blockquote> " Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus. Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus. Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus".</blockquote>
                          </div>
                          <div id="text-img4" class="col text-center  textdisable">
                                        <p style="font-weight: bold;" class="h1 text-center">MADHAN</p>
                                       <blockquote> "Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus. Pellentesque ac lectus nec leo euismod ultrices. Lorem ipsum dolor sit amet, consectetur adipiscing elit amet risus".</blockquote>
                                  </div>
                                                                   
           </div>
        </div>
    </section>

<!-- footer section -->
    <section id="footer">
            <div class="container-fluid bg-dark text-light">
                   <div class="row container-fluid">
                          
                           <div class="col-sm-4">
                                        <h1 class="navbar-brand  wrap "> Clean Thuni </h1>
                                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                                        <div>
                                                <img  height="40px" width="40px" src="https://laundry.axiomthemes.com/wp-content/uploads/2016/12/footer_img1.png" alt="error">
                                                <img  height="40px" width="40px" src="https://laundry.axiomthemes.com/wp-content/uploads/2016/12/footer_img2.png" alt="error">
                                                <img  height="40px" width="40px" src="https://laundry.axiomthemes.com/wp-content/uploads/2016/12/footer_img3.png" alt="error">
                                        </div>

                           </div>
                           <div class="col-sm-4 footer-left ">
                                        <h1  style="color: #E82828; font-weight:bolder;"  class="text-center">SERVICE</h1>
                                   <ul class="list">
                                           <li>Drop off Laundry</li>
                                           <li>Free Pick-Up and Delivery</li>
                                           <li>Eco-Friendly Products</li>
                                           <li>Fast & High Quality</li>
                                   </ul>

                           </div>

                           <div class="col-sm-4 footer-left ">
                                        <h1  style="color: #E82828; font-weight: bolder;"  class="text-center">CONTACT US</h1>
                                          <p style=" margin-left: 20%;"> n0 5 raja colony, <br>
                                          trichy-620001 <br>
                                          email : thunicleaninfo@gmal.com <br>
                                          phone no:98989898</p>
                                          </div>
                   </div> 
                      
            </div>

    </section>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="scripts/jquery.waypoints.min.js"></script>
<script src="scripts/indexScript.js"></script>
</body>
</html>