<?php

session_start();
require_once './connect.php';

function generate_new_transaction_number() {
	$ref_number = '';

	$source = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F');

	for($i = 0; $i < 16; $i++) {
		$index = rand(0,15);  //generates a random number from 0-15

		//append random character
		$ref_number .= $source[$index];

	}

	$today = getdate();
	return $ref_number.'-'.$today[0]; //seconds since Unix Epoc

}

	//get all teh details of the order
	$user_id = $_SESSION['user']['id'];
	$purchase_date = date("Y-m-d G:i:s"); // G is for 12 hr format, i minutes with leading zeros, s seconds with leading zeros

	$status_id = 1;
	$payment_mode_id = 1;
	$address = $_POST['addressLine1'];
	$transaction_number = generate_new_transaction_number();

	//create a new order
	$sql = "INSERT INTO orders(user_id, transaction_code, purchase_date, status_id, payment_mode_id) VALUES ('$user_id', '$transaction_number', '$purchase_date', '$status_id', '$payment_mode_id'); ";

	$result = mysqli_query($conn, $sql);

	$new_order_id = mysqli_insert_id($conn);


	//If order was created
	if($result) {

		foreach ($_SESSION['cart'] as $item_id => $qty) {
			$sql = "SELECT price FROM items WHERE id ='$item_id'";
			$result = mysqli_query($conn, $sql);

			//fecth the data from query
			$item = mysqli_fetch_assoc($result);

			//create a new order item
			$sql = "INSERT INTO order_items (order_id, item_id, quantity, price) VALUES ('$new_order_id', '$item_id', '$qty', '".$item['price']." ')";

			$result = mysqli_query($conn, $sql);


		}
	}


	//clear items from cart
	// $_SESSION['cart'] = [];

	// $_SESSION['new_txn_number' ] = $transaction_number;
	// header('Location: ../views/confirmation.php');

	// mysqli_close($conn);

//clear items from cart
$_SESSION['cart'] = [];

// Send email notification to customer
// ==============================================================================
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

$mail = new PHPMailer(true); 
// Passing `true` enables exceptions

$staff_email = 'worldofsweetsroycorado@gmail.com';
$customer_email = $_SESSION['user']['email'];          //
$subject = 'World of Sweets - Order Confirmation';
$body = '<div> <h1> Thank you for ordering from World of Sweets </h1> <h3> Your order has shipped and will arrive shortly. </h3> </div><div style="text-transform:uppercase;"><h3>Reference No.: '.$transaction_number.'</h3></div>'."<div>Ship to $address</div><div><br><br><small>Please do not respond to this email as it is an auto generated, contact our customer service.</small></div>";
try {
    //Server settings
    $mail->SMTPDebug = 4;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $staff_email;                       // SMTP username
    $mail->Password = 'Roy1204#';                     // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($staff_email, 'Qstore');
    $mail->addAddress($customer_email);  // Name is optional

    //Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Route user to confirmation page
    $_SESSION['new_txn_number'] = $transaction_number;
    header('location: ../views/confirmation.php');

    $mail->send();
    // echo 'Message has been sent';

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}



	mysqli_close($conn);


?>