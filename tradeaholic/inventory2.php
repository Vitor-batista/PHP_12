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
                    require_once("include/utility/session_verification.php");	//Verifica se tem a conta ligada
			    ?>
			
			    <div class="content-title text-center">
                    Inventory
                </div>

            <div class="php text-center">
                <?php
                    require_once("include/inventory2.php");  //Adiciona o dinheiro
                ?>
            </div>

		</div>

    </body>

</html>