<?php

    $user = $_SESSION['username'];
    $pass = $_SESSION['password'];

    if ($user == "admin" && $pass == "admin")
        {
        ?>
            <div class="content-title">
                Delete
            </div>

            <div class="container">
			    <div class="wrap p-l-55 p-r-55 p-t-20 p-b-30">
                    <form class="form" action="buy2.php" method="post" >
                    
                        <span class="form-title p-b-0">
                            Remove an item from the shop (admin feature)<br><br>
                            <a class="href" href="buy_delete.php">Chose an item to delete</a>       
                        </span>
                        
                        
                    </form>
                </div>
            </div>

            
                        
        <?php
        }