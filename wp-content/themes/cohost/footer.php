
<?php
$emailAddr = $fullName = $address = $phone = $message = '';
	//phpmailer 
	require 'vendor/autoload.php';
	use PHPMailer\PHPMailer\PHPMailer;

	if($_POST['submitForm']) {
		
		$message = $_POST['message'];
		$fullName = $_POST['fullName']; 
		$emailAddr = $_POST['emailAddr'];
		$address = $_POST['address'];
		$phone = $_POST['phone']; 

		if($_POST['url'])  //website field is honeypot for scammers
			exit; 
 
		$error = preg_match('/\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i', $emailAddr) ? '' : 'Invalid email address';

		if(!$phone || !$address) {
			$error = 'You must fill out phone and address'; 
		}

		if(!strpos($address, ' ')) { //check address
			$error = 'Invalid street address'; 
		}

		
	if(!$error) {
		$emailSubject = "KaibaCorp Vacation Rentals: We Received Your Inquiry";
		$emailContent = "KaibaCorp Vacation Rentals has received your email. We will contact you as soon as possible. 

Full Name: ".$fullName."
Email: ".$emailAddr."
Address: ".$address."
Phone #: ".$phone."
Message: ".$message." 

-----------------------------
Benjamin Louie
Property Manager
Airbnb Host & STR Manager
https://vacationrentals4ny.com
-----------------------------";
				
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host = $smtpHost; 
		$mail->Port = $smtpPort;
		$mail->SMTPAuth = true; 
		$mail->Username = $smtpUsername; 
		$mail->Password = $smtpPassword;
		$mail->setFrom($smtpUsername, 'Benjamin');
		$mail->addReplyTo($smtpUsername, 'Benjamin');
		$mail->addAddress($email, $name);
		$mail->Subject = $emailSubject;
		$mail->Body = $emailContent; 

		if (!$mail->send()) {
			$error =  'Mail was not sent to due error: ' . $mail->ErrorInfo;
		} else {
			$error = 'Your message has been sent to the admin and we will get back to you shortly.';
		}

		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->SMTPDebug = 0;
		$mail->Host = $smtpHost; 
		$mail->Port = $smtpPort;
		$mail->SMTPAuth = true;
		$mail->Username = $smtpUsername; 
		$mail->Password = $smtpPassword;
		$mail->setFrom($smtpUsername, 'Benjamin');
		$mail->addReplyTo($smtpUsername, 'Benjamin');
		$mail->addAddress($adminEmail, 'Admin'); 
		$mail->Subject = $emailSubject;
		$mail->Body = $emailContent; 

		if (!$mail->send()) {
			$error = 'Mail was not sent to due error: ' . $mail->ErrorInfo;
		} else {
			$error = 'Your message has been sent to the admin and we will get back to you shortly.';
		} 

	}
	$error = '<div class="confirm">'.$error.'</div>';
}

?>

				<section id="upsell">
					<div class="inner">
					
						<p><span class="image left"><img src="<?=$theme_uri?>images/superhost1.jpg" alt="<?=$alt?>" width="unset" /></span>Below, you can contact us by phone or email about our rentals, tours, co-hosting service, or property management services. Once again, thank you for the opportunity to do business in the future!</p>

						<section style="clear: both;"></section>
								
					</div>
				</section>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="./#contact">

									<?=$error?>

									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="fullName" id="fullName" value="<?=$fullName?>" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="emailAddr" id="emailAddr" value="<?=$emailAddr?>" />
										</div>
										<div class="field half">
											<label for="address">Full Address</label>
											<input type="text" name="address" id="address" value="<?=$address?>" />
										</div>
										<div class="field half">
											<label for="phone">Phone #</label>
											<input type="text" size="25" name="phone" id="phone" value="<?=$phone?>" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6" value="<?=$message?>"></textarea>
											<input type="hidden" name="url" id="url" />
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" name="submitForm"  class="primary" /></li>
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
										<span>570-232-3714</span>
									</div>
								</section>
								<section> 
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>Sheepshead Bay, NY<br />
										East Orange, NJ<br />
										</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
						<ul class="icons">
								<li><a href="https://www.instagram.com/benjaminsbook/" class="icon brands alt fa-instagram" target="_BLANK"><span class="label">Instagram</span></a></li>
								<li><a href="https://g.page/r/CeCXZ7bTpIKrEAI" class="icon brands alt fa-google" target="_BLANK"><span class="label">Google</span></a></li>

								<li><a href="./blog/" class="icon brands alt fa-blogger" target="_BLANK"><span class="label">Blog</span></a></li>
								<li><a href="https://nypost.com/2024/03/16/us-news/landlords-whose-families-fled-communism-rip-ny-dems/" class="icon brands alt fa-delicious" target="_BLANK"><span class="label">LinkedIn</span></a></li>
							</ul>

							<ul class="copyright">
								<li>KaibaCorp Vacation Rentals &copy; <?=date('Y')?> </li><li>Design: <a href="https://benjaminlouie.com" target="_BLANK">BL Web Solutions</a></li>
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