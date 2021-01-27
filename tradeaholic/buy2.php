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

        <div class="count">
            <?php
                require_once("include/utility/topnav.php");    //Faz a top nav
            ?>
        </div>

        <div class="padding">
            <div class="content">	

                <div class="content-title text-center">
                    You bought a new item
                </div>

    			<div class="text-center">
                    <?php
                        require_once("include/buy2.php");   //Tira o item da tabela e tira o dinheiro
                    ?> 
                </div>

		    </div>
        </div>
    </body>
    
</html>