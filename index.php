<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			background-color: #f4f4f4;
		}

		#index {
			background-color: #fff;
			padding: 30px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 100%;
			max-width: 400px; /* Limit width for larger screens */
		}

		img{
			margin-left: 250px;
			margin-bottom: 100px;
		}
		
		h2 {
			text-align: center;
			margin-bottom: 20px;
		}

		.error {
			color: red;
			margin-bottom: 10px;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		button[type="submit"] {
			background-color: #4CAF50; /* Green */
			color: white;
			padding: 12px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}

		button[type="submit"]:hover {
			background-color: #45a049; /* Darker green on hover */
		}

		/* Responsiveness using Media Queries */
		@media (max-width: 700px) {
            
			#logo{
				width: 70px;
				margin: 0;
				margin-left: 20px;
				display: block;
			}
			#my_form{
				width: 300px;
			}
			
        }

		@media (min-width: 768px) and (max-width: 1024px) {
            form {
                background-color: blue;
            }
        }

		*{
			font-family: sans-serif;
			box-sizing: border-box;
		}

		form {
			width: 500px;
			border: 2px solid #ccc;
			padding: 30px;
			background: #fff;
			border-radius: 15px;
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); 
			margin-top: 50px;
		}

		h2 {
			text-align: center;
			margin-bottom: 40px;
		}

		input {
			display: block;
			border: 2px solid #ccc;
			width: 95%;
			padding: 10px;
			margin: 10px auto;
			border-radius: 5px;
		}
		label {
			color: #888;
			font-size: 18px;
			padding: 10px;
		}

		button {
			float: right;
			background: #555;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
			border: none;
		}
		button:hover{
			opacity: .7;
		}
		.error {
		background: #F2DEDE;
		color: #A94442;
		padding: 10px;
		width: 95%;
		border-radius: 5px;
		margin: 20px auto;
		}

		h1 {
			text-align: center;
			color: #fff;
		}

		a {
			float: right;
			background: #555;
			padding: 10px 15px;
			color: #fff;
			border-radius: 5px;
			margin-right: 10px;
			border: none;
			text-decoration: none;
		}
		a:hover{
			opacity: .7;
		}



		/* 
		.sidebar {
			background-color: #f0f0f0; 
			padding: 20px;
			height: 100vh; 
			position: fixed; 
			top: 0;
			left: 0;
			width: 250px;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}


		.main-content {
			margin-left: 250px; 
			padding: 20px;
		}

		.btn{
		margin: 9px 0 0 9px;
		}

		img{
		position: absolute;
		top: 5%;
		left: 14%;
		z-index: 1;
		width: 100%; 
		height: auto; 
		} */

	</style>
</head>
<body>
	<img src="img/logo_UCO-H-Q.png" id="logo" alt="" style="width: 250px;">
     <form action="login.php" method="post" id="my_form">
     	<h2>Bienvenue</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Utilisateur</label>
     	<input type="text" name="uname" placeholder="Utilisateur"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Se connecter</button>
     </form>
</body>
</html>
