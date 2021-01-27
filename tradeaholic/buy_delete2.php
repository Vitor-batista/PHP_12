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

        <div class="padding">
            <div class="content">	

                <div class="content-title text-center">
                    The item was removed
                </div>
		
			    <div class="text-center">

                    <?php
                        require_once("include/buy_delete2.php");    //Imprime os itens 
			        ?>
                
                </div>
            </div>
		</div>
        
    </body>
</html>