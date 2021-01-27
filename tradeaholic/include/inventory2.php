 <?php

require_once("utility/conn.php");

    $money = $_POST['money'];
    $id = $_SESSION['id'];

    $sql = "UPDATE clientes SET

				dinheiro=dinheiro+'$money' 

            WHERE id='$id';";
            
	$sql1 = "SELECT dinheiro FROM clientes WHERE id='$id'";
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();
    $total = $row['dinheiro'] + $money;

    if ($conn->query($sql) === TRUE) 
		{
            ?>
                <div class="php-title p-b-10">
                    Funds added
                </div>
                <div class="p-b-10">
                    Added:         <?php echo $money; ?>&nbsp€
                    <br>
                    Balance: <?php echo $total; ?>&nbsp€
                </div>
                
                <a class="href" href="inventory.php"> Go back </a>
            <?php
		} 
		else 
			{
				echo "Erro: " . $sql . "<br>" . $conn->error;
			}
			
	$conn->close();

?>
