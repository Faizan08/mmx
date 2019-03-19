<br>
<br>        

        <!-- Main content -->
        <section class="container">
            <h2 class="page-heading heading--outcontainer"><?php echo $title; ?></h2>
            <div class="contact">
                <p class="contact__title">You have any questions or need help, <br><span class="contact__describe">don’t be shy and contact us</span></p>
                <span class="contact__mail">info@megamultiplex.com.pk</span>
                <span class="contact__tel">021-34596616/18</span><br><br>
                <hr><br>
                <p><span class="contact__describe">Address:</span> <br>
Playland (PL) Floor, Millennium Mall, Main Rashid Minhas Road Karachi
<br><b>Recommended approach:</b> To reach the cinema, park the car in basement & use the lift directly to PL floor and enter the cinema. <br>
<b>Contact Number :</b> 021-34596616 / 18</p>
            </div>
        </section>

        <div class="contact-form-wrapper">
            <div class="container">
                <div class="col-sm-6">
                <br><br><br>
                  <?php if(validation_errors()){
        ?>
            <div class="alert alert-danger" style="background-color: #fe505a !important;">
                <?php echo validation_errors(); ?>
             
            </div>
        <?php
        } ?>
                    <form  class="form row" method='post' action="<?php echo base_url() ?>web/submitt">
                        <p class="form__title">Send us a Message</p>
                        <div class="col-sm-6">
                            <input type='text' placeholder='Your name' name='name' class="form__name" required="">
                        </div>
                        <div class="col-sm-6">
                            <input type='text' placeholder='Contact Number' name='phone' class="form__name" required="">
                        </div>
                        <div class="col-sm-12">
                            <input type='email' placeholder='Your email' name='from' class="form__mail" required="">
                        </div>
                        <div class="col-sm-12">
                            <textarea placeholder="Your message" name="masg" class="form__message"  required=""></textarea>
                        </div>
                        
               <div class="col-sm-4 image">
                            <?php echo $captcha; ?>
                              
                          
                        </div><div class="col-sm-2"> <a class="refresh" href="javascript:;"><img src="<?php echo base_url(); ?>images/refresh.png"> </a></div>
                        <div class="col-sm-6">
                           
                                <input class="form-control" placeholder="Captcha" name="captcha">
                          
                        </div>
                        <input type="submit" style="    margin-top: 12px;" class='btn btn-md btn--danger' value='send message'/>
                        <br><br><br>
                    </form>
                </div>


<div class="col-sm-6">
    
<div id='location-map' class="map" style="position: relative;overflow: hidden;">
            
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.882315810124!2d67.11279326521468!3d24.901995549723917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3bfde63eb356ebc0!2sMillennium+Mall!5e0!3m2!1sen!2s!4v1504780472015" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
        <br><br>

</div>


            </div>
        </div>


        <div class="clearfix"></div>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
<script>
    $(function(){
        $('.refresh').click(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>index.php/blog/refresh_captcha',
                success: function(res){
                    if(res){
                        $('.image').html(res);
                    }
                }
            })
        });
    });
</script>
<script>
    $(function(){
        $('.refresh').click(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url() ?>web/refresh_captcha',
                success: function(res){
                    if(res){
                        $('.image').html(res);
                    }
                }
            })
        });
    });
</script>
<?php include 'footer.php'; ?>