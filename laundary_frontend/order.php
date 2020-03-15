<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>order</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/indexDesign.css">



    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="scripts/orderscript.js"></script>
    <script>

        // ajax for price
$(document).ready(function()
{
$("#cloth").change(function(){
    var aid = $("#cloth").val();
    $.ajax({
        url:'index1.php',
        method:'post',
        data: 'aid='+ aid
    }).done(function(price)
    {
        price =JSON.parse(price);     
        $('#data0').empty();
            $('#data0').append('<span id="price0"  name="price[]"  data-price="'+price.price+'">'+price.price+'</span>');
            myFunction(0);
            total();
           
       
    })
})
});
// ajax for new row price
function neew(i)
{
    var aid = $("#cloth"+i+"").val();
    $.ajax({
        url:'index1.php',
        method:'post',
        data: 'aid='+ aid
    }).done(function(price)
    {
        price =JSON.parse(price);     
        $('#data'+i+'').empty();
            $('#data'+i+'').append('<span id="price'+i+'" name="price[] "  data-price="'+price.price+'">'+price.price+'</span>');

            myFunction(i);
            total();

    })

}
</script>
   
</head>

<body>

<?php
// option for pirce in drop down list box
 $con = mysqli_connect("localhost","root","","dblaundry");
 $query = "SELECT  * FROM products ";
 $result = mysqli_query($con,$query);
 while($c = mysqli_fetch_array($result))                          
    {
 ?>    
  <script>
    $(document).ready(function(){
    $("#cloth").append(' <option id="<?php echo $c['id']; ?>" value="<?php echo $c['id']; ?>" > <?php echo $c['product']; ?> </option> ');
});       
        //   var address= document.getElementById('cloth');    
 </script>
<?php
    }
?>

<script>
    // option for new row of  drop down box
i=1;
$(document).ready(function()
{
  $("#btn").click(function()
  {
$("#mmm").append('<tr> <td><select name="cloth[]" onclick="neew('+i+')" class="form-control custom-select-sm" id="cloth'+i+'"> <option  selected="" disabled="" value="pre"> select cloth</option>  </select></td> <td><input   type="text" oninput=" myFunction('+i+')" value="1"  name="qty[]" id="qty'+i+'" style="width:60px !important; margin-left:40%;" class="form-control"/></td> <td id="data'+i+'">nil</td><td>     <span id="sub'+i+'" name="subprice[]" > nil </span>  <button class="btn btn-primary float-right" id="btn'+i+'" onclick="removebtn('+i+')"> remove</button> </td></tr> '); 
  <?php
 $conn = mysqli_connect("localhost","root","","dblaundry");
 $queryy = "SELECT  * FROM products ";
 $res = mysqli_query($con,$queryy);
 while($b = mysqli_fetch_array($res))                          
    {
 ?>    
$("#cloth"+i+"").append(' <option id="<?php echo $b['id']; ?>"  value="<?php echo $b['id']; ?>" > <?php echo $b['product']; ?> </option> ');      
<?php
    }
?>
i++; 
});
});


</script>

<!-- header section  -->
     <section id="cover ">
        <div   class="header">
            
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
                                <button class="nav-link btn mt-4" data-toggle="modal" data-target="#myModal">Orders</button>
                        </li>

                    </ul>      
                    <hr>
    <nav id="nav-des"   class="navbar navbar-expand-sm  navbar-light justify-content-center ">   
        <ul class="navbar-nav ">
            <li class="nav-item">
                    <a id="nav-des1" class="nav-link c-dark" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                    <a  id="nav-des2"  class="nav-link  c-dark" href="index.php#service">Service</a>
            </li>
            <li class="nav-item">
                    <a id="nav-des3"  class="nav-link  c-dark" href="index.php#histsw">How ITS WORK</a>
            </li>   
            <li class="nav-item">
                    <a id="nav-des4" class="nav-link  c-dark" href="index.php#pricing">PRICING</a>
            </li> 
            <li class="nav-item">
                    <a  id="nav-des5" class="nav-link  c-dark" href="#">ABOUT US</a>
            </li>   
            <li class="nav-item">
                    <a  id="nav-des5" class="nav-link  c-dark" href="#">LOGOUT</a>
            </li> 
        </ul>

    </nav>
</div>
    </section>

    <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-xl  modal-dialog-centered ">
                  <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header ">
                      <h4 class="modal-title">  WELCOME TO CLEAN THUNI </h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body p-5 ">

                    no order till  now 
                    </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                    </div>                   
                  </div>
                </div>
              </div>
<!--table section -->
    <section id="table">
        <div class="container"> 
            <div class="container-fluid" style="background-color:#E22727">
            <h2 class="text-center" style="color:white "> Price Details </h2>
