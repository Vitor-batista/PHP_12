<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Tradeaholic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/util.css"> <!-- São códigos para facilitar no tamanho e propriedades de letras e outros -->
		<link rel="stylesheet" href="css/login.css">

    </head>
    <body>	

		<div class="container" style="background-image: url('images/1.jpg');background-repeat: no-repeat;">
			<div class="wrap p-l-55 p-r-55 p-t-80 p-b-30">	<!-- p-l-55 e etc. são códigos da util(ity)-->
                <form class="form" action="index2.php" method="post" >
					
					<span class="form-title p-b-20"> <!-- padding-bottom:20 -->
						Tradeaholic
					</span>
 
					<div class="txt3 p-b-17"> 
						<?php
							require_once("include/index_notfound.php");
							require_once("include/utility/destroy.php")
						?>
					</div>
					
					<div class="wrap-input validate-input  m-b-20" data-validate="Enter username or email">
						<input class="input" type="text" name="username" placeholder="Username" required>
						<span class="focus-input"></span>
					</div>

					<div class="wrap-input validate-input m-b-25" data-validate = "Enter password">
						<input class="input" type="password" name="password" placeholder="Password" required>
						<span class="focus-input"></span>
					</div>

					<div class="container-form-btn">
						<button class="form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-57 p-b-20">
						<span class="txt1">
							Don't have an account?
						</span>
					</div>

					<div class="text-center">
						<a href="singup.php" class="txt2 hov1">
							Sign up
						</a>
					</div>
					                 
                </form>   
			</div>

		</div>

    </body>

</html>

<!--<br>Don't have an account?

                        <a href="singup.php">
							Sign up
                        </a>-->