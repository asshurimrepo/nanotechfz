<?php
	require 'PHPMailerAutoload.php';

	if( empty( $_POST['token'] ) ){
		echo '<span class="notice">Error!</span>';
		exit;
	}
	if( $_POST['token'] != 'FsWga4&@f6aw' ){
		echo '<span class="notice">Error!</span>';
		exit;
	}

	$name = $_POST['name'];
	$from = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$message = stripslashes( nl2br( $_POST['message'] ) );
	$subject = 'NanotechFZ Contact Form - New message received from '.ucfirst( $name );


	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'powerlogic1992@gmail.com';                 // SMTP username
	$mail->Password = '8z1v_B1iJCK4D36e0AfEGQ';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->addReplyTo($from, ucfirst( $name ));

	$to = 'powerlogic1992@gmail.com';


	$mail->From = $to;
	$mail->FromName = 'NanotechFZ Contact Form';
	$mail->addAddress( $to, 'NanotechFZ');     // Add a recipient

	// Message Body
	ob_start();
	?>
		Hi NanotechFZ!

		<?php echo ucfirst( $name ); ?>  has sent you a message via contact form on your website!


		Name: <?php echo ucfirst( $name ); ?>

		Email: <?php echo $from; ?>

		Company: <?php echo $company; ?>

		Phone: <?php echo $phone; ?>

		Adress: <?php echo $address; ?>

		Message:


		<?php echo $message; ?>


	<?php
	$body = ob_get_contents();
	ob_end_clean();

	$mail->Subject = $subject;
	$mail->Body    = $body;

	if(!$mail->send()) {
		echo '<div>Your message sending failed!</div>';
	} else {
		echo '<div class="success"><i class="fa fa-check-circle"></i><h3>Thank You!</h3>Your message has been sent successfully.</div>';
	}
?>
