<?php

    $user = $_SESSION['username'];
    $pass = $_SESSION['password'];

    if ($user == "admin" && $pass == "admin")
        {
        ?>
            
            <div class="content-title text-center p-t-60 p-b-10">
                Insert
            </div>

            <div class="container">
			    <div class="wrap p-l-55 p-r-55 p-t-20 p-b-30">
                    <form class="form" action="buy2.php" method="post" >
                    
                        <span class="form-title p-b-20">
                            Add new item to the shop <br>(admin feature)
				        </span>

                        <input type="hidden" name="id">
						    

                        <div class="wrap-input validate-input  m-b-20" data-validate="Enter username or email">
						    <input class="input" type="text" name="name" placeholder="Name of the item" required>
						    <span class="focus-input"></span>
                        </div>

                        <div class="wrap-input validate-input  m-b-20" data-validate="Enter username or email">
						    <input class="input" type="text" name="price" placeholder="Price of the item" required>
						    <span class="focus-input"></span>
                        </div>
                        
                        <div class="container-form-btn">
						    <button class="form-btn" name="table">
						        Insert
						    </button>
                        </div>
        
                    </form>
                </div>
            </div>
                        
        <?php
        }