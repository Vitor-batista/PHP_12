<?php
	$id       = $_GET['id'];
    $name     = $_GET['name'];
    $price    = $_GET['price'];
?> 


<div class="container">
	<div class="wrap p-l-55 p-r-55 p-t-20 p-b-30">
        <form class="form" action="change3.php" method="post" >
                    
            <input type="hidden" name="id" value="<?php echo $id ?>"/>

            <span class="form-title p-b-10">
		        Name
			</span>

            <div class="wrap-input validate-input  m-b-20" data-validate="Enter username or email">
				<input class="input" type="text" name="name" value="<?php echo $name ?>" required>
				<span class="focus-input"></span>
            </div>
    
            <span class="form-title p-b-10">
				Price
			</span>

            <div class="wrap-input validate-input  m-b-20" data-validate="Enter username or email">
				<input class="input" type="text" name="price" value="<?php echo $price ?>" required>
				<span class="focus-input"></span>
            </div>

            <div class="p-t-10 container-form-btn">
				<button class="form-btn">
					Change
				</button>
			</div>
                        
        </form>
    </div> 
</div>
