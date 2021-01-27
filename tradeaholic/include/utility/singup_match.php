<?php
    if(isset($_SESSION['pass_match']))
        {
            echo "Passwords don't match";
            unset($_SESSION['pass_match']);
        }
?>