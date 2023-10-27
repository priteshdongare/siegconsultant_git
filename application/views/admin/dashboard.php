
			<div class="main-header">
                <div class="main-content">
				<div class="container">
                    <br>
					<div class="row">
                        <div class="col-lg-12">
                        <div class="dashboard-head">
                        <h3><i class="fa fa-tachometer" aria-hidden="true"></i></i>&nbsp;Dashboard</h3>
                        </div>
                        <br>
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
                    <br>
                    <div class="row">
                    <div class="col-lg-4 col-md-4">
                          <div class="parent-sec">
                              <div class="icon-sec bg-info"><i class="fa fa-user" aria-hidden="true"></i></div>
                              <div class="content-sec"><h2> <b>Contact</b></h2></div>
                              <div class="content-heading"><p class="pl-4 mb-0"></p>
                              <h3 class="text-center"><b><?php  foreach($cust2 as $cout2){ echo $cout2['counts2'];} ?></b></h3></div>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                          <div class="parent-sec">
                              <div class="icon-sec bg-success"><i class="fa fa-user" aria-hidden="true"></i></div>
                              <div class="content-sec"><h2> <b>Total Job</b></h2></div>
                              <div class="content-heading"><p class="pl-4 mb-0"></p><h3 class="text-center"><b><?php foreach($cust as $cout){ echo $cout['counts'];} ?></b></h3></div>
                          </div>
                      </div>

                      <div class="col-lg-4 col-md-4">
                          <div class="parent-sec">
                              <div class="icon-sec bg-primary"><i class="fa fa-user" aria-hidden="true"></i></div>
                              <div class="content-sec"> <h2> <b>Applicaions</b></h2></div>
                              <div class="content-heading"><p class="pl-4 mb-0"></p><h3 class="text-center"><b><?php  foreach($cust1 as $cout1){ echo $cout1['counts1'];} ?></b></h3></div>
                          </div>
                      </div>

                    </div>
                   <br>
                   
                    </div>
				</div>
			</div>
            </div>
            
            