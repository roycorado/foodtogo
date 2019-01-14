<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() { 
	global $conn; ?>


	<div class="container">
		<div class="jumbotron bg-primary mt-3 text-center text-white">
			<h1> Register </h1>	
		</div>  <!-- end of jumbotron -->

		<form>
			<div class="row top5">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="firstname"> First Name</label>
						<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter your first name here">
						<span class="validation"></span>
						
					</div>
					<div class="form-group">
						<label for="lastname"> Last Name </label>
						<input type="text" id="lastname" name="lastname" placeholder="Enter your last name here" class="form-control">
						<span class="validation"></span>
						
					</div>
					<div class="form-group">
						<label for="email"> Email </label>
						<input type="email" id="email" name="email" placeholder="Enter your email here" class="form-control">
						<span class="validation"></span>
						
					</div>
					<div class="form-group">
						<label for="address"> Address </label>
						<input type="text" id="address" name="address" placeholder="Enter your address here" class="form-control">
						<span class="validation"></span>
						
					</div>
					
				</div> <!-- end of left side -->
				
			
				<div class="col-sm-6">
					<div class="form-group">
						<label for="username"> Username </label>
						<input type="text" id="username" name="username" class="form-control" placeholder="Enter your username here">
						<span class="validation"></span>
						
					</div>
					<div class="form-group">
						<label for="password"> Password </label>
						<input type="password" id="password" name="password" placeholder="Enter your password here" class="form-control">
						<span class="validation"></span>
						
					</div>	
					
					<div class="form-group">
						<label for="confirm_password"> Confirm Password </label>
						<input type="password" id="confirm_password" name="confirm_password" placeholder="Confrim password" class="form-control">
						<span class="validation"></span>
						
					</div>

										
				</div> <!-- end of right side -->
			</div> <!-- end of row -->
		</form> <!-- end of form -->
		<div class="text-center py-4 mb-5">
			<a href="./login.php" class="btn btn-secondary"> Login </a>		
			<button id="add_user" type="button" class="btn btn-primary"> Register </button>
		</div>
	</div> <!-- end of container -->




<?php } ?>

