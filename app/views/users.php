<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
if(isset($_SESSION['user']) && $_SESSION['user']['roles_id'] == 1) {
global $conn;
?>

	<div class="container py-4 my-4">
		<h4 class="text-center pb-4"> <strong> User Admin Page </strong></h4>
		<div class="row">
			<div class="col-sm-10  offset-sm-1">
				<table class="table table-responsive table-striped table-dark pl-5">
					<thead>
						<tr class="text-center">
							<th> Username </th>
							<th colspan="2"> First Name </th>
							<th colspan="2"> Last Name </th>
							<th> Email </th>
							<th> Role </th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						<?php
						$get_user_detail_query = "SELECT u.id, u.username, u.firstname, u.lastname, u.email, r.name AS role FROM users u JOIN roles r ON (u.roles_id = r.id);";
						$user_details = mysqli_query($conn, $get_user_detail_query);
						foreach ($user_details as $indiV_user) {
							// var_export($indiV_user);
						?>
						<tr>
							<td> <?php echo $indiV_user['username']; ?> </td>
							<td colspan="2"> <?php echo $indiV_user['firstname']; ?> </td>
							<td colspan="2"> <?php echo $indiV_user['lastname']; ?> </td>
							<td> <?php echo $indiV_user['email']; ?> </td>
							<td> <?php echo $indiV_user['role']; ?> </td>
							<td>
								<?php
								$id = $indiV_user['id'];
								if($indiV_user['role'] =="admin") {
						 			echo "<a href='../controllers/grant_admin.php?id=$id' class='btn btn-danger'> Revoke Admin </a>";
						 		}  else {
					 				echo "<a href='../controllers/grant_admin.php?id=$id' class='btn btn-primary'> Make Admin </a>";
						 		}


								?>
							</td>
						</tr>
						<?php }; ?>
					</tbody>
				</table>
			</div> <!-- end cols -->			
		</div> <!-- end row -->		
	</div> <!-- end container -->




<?php } else {
	header('Location: ./error.php');
}
?>

<?php } ?>
