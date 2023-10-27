  <!-- Page Header Start -->
  <!--<div class="page-header">-->
  <!--              <div class="container">-->
  <!--                  <div class="row">-->
  <!--                      <div class="col-12">-->
  <!--                          <h2>Job Application</h2>-->
  <!--                      </div>-->
  <!--                  </div>-->
  <!--              </div>-->
  <!--          </div>-->
  <!-- Page Header End -->

  <style>
      .contact .contact-form {
          max-width: 600px;
          background-color: #009ee3;
          padding: 50px 35px;
          display: block;
          margin: 0 auto;
          border-radius: 5px;
      }

      .contact .contact-form button {
          /* display:block;
        margin:0 auto; */
          border-radius: 3px !important;
      }
  </style>
   <script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LfJubEkAAAAAAtoJrn8YxFcf4GW9NsU8ZVR3KMb'
        });
      };
    </script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <div class="contact wow fadeInUp">
      <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <div class="contact-form">
                      <?php if ($this->session->flashdata('success')) : ?>
                          <div class="alert alert-success">
                              <i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('success'); ?>
                          </div>
                      <?php elseif ($this->session->flashdata('error')) : ?>
                          <div class="alert alert-danger">
                              <i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('error'); ?>
                          </div>
                      <?php endif; ?>
                      <div id="success"></div>
                      <form id="contact" action="" enctype="multipart/form-data" method="post" novalidate="novalidate">

                          <div class="control-group">
                              <lable style="color:#fff;">Name :</lable> <br>
                              <input type="hidden" class="form-control" name="id" placeholder="Name" required="required" value="<?= $id; ?>" />
                              <input type="text" class="form-control" name="name" placeholder="Name" required="required" data-validation-required-message="Please enter your name" />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="control-group">
                              <lable style="color:#fff;">Contact No :</lable> <br>
                              <input type="text" class="form-control" name="contact" placeholder="Contact" required="required" data-validation-required-message="Please enter your Contact Number" />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="control-group">
                              <lable style="color:#fff;">Email :</lable> <br>
                              <input type="email" class="form-control" name="email" placeholder="Email" required="required" data-validation-required-message="Please enter your email" />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="control-group">
                              <lable style="color:#fff;">Experience :</lable> <br>
                              <input type="text" class="form-control" name="ex" placeholder="Experience" required="required" data-validation-required-message="Please enter your email" />
                              <p class="help-block text-danger"></p>
                          </div>

                          <div class="control-group">
                              <lable style="color:#fff;">Resume :</lable> <br>
                              <input type="file" class="form-control" name="resume" />
                              <p class="help-block text-danger"></p>
                          </div><br>
                          <div class="control-group">
                          <div class="g-recaptcha" data-sitekey="6LfJubEkAAAAAAtoJrn8YxFcf4GW9NsU8ZVR3KMb"></div>
                          </div><br>


                          <div>
                              <button class="btn" type="submit" id="sendMessageButton">Apply</button>
                          </div>
                      </form>
                  </div>
              </div>

          </div>
      </div>
  </div>


  <!-- <script>
     
          grecaptcha.ready(function() {
            var action = "<?= base_url(); ?>user/applynow";
              grecaptcha.execute('6LcZm7EkAAAAAC4Zemh86agZpJVuuiXMGYJ_LYmi', {
                  action: 'submit'
              }).then(function(token) {
                  var token_send = document.getElementById('token_genrate');
                  token_send.value = token;
              });
          });
  </script> -->