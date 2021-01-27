<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8";>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/main.css">
	</head>

	<body>

        <?php

			require_once("utility/conn.php");
		
			$search = $_POST['search'];
			
			$sql = "SELECT nome, preco
                    FROM itens
                    WHERE nome like '%$search%' or preco like '%$search%' ";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) 
				{
					echo "
						<table border = '1'>
							<tr>
								<th> nome   </th>
								<th> preco  </th>
							</tr>";
							
						    while($row = $result->fetch_assoc()) 
								{
									echo 
										'<tr>
											<td>
												',$row["nome"],'
											</td>
									
											<td>
												',$row["preco"],' €
											</td>
										</tr>';
					
								}
						echo "</table>";
					}
					else
					{
						echo "0 results";
					}
					
			$conn->close();
		?>
        <br><br><a class="href" href="search.php"> Go back </a>
    </body>
</html>
