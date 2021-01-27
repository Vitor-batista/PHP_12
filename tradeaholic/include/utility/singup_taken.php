<?php
    if(isset($_SESSION['user_taken']))
        {
            echo "Passwords don't match";
            unset($_SESSION['user_taken']);
        }
?>
