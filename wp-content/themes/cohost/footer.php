<section id="neighborhood">
					
                <div class="inner">
						
                    <p>Below, you can contact us by phone or email about our rentals, tours, co-hosting service, or property management services. Once again, thank you for the opportunity to do business in the future!</p>
							
                </div>
            </section>

<?php
   error_reporting(E_ALL);
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;

	if($_POST['email']) {


	
		$error = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $_POST['email']) ? '' : 'INVALID EMAIL ADDRESS';

		$message = $_POST['message'];
		$name = $_POST['name']; 
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone = $_POST['phone']; 
		
	if(!$error) {
		$headers = "From: ".$adminEmail."\n";  //$adminEmail defined in header.php

		$emailSubject = "Vacation Rentals: Your Message Was Received";
		$emailContent = "You have sent a message to Vacation Rentals. The contents
of the message are the following:
				
		Full Name: ".$name."
		Email: ".$email."
		Address: ".$address."
		Phone #: ".$phone."
		Message: ".$message."";
				

		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.hostinger.com'; 
		$mail->Port = 587;
		$mail->SMTPAuth = true; 
		$mail->Username = $smtpUsername; 
		$mail->Password = $smtpPassword;
		$mail->setFrom('info@vacationrentals4ny.com', 'Benjamin');
		$mail->addReplyTo('info@vacationrentals4ny.com', 'Benjamin');
		$mail->addAddress($email, 'Receiver Name');
		$mail->Subject = 'Client EMail';
		$mail->msgHTML(file_get_contents('message.html'), __DIR__);
		$mail->Body = 'This is just a plain text message body'; 

		if (!$mail->send()) {
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'The email message was sent.';
		}


		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.hostinger.com';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->Username = 'info@vacationrentals4ny.com';
		$mail->Password = 'DDDddd444$$$';
		$mail->setFrom('info@vacationrentals4ny.com', 'Your Name');
		$mail->addReplyTo('info@vacationrentals4ny.com', 'Your Name');
		$mail->addAddress($adminEmail, 'Admin Name');
		$mail->Subject = 'Admin Email';
		$mail->msgHTML(file_get_contents('message.html'), __DIR__);
		$mail->Body = 'This is just a plain text message body'; 

		if (!$mail->send()) {
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'The email message was sent.';
		}

		 
	}
}

?>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="./#contact">
									<div><?=$error?></div>
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										 
										<div class="field half">
											<label for="address">Address</label>
											<input type="text" name="address" id="address" />
										</div>
										<div class="field half">
											<label for="phone">Phone #</label>
											<input type="text" size="25" name="phone" id="phone" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="mailto:<?=$adminEmail?>"><?=$adminEmail?></a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>347-389-4994</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Sheepshead Bay, NY<br />
										Salisbury, NC<br />
										</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
						
							<ul class="copyright">
								<li>KaibaCorp Vacation Rentals & Tours &copy; <?=date('Y')?> </li><li>Design: <a href="https://benjaminlouie.com" target="_BLANK">BL Web Solutions</a></li>
							</ul>
						</div>
					</footer>
			</div>

		<!-- Scripts -->
			<script src="<?=$theme_uri?>assets/js/jquery.min.js"></script>
			<script src="<?=$theme_uri?>assets/js/jquery.scrolly.min.js"></script>
			<script src="<?=$theme_uri?>assets/js/jquery.scrollex.min.js"></script>
			<script src="<?=$theme_uri?>assets/js/browser.min.js"></script>
			<script src="<?=$theme_uri?>assets/js/breakpoints.min.js"></script>
			<script src="<?=$theme_uri?>assets/js/util.js"></script>
			<script src="<?=$theme_uri?>assets/js/main.js"></script>
			<script src="<?=$theme_uri?>assets/js/mouse.js"></script>

	</body>
</html>