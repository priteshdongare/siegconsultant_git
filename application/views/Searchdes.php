
<style>
    .section{
        width:100%;
        padding:30px 40px;
        border:1px solid #BCC6CC;
        border-radius:5px;
        /* box-shadow:1px 1px 10px grey; */
        margin-bottom:10px;
    }
    .section{
        padding:30px 40px;
        border:1px solid #BCC6CC;
        border-radius:5px;
        margin-bottom:30px;
    }
    .section a h6{
        color:grey;
    }
</style><br>
<br>
<div class="container">
    <div class="row align-items-center">
        <div class="section">
           <?php if($this->session->flashdata('success')): ?>
								<div class="alert alert-success">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('success'); ?>
								</div>
							<?php elseif($this->session->flashdata('error')): ?>
								<div class="alert alert-danger">
									<i class="fa fa-remove-sign"></i><?php echo $this->session->flashdata('error'); ?>
								</div>
							<?php endif; ?>
            <h5><?php echo $display['tjob']; ?></h5> 
            <span><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp; <?php echo $display['experience']; ?></span><br>
            <span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <?php echo $display['country']; ?></span><br>
            <span>&#36;  <?php echo $display['Salary']; ?></span> <br>
            <small>Posted : <?php $date=date_create($display['jobdate']); echo date_format($date,"d-m-Y");  ?></small> <br>
            <small>Openings : <?php echo $display['noopen']; ?></small> <br> <br>
            <a href="<?= base_url();?>user/applynow/<?php echo $display['id']; ?>" class="btn btn-primary btn btn-sm">Apply Now</a>
    <br><br>
           <h5>Job Description : </h5>
            <p><?php echo $display['jd']; ?></p>
        </div>
</div>

</div>
<br>