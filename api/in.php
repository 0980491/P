<?php
include("conexion.php");
session_start();

$nomb = $_SESSION['nombre'];
$pass = $_SESSION['pass'];
$consulta = "SELECT * FROM User WHERE user = '$nomb'";
$nombre = $nomb; 

if(($nomb=="") || ($pass="")){
	header('location: in.php');
}

$_SESSION['nombre'] = $nomb;  
$_SESSION['pass'] = $pass;
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>In</title>
  <link rel="shortcut icon" href="/padlock.png">
  <link rel='stylesheet' href='/bootstrap.css'>
  <link rel='stylesheet' href='/unicors.css'><link rel="stylesheet">
  <link rel="stylesheet" href="/style.css"><link rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<?php
		$sql="SELECT * FROM PSS";
		$dat = mysqli_query($conn, $sql);
		echo "
			<h1><center>password</center></h1>
			";
		while($consulta = mysqli_fetch_array($dat))
		{   
			echo "
				<h2><center>".$consulta['Site']." - ".$consulta['pss']."</center></h2>
				";
		}
		?>


<form action="/generate.php" method="post">
	<center><button type="submit" value="Generate new password" name="btngenerar">Generate new password</button></center>
</form>
</body>
</html>