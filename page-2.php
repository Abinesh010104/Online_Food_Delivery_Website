<?php
session_start();
$conn= mysqli_connect("localhost","root","","signup_details");
IF(!$conn){
    echo"Error";
}
else{
    echo"Connected successfull";
}
$name= $_POST["name"];
$s="select * from signup_dt where name= '$name' ";
$sq=mysqli_query($conn,$s);
$num= mysqli_num_rows($sq);
if($num==1){
    $_SESSION['error']="User already exists";
       header('location:Food_deliver.php') ;  
  
}else{
    $insert= "insert into signup_dt(name,dob,email,phone,password) values('$_POST[name]','$_POST[date]','$_POST[email]','$_POST[phone]','$_POST[password]')";
    $in=mysqli_query($conn,$insert);
    if($in){
    $_SESSION['success']="Signup successfull";
    header('location:Food_deliver.php') ;}
    else{
        echo"Error";
    }
    
   
}




mysqli_close($conn);








?>