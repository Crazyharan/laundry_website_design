<?php
  
  if(isset($_POST['place']))
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
        $cloth=$_POST['cloth'];
        $qty=$_POST['qty'];
        $price=$_POST['price'];
        $sub=$_POST['subprice'];
        $total=$_POST['total'];
        $name=$_POST['uname'];
        $email=$_POST['uemail'];
        $phone=$_POST['uphone'];
        $address=$_POST['uadd'];
        $pincode=$_POST['upin'];
        $detergent=$_POST['powder'];
        $bleach=$_POST['bleach'];
        $bag=$_POST['bag'];
        echo  json_encode($cloth.$qty,$price,$sub,$total,$name,$email,$phone,$address,$pincode,$detergent,$bleach,$bag);
        // $img2=sizeof($img);
    //   for($i=0; $i<$img2; $i++)
    //   {
    //     $querry ="ALTER TABLE level ADD image[$i] varchar(255) , name[$i] varchar(255) ";
    
    }




}

else{
    echo" eroor in submit";
}

?>