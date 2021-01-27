<div class="topnav">

	<div class="topnav2">

		<div class="topnav-title">    
			Tradeaholic 
		</div>

		<div class="topnav-cont" >
			
   		 	<a class="topnav-href" href="inventory.php">Inventory 	</a>
 			<a class="topnav-href" href="sell.php">		Sell   	    </a>
    		<a class="topnav-href" href="buy.php">		Buy    	    </a>
			<a class="topnav-href" href="search.php">	Search      </a>
		
			<?php
				require_once("topnav_change.php");	//Se tiver em admin aparece o change
			?>
			
			<a class="topnav-href" href="about.php">About 	</a>

		</div>

		<div class="topnav-info" >
			<?php
				require_once("account.php");	//Para mostrar o nome e o guito
			?>
		</div>

	</div>	
</div>