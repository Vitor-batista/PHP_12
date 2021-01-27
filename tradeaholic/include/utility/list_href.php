<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8";>
    <link rel="stylesheet" href="css/table.css">
	</head>

	<body>

		<?php 
                        
            require_once("conn.php");

				$user = $_SESSION['username'];
				$pass = $_SESSION['password'];

           		$sql = "SELECT id, nome, preco FROM itens";
        		$result = $conn->query($sql);
			
				

           		if ($result->num_rows > 0) 
                   {
					echo "<table border = '1'>
                            <tr>
                                <th> Item    </th>
								<th> Name   </th>
								<th> Price  </th>
                            </tr>";
					
							while($row = $result->fetch_assoc()) 
								{
									echo '<tr>
												<td>
												    <a href="change2.php?
												    	id= '.$row["id"].'&
                                                        name= '.$row["nome"].'&
                                                        price= '.$row["preco"].'
                                                    ">                             
                                                    Select
												    </a>
                                                </td>
                                            
											    <td>
											    	',$row["nome"],'
                                                </td>
                                            
											    <td>
											    	',$row["preco"],'€
											    </td>
										    </tr>';
								}
					echo "</table>";
				}
				else
					{
						echo "0 resultados";
					}
            $conn->close();	
        quit:?>

	</body>
</html>