</div>
            <div class="table-responsive ">
            <form id="final" action="placeorder.php" method="post" class="needs-validation  w3-animate-left" novalidate>
                <table class="table table-bordered table-sm text-center ">
                        <tr>
                            <th>Cloth Type</th>
                            <th>Quandity</th>
                            <th>Price</th>
                            <th>Sub Price</th>
                        </tr>
                    </thead>
                    <tbody id="mmm">
                        <tr >
                            <td><select name="cloth[]"  class="form-control custom-select-sm" id="cloth">
                            <option  selected='' disabled='' value='pre'> select cloth</option>                                   
                                </select></td>
                            <td>  <input   type="text" name="qty[]" oninput=" myFunction(0)" value="1" id="qty" style="width:60px !important; margin-left:40%;" class="form-control"/>  </td>
                            <td><span id="data0" > nil </span></td>
                            <td > <span id="sub0"  name="subprice[]" > nil </span></td>
                        </tr>
                    </tbody> 
                    <tfoot >
                        <td></td>
                        <td></td>
                        <td></td>
                        <td >
                            <div class="text-center">
                            <label  for="footertot">total=INR</label>
                            <span id="footertot" name="total" > 0</span> </td>
                            </div>
                    </tfoot>
                </table>
                <button  type="button" class="btn btn-primary" id="btn">+</button> 
                
            </div>
        </div>
        </div>
    </section>

    <!-- personal details -->
    <section id="form">
        <div class="container">
        <div class="container-fluid" style="background-color:#E22727">
            <h2 class="text-center" style="color:white "> Personal Details </h2>
            </div>

            
                <div class="row">
                    <div class="form-group col-sm-4 pb-1 mb-2 ">
                        <label for="uname">name</label>
                        <input type="text" class="form-control" id="uname" value=" <?php echo $_SESSION['uname']; ?>" placeholder="Enter name" name="uname" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out name field.</div>
                    </div>
                    <div class="form-group col-sm-4 pb-1 mb-2 ">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="uemail"value=" <?php echo $_SESSION['uemail']; ?>" placeholder="Enter email" name="uemail"
                            required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out Email field.</div>
                    </div>
                    <div class="form-group col-sm-4 pb-1 mb-2">
                        <label for="pwd">phone no</label>
                        <input type="text" class="form-control" id="uphone"  value=" <?php echo $_SESSION['uphone']; ?>" placeholder="Enter phone no" name="uphone" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out phone no field.</div>
                    </div>
                    <!-- <div class="form-group pb-1 mb-2">
                                            <label for="pwd">Conform Password:</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Enter  conform password" name="pswd" required>
                                            <div class="valid-feedback">Valid.</div>
                                            <div class="invalid-feedback">Please fill out conform password field.</div>
                                          </div> -->
                </div>

                <div class="form-group pb-1 mb-2 ">
                     <label for="uadd">Address</label>
                        <textarea class=" form-control" id="uadd" placeholder="Enter address " name="uadd" required> <?php echo $_SESSION['uaddress']; ?></textarea>
                          <div class="valid-feedback">Valid.</div>
                             <div class="invalid-feedback">Please fill out adddress field.</div>
                                </div>
                                   <div class="form-group pb-1 mb-2 ">
                                       <label for="upin">pincode </label>
                                            <input type="text" class="form-control" id="upin"  value=" <?php echo $_SESSION['upin']; ?>" placeholder="Enter pincode " name="upin" required>
                                                 <div class="valid-feedback">Valid.</div>
                                                     <div class="invalid-feedback">Please fill out  pincode  field.</div>
                                                         </div>
                


                <!-- adavance care  section  -->
                <div class="container-fluid" style="background-color:#E22727">
                <h2 class="text-center" style="color:white " > Advance Care </h2>
                </div>


                
                <div class="form-group custom-control custom-radio " id="Detergent">
                  <label for="Detergent"><h4>Preferred Laundry Detergent :</h4></label>
                        <div class="custom-control ml-3 custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio1" name="powder" required>
                                <label class="custom-control-label" for="customRadio1">Rin</label>
                              </div>
                              <div class="custom-control ml-3 custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="powder""  required>
                                <label class="custom-control-label" for="customRadio2">Tide</label>
                              </div>            
                    </div>

                   
                    <div class="form-group custom-control custom-radio " id="bleach">
                            <label for="bleach"><h4>white shirt bleach :</h4></label>
                                  <div class="custom-control  ml-3 custom-radio custom-control-inline">
                                          <input type="radio" class="custom-control-input" id="customRadio5" name="bleach"  required>
                                          <label class="custom-control-label" for="customRadio5">Yes</label>
                                        </div>
                                        <div class="custom-control ml-3 custom-radio custom-control-inline">
                                          <input type="radio" class="custom-control-input" id="customRadio6" name="bleach"  required>
                                          <label class="custom-control-label" for="customRadio6">No</label>
                                        </div>            
                              </div>
          
                   
                   
                   
                    <div class="form-group custom-control custom-radio " id="bag">
                            <label for="bag"><h4>Need laundary bag :</h4></label>
                                  <div class="custom-control form-group ml-3 custom-radio custom-control-inline">
                                          <input type="radio" class="custom-control-input" id="customRadio3" name="bag"  required>
                                          <label class="custom-control-label" for="customRadio3">Yes</label>
                                        </div>
                                        <div class="custom-control ml-3 custom-radio custom-control-inline">
                                          <input type="radio" class="custom-control-input" id="customRadio4" name="bag"  required>
                                          <label class="custom-control-label" for="customRadio4">No</label>
                                        </div>            
                              </div>

        <button type="submit"  name="place" class="btn btn-primary mx-auto d-block mb-5">place order</button>
        </form>
        </div>
        </div>
    </section>
   
   
</body>
 
</html>