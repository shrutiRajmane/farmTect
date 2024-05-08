<?php
$con= mysqli_connect('localhost','root');
if($con){
    echo"Connected Succesful";
}else{
    echo "No connection";
}
mysqli_select_db($con, 'contactform' );
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$Message=$_POST['Message'];

$query="insert into userdatainfo(Name,Email,Phone,Message)
values('$Name','$Email','$Phone','$Message')";
mysqli_query($con, $query);
 echo"$query";

 mysqli_query($con, $query);
 ?>

