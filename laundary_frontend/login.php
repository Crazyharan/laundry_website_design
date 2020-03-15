<?php 
session_start();

if(isset($_POST['login']))
{
$uname=$_POST['lname'];
$pwd=$_POST['lpwd'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dblaundry";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
$querry="SELECT * FROM userdetails WHERE  u_name ='$uname' AND  u_pwd ='$pwd' ; ";

if($result = mysqli_query($conn,$querry))
{
    echo $uname,$pwd;
$row=mysqli_fetch_assoc($result);
$num_row = mysqli_num_rows($result);

if($num_row == 1)
{
    $_SESSION['uid']=$row['u_id'];
    $_SESSION['uname']=$row['u_name'];
    $_SESSION['uaddress']=$row['u_address'];
    $_SESSION['upin']=$row['u_pin'];
    $_SESSION['uphone']=$row['u_phone'];
    $_SESSION['uemail']=$row['u_email'];
    echo "success";
    header('location:PN-LaundryBooking\index.php');
   
}
else
{
    echo "errror";
}
}
else
{
    echo "query error";
}
}
}

?>