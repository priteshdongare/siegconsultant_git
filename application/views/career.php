<!-- Page Header Start -->
<div class="page-header career">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Work With Us</h2>
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
                    
                        <h2 style="text-align:center;">Apply For Job</h2>
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
                                <div id="success"></div>
                                  <?php if($this->session->flashdata('success')): ?>
								<div class="alert alert-success">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php elseif($this->session->flashdata('error')): ?>
								<div class="alert alert-danger">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('error'); ?>
								</div>
							<?php endif; ?>
								  <form  action="<?= base_url();?>user/careersubmit" method="post" enctype="multipart/form-data" novalidate="novalidate">
                              
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
                                        <input type="file" class="form-control" id="file" name="resume" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <img src="" id="img_preview" alt="">
                                     <!-- <div class="form-group captcha">

                            			<?php echo $captcha_image2;?> <input type="text" name="captcha" class="form-control" placeholder="Enter Captcha Text" required style="margin-top:10px;"> 
                            		</div> -->
                                    <div>
                                        <button class="btn" type="submit" name="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
						
                    </div>		
                </div>	 
            </div>
			
     