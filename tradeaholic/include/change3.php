<?php
	require_once("utility/conn.php"); 

	$id       = $_POST['id'];
    $name     = $_POST['name'];
    $price    = $_POST['price'];
		
	$sql = "UPDATE itens SET

				nome='$name',
				preco='$price'

			WHERE id='$id'";
		
		
    if ($conn->query($sql) === TRUE) 
		{

			?>
                <div class="container php p-b-10" style="text-align: left" >

                    <table>
                        <tr>
                            <td> Name:                  </td>
                            <td> <?php echo $name; ?>   </td>
                            
                        </tr>   
                        
                        <tr>
                            <td> Price:                         </td>
                            <td> <?php echo $price; ?>&nbsp€    </td>
                        </tr>
                    </table>

                </div>
                
                <a href="change.php"> Go back </a>
			<?php 
			
		} 
		else 
			{
				echo "Erro: " . $sql . "<br>" . $conn->error;
			}
			
	$conn->close();
?>  