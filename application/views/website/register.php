
        
     <br><br>
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                
                     
                                  <section class="container">

                <div class="col-sm-5 col-sm-offset-3">
                    <form  class="" method='post' action="<?php echo base_url() ?>web/create_user">
                        <p style="text-align: center;"><span class="heading-special3">sign up </span><br>
                        <span style="font-family: 'aleoregular', sans-serif;font-size: 15px;">Welcome To Mega Multiplex Cinema</span></p>

                        <div class="logoLogin" style="    border-radius: 7px;">
                              <img alt='logo' src="<?php echo base_url() ?>assets/images/login_logo.png">
                        </div>
                        <br>

                        <div class="field-wrap1">
                          <input type='text' placeholder='Name*' name='user_name' class="login__input" required="">
                        <input type='text' placeholder='Contact Number*' name='phone_number' class="login__input" required="">
                        <input type='text' placeholder='CNIC*' name='user_cnic' class="login__input" required="">
                        <input type='email' placeholder='Email*' name='email' class="login__input" required="">
                        
                        <input type='password' placeholder='Password*' name='password' class="login__input" required="">

                         </div>
                         <br>
                        <?php if (isset($errors)): ?>
                            <div id="errors">
                            <p >
                            <?php echo $errors ?>
                              </p>  
                            </div>
                        <?php endif ?>
                        <div class="login__control">
                            <input type='submit' vale="sign up" class="btnmg1" />
                        </div>


                        
                    </form>
           
                    <div class="login__control pull-right">
                            <a href="<?php echo base_url() ?>web/useraccount">
                              <span style="color: #ffffff;"> You have account? </span><button type='button' class="btn">Sig In</button>
                            </a>
                        </div>
                </div>

               

            </section>
                    </div>

                </div>
            </div>
        </section>
        







        <div class="clearfix"></div>

<?php include "footer.php"; ?>

		<script type="text/javascript">
            $(document).ready(function() {
                init_Rates();
            });
		</script>


<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title page-heading">Show Time</h4>
            </div>
            <div class="modal-body" style="width: 100%;">
                <section>
    <div class="row">

                <div class="time-select time-select--wide">
                        <div class="time-select__group group--first">
                            <div class="col-sm-3">
                                <p class="time-select__place">Cineworld</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <li class="time-select__item" data-time='09:40'>09:40</li>
                                <li class="time-select__item" data-time='13:45'>13:45</li>
                                <li class="time-select__item" data-time='15:45'>15:45</li>
                                <li class="time-select__item" data-time='19:50'>19:50</li>
                                <li class="time-select__item" data-time='21:50'>21:50</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-3">
                                <p class="time-select__place">Empire</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <li class="time-select__item" data-time='10:45'>10:45</li>
                                <li class="time-select__item" data-time='16:00'>16:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:15'>21:15</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-3">
                                <p class="time-select__place">Curzon</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <li class="time-select__item" data-time='09:00'>09:00</li>
                                <li class="time-select__item" data-time='11:00'>11:00</li>
                                <li class="time-select__item" data-time='13:00'>13:00</li>
                                <li class="time-select__item" data-time='15:00'>15:00</li>
                                <li class="time-select__item" data-time='17:00'>17:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:00'>21:00</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                                <li class="time-select__item" data-time='01:00'>01:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group">
                            <div class="col-sm-3">
                                <p class="time-select__place">Odeon</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <li class="time-select__item" data-time='10:45'>10:45</li>
                                <li class="time-select__item" data-time='16:00'>16:00</li>
                                <li class="time-select__item" data-time='19:00'>19:00</li>
                                <li class="time-select__item" data-time='21:15'>21:15</li>
                                <li class="time-select__item" data-time='23:00'>23:00</li>
                            </ul>
                        </div>

                        <div class="time-select__group group--last">
                            <div class="col-sm-3">
                                <p class="time-select__place">Picturehouse</p>
                            </div>
                            <ul class="col-sm-6 items-wrap">
                                <li class="time-select__item" data-time='17:45'>17:45</li>
                                <li class="time-select__item" data-time='21:30'>21:30</li>
                                <li class="time-select__item" data-time='02:20'>02:20</li>
                            </ul>
                        </div>
                    </div>
    </div>
</section>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

