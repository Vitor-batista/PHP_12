<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8";>
    	<link rel="stylesheet" href="css/table.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/util.css">	
</head>

	<body>

		<?php 
                        
            require_once("utility/conn.php");
				
				$user = $_SESSION['username'];
				$pass = $_SESSION['password'];

           		$sql = "SELECT itn.id, itn.nome, itn.preco, inv.data_compra, inv.id_cliente
                        FROM inventario inv, itens itn
                        WHERE inv.id_cliente = '$id' and inv.id_item = itn.id ";
                
                $result = $conn->query($sql);
            
           		if ($result->num_rows > 0) 
                   {
					echo "<table border = '1'>
                            <tr>
                                <th> Sell           </th>
                                <th> Name     		</th>
                                <th> Price    		</th> 
                                <th> Purchase Day   </th>
                            </tr>";
					
							while($row = $result->fetch_assoc()) 
								{
									echo '<tr>
											    <td>
												    <a href="sell2.php?
												    	id= '.$row["id"].'&
                                                        price= '.$row["preco"].'
                                                    ">                             
                                                    Sell It
												    </a>
                                                </td>
                                            
											    <td>
											    	',$row["nome"],'
                                                </td>
                                            
											    <td>
											    	',$row["preco"],'€
                                                </td>
                                                
                                                <td>
											    	',$row["data_compra"],'
											    </td>
										    </tr>';
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
								<a class="href text-center" href="buy.php"> Go to shop </a>
							</div>
						<?php
					}
            $conn->close();	
        quit:?>

	</body>
</html>