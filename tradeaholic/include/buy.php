<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8";>
    <link rel="stylesheet" href="css/table.css">
	</head>

	<body>

		<?php 
                        
			require_once("utility/conn.php");
			
			//////////////////////////////////////////	
													//
			if(!isset($_SESSION['delete']))			//
				{									//
					$href = 'buy2.php';				//	Verifica se a variavel está "ativa"
					$camp = 'Buy It';				//	se estiver redireciona para buy_delete.php
				}									//	e insere Delete no 1ºcampo se não
				else								//  estiver redireciona para buy2.php
					{								//	e insere Buy It no 1ºcampo
						$href = 'buy_delete2.php';	//
						$camp = 'Delete';			//
					}								//
													//
			//////////////////////////////////////////

				$user = $_SESSION['username']; 
				$pass = $_SESSION['password'];
				

           		$sql = "SELECT id, nome, preco FROM itens WHERE comprado is null";
        		$result = $conn->query($sql);
            
           		if ($result->num_rows > 0) 
                   {
					unset($_SESSION['delete']);	//Limpa a variavel para nao bugar o programa

					echo "<table border = '1'>
                            <tr>
                                <th> Get    </th>
								<th> Name   </th>
								<th> Price  </th>
                            </tr>";
					
							while($row = $result->fetch_assoc()) 
								{
									echo '<tr>
											    <td>
												    <a href="'.$href.'?
												    	id='.$row["id"].'&
												    	name='.$row["nome"].'&
                                                        price='.$row["preco"].'
                                                    ">                             
                                                    '.$camp.'
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