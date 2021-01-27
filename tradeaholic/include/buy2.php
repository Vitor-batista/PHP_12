<?php
    $user = $_SESSION['username'];
    $pass = $_SESSION['password'];



//Se um novo item tiver sido inserido
    if (isset($_POST['table']))
        {   

            require_once("include/utility/conn.php"); 

            unset($_SESSION['table']);

            $name  = $_POST['name'];
            $price = $_POST['price'];

            $sql = "INSERT INTO itens (preco,nome)
                    VALUES 
                    ('$price', '$name')";

            if ($conn->query($sql) == TRUE) 
                { 
                    ?>
                        <div class="text-center">

                            <div class="php p-b-10">
                                New item added
                            </div>

                            <a class="href" href="buy.php">Go Back!

                        </div>
                    <?php
                } 
                else 
                    {
                        echo "Erro: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();

        }

//Se um item tiver sido comprado
        else
            {

                require_once("utility/conn.php"); 

                $id_u = $_SESSION['id'];
			    $user = $_SESSION['username'];
                $pass = $_SESSION['password'];
                            
                $id_i  = $_GET['id'];
                $name  = $_GET['name'];
                $price = $_GET['price'];

                $date = date("Y.m.d");

                $sql1 = "SELECT dinheiro FROM clientes WHERE id='$id_u'";
                $result = $conn->query($sql1);
                $row = $result->fetch_assoc();
                $total = $row['dinheiro'] - $price;

                if($total < 0)
                    {

                        ?>
                            
                        <div class="php text-center">
                            You don't have money enough    
                        </div>

                            <div class="container php p-b-20" style="text-align: left" >

                                <table>
                                    <tr>
                                        <td> Name:                </td>
                                        <td> <?php echo $name; ?> </td>
                                    </tr>   

                                    <tr>
                                        <td> Price:                      </td>
                                        <td> <?php echo $price; ?>&nbsp€ </td>
                                    </tr>

                                    <tr>
                                        <td> Balance:                      </td>
                                        <td> <?php echo $row['dinheiro']; ?>&nbsp€ </td>
                                    </tr>

                                </table>

                            </div>
                                
                            <a class="href" href="inventory.php"> Add funds </a><br><br>
                            <a class="href" href="buy.php"> Go back to the shop </a>
                        <?php   
                        
                        exit;
                    }

                $sql =  "INSERT INTO inventario (id_item, id_cliente, data_compra)
                         VALUES ('$id_i' , '$id_u' , '$date')";

                $sql_table = "UPDATE itens SET
                              
                                comprado = '$price'
                               
                               WHERE id='$id_i' ";

                

                $sql_money = "UPDATE clientes SET

				            dinheiro='$total' 

                        WHERE id='$id_u'";

                if ($conn->query($sql) === TRUE && $conn->query($sql_table) === TRUE && $conn->query($sql_money) === TRUE) 
                    {
                        ?>
                            
                            <div class="container php p-b-20" style="text-align: left" >

                                <table>
                                    <tr>
                                        <td> Name:                </td>
                                        <td> <?php echo $name; ?> </td>
                                    </tr>   

                                    <tr>
                                        <td> Price:                      </td>
                                        <td> <?php echo $price; ?>&nbsp€ </td>
                                    </tr>

                                    <tr>
                                        <td> Balance:                      </td>
                                        <td> <?php echo $total; ?>&nbsp€ </td>
                                    </tr>

                                </table>

                            </div>
                                
                            <a class="href" href="inventory.php"> Go to your inventory </a><br><br>
                            <a class="href" href="buy.php"> Keep buying </a>

                        <?php
                    } 
                    else 
                        {
                            echo "Erro: " . $sql . "<br>" . $conn->error;
                        }
                        
                $conn->close();

            }
?>