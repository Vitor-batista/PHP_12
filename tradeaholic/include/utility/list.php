<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8";>
		<link rel="stylesheet" href="css/table.css">
	</head>

	<body>

		<?php
			require_once("conn.php");
		
			$id = $_SESSION['id'];

			$sql = "SELECT inv.id, itn.nome, itn.preco, inv.data_compra, inv.id_cliente
					FROM inventario inv, itens itn
					WHERE inv.id_cliente = '$id' and inv.id_item = itn.id ";
			$result = $conn->query($sql);
                
			if ($result = $conn->query($sql)) 
		{
			if ($result->num_rows > 0) 
			    {
				    echo "
				    	<table border = '1'>
					    	<tr>
					    		<th> Name     		</th>
					    		<th> Price   		</th> 
								<th> Purchase Day 	</th>
					    	</tr>";
                       
					    	while($row = $result->fetch_assoc()) 
						    	{
                                    echo "
                                        <tr>
									    	<td> ".$row["nome"]."           </td>
										    <td> ".$row["preco"]."          </td>
											<td> ".$row["data_compra"]." 	</td>
	    								</tr>";
    						    }
                                    
    				echo "</table>";
                }
                else
	    		    {
						?>
							<div class="text-center">
								<div class="php p-b-20">
									You don't have any itens
								</div>
								<a class="href text-center" href="buy.php"> Go to the shop </a>
							</div>
						<?php
			        }
		}
		else {
			printf("Query failed: %s\n", $conn->error);
		}
    			$conn->close();

		?>

	</body>
</html>