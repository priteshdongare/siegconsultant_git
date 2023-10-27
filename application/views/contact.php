  <!-- Page Header Start -->
  <div class="page-header contact-us">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                        
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <!--<p></p>-->
                        <h2 style="text-align:center;">Get In Touch</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Head Office</h2>
                                        <p>Unit No. 508, 5th Floor,<br> Opposite Gundecha Oncalve,<br>Kherani Road, Near Sakinaka Metro Station<br>
Andheri (East), Mumbai<br>
Maharashtra, India - 400072</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+91 22 66655666</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p>admin@siegconsultant.in </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                            <?php if($this->session->flashdata('success')): ?>
								<div class="alert alert-success">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php elseif($this->session->flashdata('error')): ?>
								<div class="alert alert-danger">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('error'); ?>
								</div>
							<?php endif; ?>
                                <div id="success"></div>
								  <form id="contact" action="<?= base_url(); ?>user/contactsubmit" method="post" novalidate="novalidate">
                              
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
									 <div class="control-group">
                                        <input type="text" class="form-control" name="contact" placeholder="Your Contact Number" required="required" data-validation-required-message="Please enter your Contact Number" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                   <div class="form-group captcha">

                            			<?php echo $captcha_image;?><input type="text" name="captcha" class="form-control" placeholder="Enter Captcha Text" required> 
                            		</div>
                    
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
						
                    </div>		
                </div>	 
            </div>
			
	<style>.captcha input{width:50%;margin-top:10px;}</style>
            <!-- Contact End -->
    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.0410942785124!2d72.88787391437727!3d19.10585305599944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9a8034c27bf%3A0xabb530d3ef45122!2sSIEG%20CONSULTANT%20MUMBAI!5e0!3m2!1sen!2sin!4v1645859147882!5m2!1sen!2sin" width="100%" height="500px" style="border:0;" frameborder="0"></iframe>

    </div>

