<?php
error_reporting(0);
$con= mysqli_connect('localhost','root');
if($con){
    echo"Connected Succesful";
}else{
    echo "No connection";
}
mysqli_select_db($con, 'demo1' );
$user=$_POST['Name'];
$email=$_POST['Email'];
$mobile=$_POST['Phone'];
$comment=$_POST['Message'];

$query="insert into farm1(Name,Email,Phone,Message)
values('$Name','$Email','$Phone','$Message')";
mysqli_query($con, $query);
 echo"$query";

 mysqli_query($con, $query);

 header('location:contact1.php');
?>