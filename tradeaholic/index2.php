<?php
			require_once("include/utility/conn.php"); 

			$user = $_POST['username'];
			$pass = $_POST['password'];
			
            $sql = "SELECT * FROM clientes WHERE nome like '$user' and pass like '$pass'  ";
            $result = $conn->query($sql);

			if($result->num_rows != 0) 
				{    
					if($row = $result->fetch_assoc()) 
						{
							$_SESSION['id'] = $row["id"];
                   			$_SESSION['username'] = $user;
                    		$_SESSION['password'] = $pass;
						}

						echo "<script> window.location.assign('inventory.php'); </script>";
				} 
				else 
					{
						$_SESSION['notfound'] = true;
						echo "<script> window.location.assign('index.php'); </script>";
					}
			
			$conn->close();
?>
