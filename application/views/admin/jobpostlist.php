
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
                        <div class="panel-body">
                      
                  <table class="table table-striped table-bordered table-hover table-full-width" id="myTable">
                  
                  <thead>
                      <tr>
                        <th>Sr No.</th>
                        <th>Job Title</th>
                        <th>Country</th>
                        <th>Company Name</th>
                        <th>Salary</th>
                        <th>Experience</th>
                        <th>No Of Opening</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      if(!empty($list)){
                      foreach($list as $key=>$seller): ?>
                        <tr>
                          <td><?= ++$key?></td>
                          <td><?php echo $seller['tjob']; ?></td>
                          <td><?php echo $seller['country']; ?></td>
                          <td><?php echo $seller['cname']; ?></td>
                          <td><?php echo $seller['Salary']; ?></td>
                          <td><?php echo $seller['experience']; ?></td>
                          <td><?php echo $seller['noopen']; ?></td>
                          
                      <td>
                       <?php if(! $seller['enable']==1){?>
                      <div class="btn-group">
                              <a href="<?php echo base_url(); ?>admin/Enable/<?php echo $seller['id']; ?>" class="btn btn-primary btn-sm">
                              Enable
                              </a>
                              </div>
                              <?php }else{ ?>
                            <div class="btn-group">
                              <a href="<?php echo base_url(); ?>admin/Disabled/<?php echo $seller['id']; ?>" class="btn btn-info btn-sm">
                              Disabled
                              </a>
                            </div>
                            <?php } ?>
                          
                           
                            <!-- <div class="btn-group">
                            <a href="<?php echo base_url(); ?>admin/customerdelete/<?php echo $seller['id']; ?>" class="btn btn-danger btn-sm">
                              Delete
                              </a>
                            </div> -->
                          </td>
                        </tr>
                        <?php endforeach; 
                       }else{
                       ?> 
                       <tr>
                         <td colspan="6" class="text-center"> <span class="text-danger">No Data Found</span></td>
                       </tr>
                       <?php } ?>
                    </tbody>
                  </table>
                </div>
                        </div>
                        </div>
                    </div>
				</div>
			</div>
            </div>
            
            