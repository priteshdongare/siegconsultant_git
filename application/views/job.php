 <!-- Page Header Start -->
 <div class="page-header job">
                <div class="container">
                    <div class="row">
                         <div class="col-12">
                            <h2>Jobs</h2>
                        </div>
                    
                        <div class="col-12 pt-5">
                        
                        <form action="<?= base_url();?>user/Searchresult" method="get">
                              <div class="form-group">
                                <div class="input-field first-wrap">
                                  <input id="search" name="tjob" class="form-control" type="text" placeholder="Search" />
                                  <input id="location" name="country" class="form-control" type="text" placeholder="location" />
                                  <button class="btn btn-primary btn-lg" type="submit">Search</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
                            
                            
                           
   <div class="container">
        <div class="row align-items-center">
            <div class="section-header">
                
                <h2 style="text-align:center;">Search & Apply</h2>
            </div>
        </div>
                  

<br><br>

                        
                     
	<head>


  <div class="table"> 
   <div style="overflow-x:auto;">
<table>
  <tr class="tr" bgcolor="#030f27">
    <th>S.R No.</th>
    <th>Job Title</th>
    <th>Company Name</th>
	 <th>Job Description</th>
	  <th>No of Vacancies</th>
	  <th>Salary</th>
	  <th>Gender</th>
	  <th>Job Location</th>
	  <th>Action</th>
  </tr>
  <?php 
                      foreach($list as $key=>$seller): 
                        if($seller['enable']==1){ ?>
                        <tr>
                          <td><?= ++$key?></td>
                          <td><?php echo $seller['tjob']; ?></td>
                          <td><?php echo $seller['cname']; ?></td>
                          <td><?php echo trim_text($seller['jd'],80); ?></td>
                          <td><?php echo $seller['noopen']; ?></td>
                          <td><?php echo $seller['Salary']; ?></td>
                          <td><?php echo $seller['gender']; ?></td>
                          <td><?php echo $seller['country']; ?></td>
                          <td>
                          <button class="btn btn-primary btn-sm">
                              <a href="<?= base_url(); ?>user/Searchdes/<?=$seller['id'];?>">Apply Now</a>
                          </button>
                          </td>
                      </tr>
                          <?php } endforeach; ?>



</table>
</div><br>
 
						
            </div>
            </div>
            
				<br>
            <!-- About End -->