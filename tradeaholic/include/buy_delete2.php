<?php

    require_once("utility/conn.php");
				
	$user = $_SESSION['username'];
    $pass = $_SESSION['password'];
    
    $id    = $_GET['id'];
    $name  = $_GET['name'];
    $price = $_GET['price'];

    $sql = "DELETE FROM itens WHERE id = '$id' ";

    if($conn->query($sql) == TRUE)
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
                
                <a class="href" href="buy.php"> Go back </a>
            <?php  
        } 
        else 
            {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

?>