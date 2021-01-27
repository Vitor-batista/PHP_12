<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Steam Community Market</title>
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
			    	require_once("include/utility/session_verification.php");	//Verifica se tem conta ligada
		        ?>

			    <div class="content-title text-center">
                    Buy itens
                </div>
                
                <div class="table">
                    <?php
                        require_once("include/buy.php");        //Imprime os itens
                    ?>
                </div>

                <div class="form">
                    <?php
                        require_once("include/buy_insert.php"); //Form para inserir itens
                    ?>
                </div>

                <div class="content-title text-center">
                    <?php
                        require_once("include/buy_delete.php"); //Para apagar registos  
			        ?>
                </div>

            </div>
		</div>
        
    </body>

</html>