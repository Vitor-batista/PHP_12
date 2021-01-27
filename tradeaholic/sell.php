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
				    require_once("include/utility/session_verification.php");	//Verifica se a tem conta ligada
			    ?>
            
                <div class="content-title text-center">
                    Sell your itens
                </div>

			    <div class="table">
				    <?php
					    require_once("include/sell.php");	//Lista os itens
				    ?>
                </div>

		</div>

		
	

    </body>

</html>