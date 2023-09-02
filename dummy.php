
<?php
session_start();
$conn=mysqli_connect("localhost","root",'','signup_details');
if($conn){
    echo"Connected successfully";
}else{
    echo"error in connection";
}
$name = $_POST["name"];
$pass = $_POST["pass"];
$s="select * from signup_dt where name= '$name' ";
$sq=mysqli_query($conn,$s);
$num= mysqli_num_rows($sq);
if($num==1){
    $_SESSION['name']=$name;
    header('location:login-page.php');
}
else{
    echo $num;
}
?>
<html>
    <body>
        <h1>Welcome <?php echo $_SESSION['name'] ?></h1>
    </body>
</html>