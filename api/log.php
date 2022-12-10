<?php

include("conexion.php");

session_start();

if(isset($_POST["btningresar"]))
{   
	$nombre = $_POST["usuario"];
	$pass   = $_POST["pass"];
	$query = mysqli_query($conn,"SELECT * FROM User WHERE user = '$nombre' AND pwd ='$pass'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{   
	    $_SESSION['nombre'] = $nombre;  
	    $_SESSION['pass'] = $pass;
		header('location: in.php');
		   
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='/index.php' </script>";
	}
}

if(isset($_POST["btngenerar"]))
{   
	$site = $_POST["site"];
	$n = $_POST["lend"];
	$y = $_POST["tipo"];
	$nombre = $_SESSION['nombre'];
	$pass = $_SESSION['pass'];
	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$numbers = '01234567899876543210123456789';
	$sings = '!@#$%&*?/|><:;+=!@#$%&*?/|><:;+=';
	$randomString = '';
	switch($y) {
	case 1:
		$string = $numbers;
		for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($string) - 1);
		$randomString .= $string[$index];
		}
		$sqlgrabar = "INSERT INTO PSS (site, pss) values ('$site','$randomString')";
		if(mysqli_query($conn,$sqlgrabar))
		{   
			$_SESSION['nombre'] = $nombre;  
	    	$_SESSION['pass'] = $pass;
			header('location: in.php');
		}else 
		{
			echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
		}
	break;
	case 2:
		$string = $characters;
		for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($string) - 1);
		$randomString .= $string[$index];
		}
		$sqlgrabar = "INSERT INTO PSS (site, pss) values ('$site','$randomString')";
		if(mysqli_query($conn,$sqlgrabar))
		{   
			$_SESSION['nombre'] = $nombre;  
	    	$_SESSION['pass'] = $pass;
			header('location: in.php');
		}else 
		{
			echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
		}
	break;
	case 3:
		$string = "$numbers$characters";
		for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($string) - 1);
		$randomString .= $string[$index];
		}
		$sqlgrabar = "INSERT INTO PSS (site, pss) values ('$site','$randomString')";
		if(mysqli_query($conn,$sqlgrabar))
		{   
			$_SESSION['nombre'] = $nombre;  
	    	$_SESSION['pass'] = $pass;
			header('location: in.php');
		}else 
		{
			echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
		}
	break;
	case 4:
		$string = "$numbers$characters$sings";
		for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($string) - 1);
		$randomString .= $string[$index];
		}
		$sqlgrabar = "INSERT INTO PSS (site, pss) values ('$site','$randomString')";
		if(mysqli_query($conn,$sqlgrabar))
		{   
			$_SESSION['nombre'] = $nombre;  
	    	$_SESSION['pass'] = $pass;
			header('location: in.php');
		}else 
		{
			echo "Error: ".$sqlgrabar."<br>".mysql_error($conn);
		}
	break;
	} 
	
}