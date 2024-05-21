<?php include('head.php'); include('menu.php');?>
	<!-- Title Bar -->
	<div class="pbmit-title-bar-wrapper">
		<div class="container">
			<div class="pbmit-title-bar-content">
				<div class="pbmit-title-bar-content-inner">
					<div class="pbmit-tbar">
						<div class="pbmit-tbar-inner container">
							<h1 class="pbmit-tbar-title"> Contact</h1> </div>
					</div>
					<div class="pbmit-breadcrumb">
						<div class="pbmit-breadcrumb-inner"> <span>
								<a title="Go to Home Demo 1." href="index.php" class="home">
								<span>Home</span> </a>
							</span> <span class="sep">
								<i class="pbmit-base-icon-angle-double-right"></i>
							</span> <span>
								<span class="post post-page current-item"> Contact Us</span> </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Title Bar End-->

		<!-- Contact -->
			<section class="section-md contact-us_section">
				<div class="container">
					<div class="row"> 
						<div class="col-md-4"> 
							<div class="pbmit-ihbox pbmit-ihbox-style-11">
						<div class="pbmit-ihbox-icon">
									   <div class="pbmit-ihbox-icon-wrapper">
										<i class="pbmit-leblix-icon pbmit-leblix-icon-location"></i>
									</div>
								</div>
								<div class="pbmit-ihbox-contents">
									   <h2 class="pbmit-element-title">
										Our Location
									   </h2>
									   <div class="pbmit-heading-desc">Post Box No-4300, Atlas Office, Kingdom of Saudi Arabia</div>
								</div>
							</div>
						</div>
						<div class="col-md-4"> 
							<div class="pbmit-ihbox pbmit-ihbox-style-11">
									<div class="pbmit-ihbox-icon">
									   <div class="pbmit-ihbox-icon-wrapper">
										<i class="pbmit-leblix-icon pbmit-leblix-icon-mail"></i>
									</div>
								</div>
								<div class="pbmit-ihbox-contents">
									   <h2 class="pbmit-element-title">
										Email Address
									   </h2>
									   <div class="pbmit-heading-desc">info@atlasaljubail.com</div>
								</div>
							</div>
						</div>
						<div class="col-md-4"> 
							<div class="pbmit-ihbox pbmit-ihbox-style-11">
										<div class="pbmit-ihbox-icon">
									   <div class="pbmit-ihbox-icon-wrapper">
										<i class="pbmit-leblix-icon pbmit-leblix-icon-telephone"></i>
									</div>
								</div>
								<div class="pbmit-ihbox-contents">
									   <h2 class="pbmit-element-title">
										Phone Number
									   </h2>
									   <div class="pbmit-heading-desc">+966 13 356 0030</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="iframe-section contact-us-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7456527.090370523!2d39.782522513240956!3d24.140768869111664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi%20Arabia!5e0!3m2!1sen!2sin!4v1714026773016!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</section>
			<!-- Contact End -->
			
			<!-- From Start --> 
			<section class="from-section_contact-us">
				<div class="container">
					<div class="connect-us-from">
						<div class="row align-items-center">
							<div class="pbmit-heading-subheading text-center">
								<h4 class="pbmit-subtitle">Send us message</h4>
								<h2 class="pbmit-title">Have any question let’s <br>started talk</h2>
							</div>
						<form action="#" id="contact-form"  class="contact-form" method="POST">
								<?php 
                                                    if(isset($_POST['submit'])){  
                                                        $s_fname = $_POST['name'];
                                                        $s_email = $_POST['email'];
														$number = $_POST['number'];
                                                        $s_subject1 = $_POST['subject'];
                                                        $s_comment = $_POST['message'];
                                                                            
                                                        $s_to = 'info@atlasaljubail.com';

                                                        $s_subject = 'Contact form from Atlas Al Saudi Company ';

                                                        $headers = "From: " .$s_email. "\r\n";
                                                        $headers .= "MIME-Version: 1.0\r\n";
                                                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                                                        $message = '<html><body>';
                                                        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                                                        $message .= "<tr style='background: #eee;'><td><strong>Name :</strong> </td><td>" . $s_fname . "</td></tr>";
                                                        $message .= "<tr><td><strong>Email :</strong> </td><td>" . $s_email . "</td></tr>";
                                                        $message .= "<tr><td><strong>Subject :</strong> </td><td>" . $s_subject1 . "</td></tr>";
                                                        $message .= "<tr><td><strong>Message :</strong> </td><td>" . $s_comment . "</td></tr>";
                                                        
                                                                                                                        
                                                        $message .= "</table>";
                                                        $message .= "</body></html>";
                                                        if (mail($s_to, $s_subject, $message, $headers)){
                                                            echo 'Thank you for getting in touch, we will get back to you on it shortly.';
                                                        }else{
                                                            echo 'Message not sent successfully';
                                                        }
                                                    }
                                                                            
                                                ?>
				
				
								<div class="row"> 
									<div class="col-sm-6">
										<input type="text" name="name" class="form-control" placeholder="Your Name" required="">
									</div>
									<div class="col-sm-6">
										<input type="email" name="email" class="form-control" placeholder="Email address" required="">
									</div>
									<div class="col-sm-6">
										<input type="text" name="number" class="form-control" placeholder="Phone Number" required="">
									</div>
									<div class="col-sm-6">
										<input type="text" name="subject" class="form-control" placeholder="subject" required="">
									</div>
									<div class="col-md-12">
										<textarea name="message" cols="40" rows="4" class="form-control" placeholder="Write here message" required></textarea>
									</div>
									<div class="col-md-12">
										<button class="pbmit-btn text-center" name="submit">
											<i class="form-btn-loader fa fa-circle-o-notch fa-spin fa-fw margin-bottom d-none"></i>
											<span class="pbmit-button-text" >Send Us Message</span>
										</button>
									</div>
									<div class="col-md-12 col-lg-12 message-status"></div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- From End --> 
		<?php include('footer.php');?>