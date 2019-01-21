<nav class="navbar navbar-default navbar-expand-lg ">
		<a class="navbar-brand" href="#">
			<i <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" 		    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 		    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>></i> Food-2-Go
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="navbar-nav" class="collapse navbar-collapse">
			<ul class="navbar-nav ml-auto">
				<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user'])) && ($_SESSION['user']['roles_id'] ==2)) {
					?>
				
				<li class="nav-item">
					<a class="nav-link" href="./home.php"> Home </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="./catalog.php"> Catalog </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="../views/cart.php"> Cart <span class="badge bg-light text-dark" id="cart-count"> 
						<?php
							if(isset($_SESSION['cart'])) {
								echo array_sum($_SESSION['cart']);
							} else {
								echo 0;
							}
						?> 


					</span> </a>
				</li>

			<?php } elseif(isset($_SESSION['user']) && ($_SESSION['user']['roles_id']==1)) { ?>
				<li class="nav-item">
					<a href="./items.php" class="nav-link"> Items </a>
				</li>
				<li class="nav-item">
					<a href="./users.php" class="nav-link"> Users </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="./orders.php"> Orders </a>
				</li>
			<?php }; ?>

				<?php if(isset($_SESSION['user'])) { ?>

				<li class="nav-item">
					<a class="nav-link" href="./profile.php"> Welcome, <?php echo $_SESSION['user']['firstname']; ?> </a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="../controllers/logout.php"> Logout </a>
				</li>

				<?php } else { ?>

				<li class="nav-item">
					<a class="nav-link" href="./login.php"> Login </a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="./register.php"> Register </a>
				</li>

				<?php }; ?>


			</ul>
		</div> <!-- end navbar nav -->
	</nav> <!-- end nav -->
