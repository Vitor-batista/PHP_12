<?php
    $id_i = $_GET['id'];
    $price = $_GET['price'];

    $sql = "UPDATE clientes SET

                dinheiro=dinheiro+'$price' 

            WHERE id='$id';";

    $sql_table = "UPDATE itens SET
                              
                        comprado = NULL

                  WHERE id='$id_i' ";

    $sql_del = "DELETE FROM inventario WHERE id_item = '$id_i' ";

    $sql1 = "SELECT dinheiro FROM clientes WHERE id='$id'";
    $result = $conn->query($sql1);
    $row = $result->fetch_assoc();
    $total = $row['dinheiro'] + $price;

    if ($conn->query($sql) === TRUE && $conn->query($sql_del) === TRUE && $conn->query($sql_table) ) 
		{
            echo "Your balance is: ".$total . "&nbsp€";
            ?><br><br>
            <a class="href" href="inventory.php"> Go to your inventory </a><br><br>
            <a class="href" href="sell.php"> Keep selling </a>
            <?php
        } 
	    else 
		    {
			    echo "Erro ao apagar o registo: " . $conn->error;
		    }
	$conn->close();
?>