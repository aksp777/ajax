<?php

$mysqli = new mysqli("localhost", "root", "", "ajax") or die(mysqli_error($mysqli));

$name=$_POST['name'];
	$age=$_POST['age'];
	$result=$mysqli -> query("INSERT INTO user(name,age) VALUES ('$name', '$age')")or die($mysqli->error);
	if($result == true){
		echo"succesful";
	}
	else{
		echo"not succesful";
	}


 ?>
