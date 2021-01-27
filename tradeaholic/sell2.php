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
				
			    ?>
			    <div class="content-title text-center">
                    Your item was sold
                </div>

			    <div class="text-center php">

				    <?php
                        require_once("include/sell2.php");  //Faz retirar o item e o dinheiro
				    ?>

                </div>
            </div>
		</div>

		
	

    </body>

</html>