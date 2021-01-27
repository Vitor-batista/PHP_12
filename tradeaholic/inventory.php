<!DOCTYPE html>
<html lang="en">

    <head>

        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/util.css">

    </head>
    <body>

        <div class="cont">
            <?php
                require_once("include/utility/topnav.php");    //Faz a top nav
            ?>
        </div>

        <div class="padding">	
            <div class="content">

			    <?php
                    require_once("include/utility/session_verification.php");	//Verifica se a tem conta ligada
			    ?>
			
			    <div class="content-title text-center">
                    Inventory
                </div>
                
                <div class="table">

                    <?php
                        require_once("include/utility/list.php"); //Para listar os itens
                    ?>

                </div>


                <div class="content-title text-center p-t-60 p-b-10">
                    Add Funds
                </div>

                <div class="container">
			        <div class="wrap p-l-55 p-r-55 p-t-20 p-b-30">
                        <form class="form" action="inventory2.php" method="post" >
                    
                            <span class="form-title p-b-20">
						        Insert amount
					        </span>

                            <div class="wrap-input validate-input  m-b-20" data-validate="Enter username or email">
						        <input class="input" type="text" name="money" placeholder="Ex: 100" required>
						        <span class="focus-input"></span>
                            </div>
                        
                            <div class="container-form-btn">
						        <button class="form-btn">
						    	    Add
						        </button>
					        </div>
                        
                        </form>

                    </div> 

                </div>

            </div>

        </div>
        
    </body>
</html>