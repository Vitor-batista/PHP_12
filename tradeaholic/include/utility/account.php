<?php 
	require_once("conn.php");
			
	if(!isset($_SESSION['username']))
		{
			goto quit;
		}
				
		$user = $_SESSION['username'];
		$pass = $_SESSION['password'];
		$id	  = $_SESSION['id'];
				

    	$sql = "SELECT nome, dinheiro FROM clientes WHERE id like '$id' ";
    	$result = $conn->query($sql);
            
    	if ($result->num_rows > 0) 
			{	
        		if($row = $result->fetch_assoc()) 
					{		
	       			    echo $row["nome"];
            		    echo " <br> ";
						echo $row["dinheiro"] . " €";
						?>
							<div class="">
								<a class="topnav-logout" href="index.php" name="logout">	Logout	</a>  
							</div>
						<?php
               		}
     		}
			else
				{
					echo "";
				}
quit:?>