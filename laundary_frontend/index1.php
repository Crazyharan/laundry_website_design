<?php


if(isset($_POST['aid']))
{
   $con = mysqli_connect("localhost","root","","dblaundry");
   $query = "SELECT  price FROM products  where id=".$_POST['aid'];
   $result = mysqli_query($con,$query);
   $price=mysqli_fetch_assoc($result);
   echo json_encode($price);
}

?>