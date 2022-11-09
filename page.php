<?php
  $u_name=$_POST['username'];
  $p_name=$_POST['password'];

  $con=mysqli_connect("localhost","root","","login form");
 
  $sql="INSERT INTO loginpage (username,password) values('$u_name','$p_name')";
$r=mysqli_query($con,$sql);

if($r){
    echo"Your login was successful ";
}
else{
    echo"not add";
}

?>




    


