<?php 
session_start();

if(isset($_POST['signup']))
{
$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$address=$_POST['uadd'];
$pin=$_POST['upin'];
$phone=$_POST['uphone'];

if($pwd==$cpwd)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblaundry";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
$querry= "insert into userdetails(u_name,u_pwd,u_cpwd,u_email,u_address,u_pin,u_phone) values('$uname','$pwd','$cpwd','$uemail','$address','$pin','$phone')";
if(mysqli_query($conn,$querry))
{
// $view="select * from userdetails where u_name='$uname'";
// $row=mysqli_query($conn,$view);
// $s=mysqli_fetch_array($row);
// $norow=mysqli_num_rows($row);
// if($norow==1)
// {
// $id=$s['u_id'];
// $_SESSION['id']=$s['u_id'];
// $sucess = "success";
// echo "<script> alert('$sucess');</script>";
// }
// else
// {
//     $sucess = "error  iin query";
//     echo  $sucess;

// }
$sucess = "success";
echo '<div class="alert alert-success" role="alert"> <h6> WELL DONE.....</h6>sign up successful </div>';
}
else
{
    $sucess = "error ";
    echo $sucess;
    
}
}
}
else
{ 
     $sucess = "error pass word";
     echo $sucess;
echo"<script> alert('please enter same password and conform password'); </script>";
}
}





?>