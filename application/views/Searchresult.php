<br>
<br>
<div class="container">
    <div class="row align-items-center">
        <div class="row">
        <h2 style="text-align:; padding:2px;">&nbsp;&nbsp;Search Result</h2> 
        <br> <br>
        </div>

<style>
    .section{
        padding:30px 40px;
        border:1px solid #BCC6CC;
        border-radius:5px;
        margin-bottom:30px;
    }
    .section a h6{
        color:grey;
    }
    .section a{
        text-decoration:none;
    }
</style>


<?php  if(! empty($result)){  foreach($result as $key=>$seller):  ?>

        <div class="section">
            <a href="<?=base_url();?>user/Searchdes/<?= $seller['id'];?>">
            <h5><?php echo $seller['tjob']; ?></h5> </a>
            <span><i class="fa fa-suitcase" aria-hidden="true"></i>&nbsp; <?php echo $seller['experience']; ?></span>  &nbsp;&nbsp;&nbsp;
            <span><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <?php echo $seller['country']; ?></span>&nbsp;&nbsp;&nbsp;
            <span>&#36;  <?php echo $seller['Salary']; ?></span> <br> <br>
            <a href="<?=base_url();?>user/Searchdes/<?= $seller['id'];?>"> <h6><?php echo trim_text($seller['jd'],250); ?></h6> </a>
        </div>
              
      <?php   endforeach; }else{ ?>
      </div>
         <div class="row"><div class="section" style="width:100%";><h5 style="color:red;">Result Not Found...</h5></div></div>
    <?php  }?>
        <br><br>

</div>
</div>
<br>