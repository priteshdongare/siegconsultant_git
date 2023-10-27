
			<div class="main-header">
                <div class="main-content">
				<div class="container">
                    <br>
					<div class="row">
                        <div class="col-lg-12">
                        <div class="dashboard-head">
                        <h3><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;<?= $meta_title; ?></h3>
                        </div>
                        <?php if($this->session->flashdata('success')): ?>
								<div class="alert alert-success">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php elseif($this->session->flashdata('error')): ?>
								<div class="alert alert-danger">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('error'); ?>
								</div>
							<?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bg-colorformlist pt-3">
                        <div class="col-lg-12 col-md-12 col-xs-12">
                            <div class="tg-section-head"> <h4><?= $meta_title; ?></h4></div>
                       
                        </div>
                        <div class="col-lg-12">
                        <div class="panel-body ml-4">
                        <form class="forms-sample"  action="<?= base_url('admin/jobpost') ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Title Job </label>
                                            <input type="text" class="form-control cgno" name="tjob" placeholder="Title Job" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Company Name</label>
                                            <input type="text" class="form-control cname"  name="cname"  placeholder="Name" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Contact No </label>
                                            <input type="text" class="form-control cgno" name="contact" placeholder="Contact No " required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Email</label>
                                            <input type="email" class="form-control"  name="email"  placeholder="Email" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Web Site </label>
                                            <input type="text" class="form-control cgno" name="website" placeholder="Web Site " required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Experience</label>
                                            <input type="text" class="form-control"  name="experience"  placeholder="Experience" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Salary </label>
                                            <input type="text" class="form-control cgno" name="Salary" placeholder="Salary " required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">No Of Opening</label>
                                            <input type="text" class="form-control"  name="noopen"  placeholder="No Of Opening" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Country </label>
                                            <select class="form-control" name="country" id="" required>
                                                <option value="0">--Select Country--</option>
                                                <?php foreach($display as $value){  ?>
                                                    <option value="<?= $value['nicename']; ?>"><?= $value['nicename']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Gender</label>
                                            <select class="form-control" name="gender" id="" required>
                                                <option value="0">--Select Gender--</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Both">Both</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Job Posting Date</label>
                                            <input type="date" class="form-control cname"  name="jobdate"  placeholder="Name" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Job Description</label>
                                            <textarea name="jd" class="form-control" rows="5"placeholder="Job Description" required></textarea>
                                        </div>
                                    </div>
                            </div>
                    <button type="submit" class="btn btn-primary btn btn-md me-2">
                      Submit
                    </button>
    
                </form>
                </div>
                        </div>
                        </div>
                    </div>
				</div>
                <br><br>
                <!-- <script src="<?= base_url();?>assets/admin/js/admin.js"></script> -->
			</div>
            </div>
            
            