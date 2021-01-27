<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8";>
	</head>

	<body>

		<?php 

			session_start();

			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "SteamMarket";

			$conn = new mysqli($servername, $username, $password, $dbname);
			
			if ($conn->connect_error) 
				{
					die("Erro de ligação: " . $conn->connect_error);
				}
		?>

	</body>
</html>