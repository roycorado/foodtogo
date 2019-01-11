<?php require_once '../partials/template.php'; ?>


<?php function get_page_content() { 
	global $conn; ?>


	<div class="container">
		<div class="jumbotron bg-primary mt-3 text-center text-white">
			<h1> Register </h1>	
		</div>  <!-- end of jumbotron -->

		<form>
			<div class="row top5">
				<div class="col-md-6">
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
				
			
				<div class="col-md-6">
					<div class="form-group">
						<label for="username"> Username </label>
						<input type="text" id="username" name="username" class="form-control" placeholder="Enter your first name here">
						<span class="validation"></span>
						
					</div>
					<div class="form-group">
						<label for="password"> Password </label>
						<input type="password" id="password" name="password" placeholder="Enter your last name here" class="form-control">
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
<!-- 		<div class="row">
			<div class="col-md-6"> 
				<form id="register_form" action="../controllers/create_user.php" method="POST">
					
					<div class="form-group">
						<label> First Name </label>
						<input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter first name">
					</div>
					<div class="form-group">
						<label> Last Name </label>
						<input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter last name">
					</div>
					<div class="form-group">
						<label> Email </label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Enter email address>
					</div>
					<div class="form-group">
						<label> Address </label>
						<input type="text" name="address" id="address" class="form-control" placeholder="Enter home address">
					</div>
					<button id="loginBtn" type="button" class="btn btn-outline-dark btn-block mb-5"> Login </button>
				</form>
			</div>	
			<div class="col-md-6"> 
				<form id="login_form" action="../controllers/register_endpoint.php" method="POST">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
						<span></span>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
						<span></span>
					</div>
					<div class="form-group">
						<label for="confirm_password">Confirm Password</label>
						<input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm password">
						<span></span>
					</div>
					<button id="registerBtn" type="button" class="btn btn-outline-dark btn-block mb-5"> Register </button>
				</form>
			</div>
		</div> -->


<!-- 	<script>

		$('#registerBtn').click( () => {

		
			let errorFlag = false;
			const username = $('#username').val();

		
			if (username == 0) {
				$('#username').next().css('color', 'red');
				$('#username').next().html('this field is required');
				errorFlag = true;
			} else {
	
				$.ajax({
					url : '../controllers/check_username.php',
					method: 'post',
					data: { username : username},
					async: false 
				}).done(data => {
				console.log(Object.values(data));
				
				let fetchedData = JSON.parse(data);
				console.log(fetchedData);
					
					if (fetchedData == "meron") {
						$('#username').next().css('color', 'red');
						$('#username').next().html('username is already taken');
						errorFlag = true;
					} else {
						
						$('#username').next().css('color', 'green');
						$('#username').next().html('username available');			
					}
				});
			}

			const password = $('#password').val();
			const confirmPassword = $('#confirm_password').val();

			
			if (password.length == 0) {
				$('#password').next().css('color', 'red');
				$('#password').next().html('this field is required');
				errorFlag = true;
			} else {
				$('#password').next().html(''); 
				
				if (password !== confirmPassword) {
					$('#confirm_password').next().css('color', 'red');
					$('#confirm_password').next().html('passwords do not match');
					errorFlag = true;
				}
			}
			
			if (errorFlag == false) {
				$('#register_form').submit();
			}
			
		});

		

	</script> -->




<?php }; ?>

