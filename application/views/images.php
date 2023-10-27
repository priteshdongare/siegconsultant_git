 <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        <div class="section-header">
                            
                                <h2 style="text-align:center;">Gallery</h2>
                        </div>
                        </div>
                    </div>	
                    <div class="row">
                        <?php if(! empty($display)){ foreach($display as $view){ ?>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                             <div class="parant-section">
                                
                                 <div class="content">
                                     <img src="<?= base_url(); ?>assets/album/<?= $view['images'];?>" width="100%" height="230px" alt="">
                                 </div>
                                  <div class="head-section">
                                     <h5 class="text-center"><?= $view['album']; ?></h5>
                                 </div>
                             </div>
                    
                         </div>
                         <?php } }else{ ?>
                          <div class="col-lg-12 col-md-12 col-sm-12">
                             <div class="parant-section p-3">
                                 <h4 style="color:red;">Data Not Found</h4>
                             </div>
                          </div>
                         <?php } ?>
						<br>
						
						
				    </div>
                      <div class="row"><?= $link ?></div>
						
               
                </div>
</div>
				<br>
				<br>