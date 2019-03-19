<br>
<br>        

        <!-- Main content -->
        <section class="container">
            <h2 class="page-heading heading--outcontainer"><?php echo $title; ?></h2>
            <div class="contact">
                <p class="contact__title">You have any questions or need help, <br><span class="contact__describe">don’t be shy and contact us</span></p>
                <span class="contact__mail">support@amovie.com</span>
                <span class="contact__tel">support@amovie.com</span>
            </div>
        </section>

        <div class="contact-form-wrapper">
            <div class="container">
                <div class="col-sm-6">
                    <form  class="form row" method='post' novalidate="" action="<?php echo base_url() ?>web/email_membership">
                        <p class="form__title">Membership Form</p>
                        <div class="col-sm-6">
                            <input type='text' placeholder='First Name' name='first_name' class="form__name">
                        </div>
                        <div class="col-sm-6">
                            <input type='text' placeholder='Last Name' name='last_name' class="form__name">
                        </div>


                        <div class="col-sm-6">
                            <input type='email' placeholder='Your Email' name='email' class="form__mail">
                        </div>
                        <div class="col-sm-6">
                            <input type='text' placeholder='Your Phone' name='phone' class="form__name">
                        </div>

                        <div class="col-sm-12">
                        <select class="form__name" name="card_type" required>
                          <option value="">Select Card Type</option>
                          <option value="Loyalty Card">Loyalty Card</option>
                          <option value="Gold Member">Gold Member</option>
                          <option value="Student Card">Student Card</option>
                        </select>
                        </div>


                        <div class="col-sm-12">
                            <textarea placeholder="Your address" name="user-address" class="form__message"></textarea>
                        </div>
                        <button type="submit" class='btn btn-md btn--danger'>send address</button>
                    </form>
                </div>



                <div class="col-md-6">

                    <img src="<?php echo base_url() ?>assets/images/unnamed37.png" class="img-responsive" width="400" style="margin: 0 auto;margin-top: 21px;margin-left: 100px;">
                   
                  

                </div>


            </div>
        </div>




<?php include 'footer.php'; ?>