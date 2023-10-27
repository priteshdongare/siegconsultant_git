
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
                        <form class="forms-sample"  action="<?= base_url('admin/media') ?>" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Album Name </label>
                                            <input type="text" class="form-control cgno" name="album" placeholder="Album Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Add</label>
                                            <input type="file" class="form-control "   name="images[]" required id="eventbanner">
                                        </div>
                                    </div>
                                    <img src="" id="imgPreview">
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
            
            