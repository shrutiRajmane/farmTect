<?php
session_start();


$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'signup');

$name=$_POST['uname'];
$pass=$_POST['psw'];

$q="select * from log where name ='$name' && password='$pass' ";
$result= mysqli_query($con, $q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['uname']=$name;
    header('location:index.php');
}
else{
    echo "please create your new account";
} 

?>