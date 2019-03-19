
        
   <br><br>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading"><?php echo $title; ?></h2>

                  <div class="post">
                    

              
                  

<div class="row">
    <div class="container">
        <div class="col-md-5">
            
        <img style="box-shadow: 6px 5px 11px #888888; transform: rotate(-9deg); width: 99%;" src="<?php echo base_url() ?>assets/images/rest2.jpg" style="width: 100%">

        </div>
        <div class="col-md-7">
                    <h2 style="color: white;"><b>Welcome To <span>Multiplex Cinemas</span></b></h2>
            
            <p style="letter-spacing: 1px;text-align: justify;">Mega Multiplex Cinemas brings you entertainment at its best. In our busy life, we lack entertainment and socializing, At Mega Multiplex we offer you corporate discounts to spend qsuality time with your colleagues and friends. We also book the entire cinema hall for schools and companies to screen your desired movie. We cater for birthday parties or any other event of your choice. We offer discounts on group bookings. We have two screens with best sound quality and comfortable atmosphere. Mega Multiplex shares your passion for movies and strives to bring you sublime services in minimal cost.
            </p>

        </div>
    </div>
</div>
<div class="">
            <div class="container">
                <div class="col-sm-12">
                <br><br><br>
                      <form  class="form row" method='post' action="<?php echo base_url() ?>web/corporate_form">
                        <p class="form__title">Send us a Message</p>
                        <div class="col-sm-6">
                            <input type='text' placeholder='Your name' name='name' class="form__name" required="">
                        </div>
                        <div class="col-sm-6">
                            <input type='text' placeholder='Company Name' name='company_name' class="form__mail" required="" >
                        </div>
                        <div class="col-sm-6">
                            <input type='text' placeholder='Contact Number' name='phone' class="form__name" required="">
                        </div>
                        <div class="col-sm-6">
                            <input type='email' placeholder='Your email' name='from' class="form__mail" required="">
                        </div>
                        <div class="col-sm-12">
                            <textarea placeholder="Your message" name="masg" class="form__message" required=""></textarea>
                        </div>
                        <input type="submit" class='btn btn-md btn--danger' value='send message'/>
                        <br><br><br>
                    </form>
                </div>


<div class="col-sm-6">
    

        <br><br>

</div>


            </div>
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