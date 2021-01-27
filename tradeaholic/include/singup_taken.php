<?php

    if(isset($_SESSION['user_taken']))
        {
            echo "Username already taken";
            unset($_SESSION['user_taken']);
        }
?>
