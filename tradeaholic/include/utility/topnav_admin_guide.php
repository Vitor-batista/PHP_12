<?php

	require_once("conn.php");

    if(isset($_SESSION['username']))
		{
	    $user = $_SESSION['username'];
    	$pass = $_SESSION['password'];

	    if ($user == "admin" && $pass == "admin")
            {
                ?>
                    <a class="topnav-href" href="adm_guide.php">	Dev Guide      </a>  
                <?php
            }
        }
?>