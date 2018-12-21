<?php

session_start();

$con = mysqli_connect('Localhost,'giftplanet','123456');
mysqli_select_db($con, 'signup');


$name = $_POST['user'];0
$0ass = $_POST['password'];

$s = "select * from user table where name = '$name' &&password = '$pass'";
$result = mysqli_query($con, $s);
$num=mysqli_num_rows($result);



if($num ==1 ){
	   echo"Username Already Taken";
}
else{
	$reg=" insert into usertable(name, password) values ('$name', '$pass')";
	mysqli_query($con, $reg);
	echo"Signing you in"
}
	 


?>