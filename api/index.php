<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log In</title>
  <link rel="shortcut icon" href="/padlock.png">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet">
  <link rel="stylesheet" href="/style.css"><link rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>


	<div class="section">
		<div class="container">
			<div class="Start">
				<form action="/log.php" method="post">
					<div class="section text-center">
					<h1 class="mb-4 pb-3">Log In</h1>
					<div class="form-group">
						<input type="text" name="usuario" class="form-style" placeholder="Name" id="logename" autocomplete="off" required>
					</div>
					<div class="form-group mt-2">
						<input type="password" name="pass" class="form-style" placeholder="Password" id="logpass" autocomplete="off" required>
					</div>
						<button type="submit" value="Ingresar" name="btningresar">Enter</button>
					</div>
				</form>
	      	</div>
	    </div>
	</div>


</body>
</html>
