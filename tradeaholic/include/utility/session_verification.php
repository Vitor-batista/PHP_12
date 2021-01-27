<div class="text-center">

    <?php

        if(!isset($_SESSION['username']))
            {
                ?>
                    <div class="php p-b-10 p-t-10">
                        Not logged in
                    </div>
                    <a class="href p-t-10" href="index.php">Go login</a>
                <?php 

                exit;   //Pára a execução do programa 
            }  

    ?>

</div>