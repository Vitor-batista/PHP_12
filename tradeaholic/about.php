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
                    User Guide
                </div>

                <div class="container">
			        <div class="wrap p-l-55 p-r-55 p-t-20 p-b-30 php" style="text-align:justify" >
                        <form class="form" action="inventory2.php" method="post" >

                            <div>
                            <p class="php-title">Como usar?</p>
                            <br><p>Tradeaohlic tem uma disposição muito simples e por isso torna-se um web site muito acessível funcionando da seguinte forma:</p>
                            <br>
                            <br><br><p class="php-title">Login:<br></p><p>No Login se tiver uma conta basta inserir o seu nome de utilizador e a sua palavra-passe e será automaticamente enviado para o seu inventário. caso não tenha conta basta clicar na hiperligação abaixo e criar a sua conta. </p>
                            <br><br><p class="php-title">Registar:<br></p><p> Caso não tenha conta a página irá servir mesmo para isso, basta inserir o nome de utilizador que deseja, a palavra-passe e confirmar a mesma, se a confirmação tiver mal escrita será informado e a conta não irá ser criada, caso esteja tudo bem  inserido a conta será criada. Se já tiver uma conta basta clicar na hiperligação abaixo e será redirecionado para o login.</p>
                            <br><br><p class="php-title">Inventário:<br></p><p> No inventário aparece os itens que foram comprados e uma pequena aba onde se pode carregar dinheiro, lembrando que o site é apenas uma simulação, não haverá qualquer despesa em adicionar fundos, basta inserir o montante.</p>
                            <br><br><p class="php-title">Vender:<br></p><p> Na parte das vendas, tal como o nome indica vendem-se os produtos, basta clicar na hiperligação e o item da mesma irá ser vendido, o dinheiro do item será retornado. Um item vendido irá ficar disponível para os outros utilizadores. </p>
                            <br><br><p class="php-title">Comprar:<br></p><p> Na parte das compras, como é claro serão efetuadas as compras dos itens, tal como nas vendas basta clicar na hiperligação e o item será comprado, em caso de dinheiro insuficiente será informado do mesmo e a compra não será efetuada. Um item comprado irá ficar indisponível para os outros utilizadores. </p>
                            <br><br><p class="php-title">Procurar:<br></p><p> Na parte das procuras, basta pesquisar pela parte do nome ou preço de um item (por exemplo: em "AK-47 | Elite Build", com o preço de 10€ será possível pesquisar apenas por "ak", "47", "Elite", "bui", "1", "10" e etc, mas não será possível de pesquisar por:" 47-ak", "Build Elite", "ka", "10 €" e etc). O programa irá apresentar os itens encontrados e poderá voltar a pesquisar se clicar em "Go Back". </p>
                            </div>

                        </form>
                    </div> 
                </div>

            </div>

        </div>
        
    </body>
</html>