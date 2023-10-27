

<div class="main-header">
                <div class="main-content">
				<div class="container">
           <br>
           <div class="center-n">
        <h3>Change Password</h3>
        <hr>
        <?php if($this->session->flashdata('success')) { ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('success')?>
            </div>
        <?php } ?>
        <?php if($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error')?>
            </div>
        <?php } ?>
    <form role="form" class="form-horizontal changePasswordForm" method="post" action="<?=base_url();?>admin/changepass">
        <div class="col-sm-12 col-md-12">
            <div class="form-horizontal">
                <div class="form-group" style="margin-bottom: 5px;">
                    <div class="col-sm-8">
                        <div class="input-group">
                        <span class="input-group-text">Current Password: </span>
                            <input type="password" name="current_password" class="form-control" id="Current" style="padding: 10px;" required placeholder="Current Password">
                            <span class="input-group-text"><i class="fa fa-eye" aria-hidden="true" onclick="showpass('Current')"></i></span>
                        </div>

                    </div>
                </div>
                                                <div class="form-group" style="margin-bottom: 5px;">
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text">New Password : </span>
                            <input type="password" name="new_password" class="form-control new_password" id="newpass" style="padding: 10px;" required placeholder="New Password">
                            <span class="input-group-text"><i class="fa fa-eye" aria-hidden="true" onclick="showpass('newpass')"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px;">
                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-text">Confirm Password:</span>
                            <input type="password" name="confirm_password" class="form-control" id="Confirm" style="padding: 10px;" required placeholder="Confirm Password">
                            <i class="fa fa-check check-green" aria-hidden="true"></i>
                            <i class="fa fa-times check-red" aria-hidden="true"></i>
                            <span class="input-group-text"><i class="fa fa-eye" aria-hidden="true" onclick="showpass('Confirm')"></i></span>
                        </div>
                        <br><span id='message'></span>
                    </div>
                </div>
                <br>                 
                <div class="col-sm-6">
                    <div class="form-group">
                        <button class="btn btn-primary" name="submit" type="submit">
                            Save Details
                        </button>
                    </div>
                </div>
               
            </div>
        </div>
        </form>
    </div>
            </div>
       </div>
    </div>