  <style type="text/css">
      .gallery-item .gallery-item__descript .gallery-item__name{

        color: #ffffff;
      }
      .gallery-item .gallery-item__descript:before {
   
    background-color: #1394d8;
    
}
  </style>      
   <br><br>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading"><?php echo $title; ?></h2>

                  <div class="post">
                    

              
                  

 <section class="container">
            <div class="col-sm-12">
              
                <div class="row">
                <div class="gallery-wrapper">
                    <!--<div class="col-sm-4 col-md-6">
                        <div class="gallery-item">
                            <a href='<?php echo base_url() ?>assets/student discount.jpg' class="gallery-item__image gallery-item--photo">
                                <img alt=''  class="img-responsive" src="<?php echo base_url() ?>assets/student discount.jpg">
                            </a>
                            <a href='<?php echo base_url() ?>assets/student discount.jpg' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon"><i class="fa fa-camera"></i></span>
                                <p class="gallery-item__name">Student Discount Offer (Only for weekdays)</p>
                            </a>
                        </div>
                    </div>-->
                    <?php foreach ($promotions as $promotion): ?>
                    <div class="col-sm-4 col-md-6">
                        <div class="gallery-item">
                            <a href='<?php echo base_url() ?>uploads/promotion/<?php echo $promotion['image'] ?>' class="gallery-item__image gallery-item--photo">
                                <img alt=''  class="img-responsive" src="<?php echo base_url() ?>uploads/promotion/<?php echo $promotion['image'] ?>">
                            </a>
                            <a href='<?php echo base_url() ?>uploads/promotion/<?php echo $promotion['image'] ?>' class="gallery-item__descript gallery-item--photo-link">
                                <span class="gallery-item__icon"><i class="fa fa-camera"></i></span>
                                <p class="gallery-item__name"><?php echo $promotion['promotion_name'] ?> <span style="color: rgb(255, 255, 255);font-size: 11px;"><?php echo $promotion['small_tag'] ?></span></p> 
                            </a>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                   

                  
                   

                    
                </div>
                </div>
    

              
            </div>

        </section>
</div>
</div>
<br><br>

<div class="clearfix"></div>
</div>
        </section>
        
        <div class="clearfix"></div>
<?php include 'footer.php'; ?>
        
        <script type="text/javascript">
        
            $(document).ready(function() {
                init_SinglePage();
            });
        </script>

</body>
</html>