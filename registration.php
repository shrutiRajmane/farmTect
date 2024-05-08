<?php
session_start();
header('location:login1.php');

$con = mysqli_connect('localhost','root');
if($con){
    echo "connection successful";
}
else{
    echo "no connection";
}

mysqli_select_db($con, 'signup');

$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Pass=$_POST['psw'];

$q="select * from signin where Name ='$Name' && Email='$Email' && Password='$Pass' ";
$result= mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    echo "duplicate data";
}
else{
    $qy="insert into signin(Name,Email,Password) values('$Name' , '$Email' , '$Pass')";
    mysqli_query($con, $qy);
}
?>