<?php
			require_once("include/utility/conn.php"); 

			$user = $_POST['username'];
			$pass = $_POST['password'];
			$conf_pass = $_POST['conf_password'];

			if($pass != $conf_pass)
				{
					$_SESSION['pass_match'] = true;
					echo "<script> window.location.assign('singup.php'); </script>";
					exit;
				}


			$sql = "SELECT * FROM clientes WHERE nome like '$user'  ";
			$result = $conn->query($sql);
	
			if($result->num_rows != 0) 
				{    
					$_SESSION['user_taken'] = true;
					echo "<script> window.location.assign('singup.php'); </script>";
					exit;
				} 

			$sql = "INSERT INTO 
                    clientes ( nome, pass)
					VALUES ('$user', '$pass')";

			if ($conn->query($sql) === TRUE) 
				{
					echo "<script> window.location.assign('singup_created.php'); </script>";
				} 
				else 
					{
						echo "Erro: " . $sql . "<br>" . $conn->error;
					}
			
			$conn->close();
?>