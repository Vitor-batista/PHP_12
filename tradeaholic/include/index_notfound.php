<?php
    session_start();

    if(isset($_SESSION['notfound']))
        {
            echo "Account not founded";
            unset($_SESSION['notfound']);
        }
?>