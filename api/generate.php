<?php
include("conexion.php");
    
$nomb = echo $_SESSION['nombre'];
$pass = echo $_SESSION['pass'];
$consulta = "SELECT * FROM User WHERE user = '$nomb'";
$nombre = $nomb; 

if(($nomb=="") || ($pass="")){
  header('location: index.php');
}

$_SESSION['nombre'] = $nomb;  
$_SESSION['pass'] = $pass;
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Generate</title>
  <link rel="shortcut icon" href="/padlock.png">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet">
  <link rel="stylesheet" href="/style.css"><link rel="stylesheet">
</head>
<body>
	
<div class="section">
		<div class="container">
			<div class="Start">
                <form action="/log.php" method="post">
                    <div class="section text-center">
                        <h1 class="mb-4 pb-3">Generate new password</h1>
                        <div class="form-group">
                            <input type="text" name="site" class="form-style" placeholder="site" id="logename" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="lend" class="form-style" placeholder="password lend (4 - 30)" id="logename" autocomplete="off" min="4" max="30" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="tipo" class="form-style" placeholder="(1)# (2)abc (3)a# (4)a#\" id="logename" autocomplete="off" min="1" max="4" required>
                        </div>
                        <div>
                            <button type="submit" value="Generate new password" name="btngenerar">Enter</button>
                        </div>
                    </div>
                </form>
            </div>
	    </div>
</div>
</body>
</html>