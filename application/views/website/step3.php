<?php 

if ($_POST) {


$array=explode(",", $_POST['choosen-sits']);
for ($i=0; $i < count($array); $i++) { 
  $final[]=$array[$i];
}
$trimmed_array=array_map('trim',$final);
$array2=array_unique($trimmed_array);

$_SESSION['cart']['movie_name']=$_POST['movie_name'];
$_SESSION['cart']['productID']=$_POST['productID'];
$_SESSION['cart']['date_time']=$_POST['date_time'];
$_SESSION['cart']['cinema_name']=$_POST['cinema_name'];
$_SESSION['cart']['show_time']=$_POST['show_time'];
$_SESSION['cart']['seats']=$array2;

}


 ?>

 <br>
        
        <!-- Main content -->
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="" class="order__control-btn active">Purchase</a>
                        
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step order-step--disable">2. Choose a sit</div>
                    <div class="order-step third--step">3. Check out</div>
                </div>

            <div class="col-sm-12">
                <div class="checkout-wrapper">
                    <h2 class="page-heading">price</h2>
                    <ul class="book-result">
                        <li class="book-result__item">Cinema: <span class="book-result__count booking-ticket"><?php echo $_SESSION['cart']['cinema_name'] ?></span></li>
                        <li class="book-result__item">Seats: <span class="book-result__count booking-ticket"><?php echo count($_SESSION['cart']['seats']) ?></span></li>
                        <li class="book-result__item">One item price: <span class="book-result__count booking-price">
                        <?php if ($_SESSION['cart']['cinema_name']=="Cinema 1"): 
                          $price=500;
                        ?>
                        <?php endif ?>
                        <?php if ($_SESSION['cart']['cinema_name']=="Cinema 2"): 
                          $price=400;
                        ?>
                            
                        <?php endif ?>
                       Rs : <?php echo $price; ?>
                        </span></li>
                        <li class="book-result__item">Total: <span class="book-result__count booking-cost">
                         

Rs <?php 
$count=count($_SESSION['cart']['seats']);
echo $totalamount= $count*$price;
 ?>
                        </span></li>
                    </ul>

<?php if (!empty($_SESSION['adminID'])){ ?>
 <!--
                    <h2 class="page-heading">Choose payment method</h2>
                    <div class="payment">-->
                        <a href="#" class="payment__item">
                            <?php 
                		
                		?>
                                
                        <!--<a href="#" class="payment__item">
                            <img alt=''  src="<?php echo base_url() ?>assets/images/payment/pay2.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="<?php echo base_url() ?>assets/images/payment/pay3.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="<?php echo base_url() ?>assets/images/payment/pay4.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="<?php echo base_url() ?>assets/images/payment/pay5.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="<?php echo base_url() ?>assets/images/payment/pay6.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="<?php echo base_url() ?>assets/images/payment/pay7.png">
                        </a>
                    </div> -->

                    <h2 class="page-heading">Contact information</h2>
          

                   <form id='contact-info' method='post' action="<?php echo base_url() ?>web/confirm" novalidate="" class="form contact-info">
                        <div class="col-lg-4">
                            <div class="contact-info__field contact-info__field-mail">
                            <input type='email' name='email' placeholder='Your email' class="form__mail" value="<?php echo $_SESSION['email'];?>">
                        </div>
                        </div>
                        <div class="col-lg-4">
                             <div class="contact-info__field contact-info__field-tel">
                            <input type='tel' name='phone_number' placeholder='Phone number' class="form__mail" value="<?php echo $_SESSION['phone_number'];?>">
                        </div>
                         
                        </div> 
                        <div class="col-lg-4">
                            <div class="contact-info__field contact-info__field-tel">
                            <input type='text' name='user_cnic' placeholder='CNIC' class="form__mail" value="<?php echo $_SESSION['user_cnic'];?>">
                        </div>
                         
                        </div>
                        <div class="order">
                    <!--<a href="<?php echo base_url() ?>web/checkout" class="btn btn-md btn--warning btn--wide"></a>-->
                    <button type="submit" class="btn btn-md btn--warning btn--wide"></button>
                </div>
                    </form>

                
                </div>
                
                
   
<?php }else{ ?>
 <br>
   <div class="order">
   <!--<p>Details to be...</p>-->
   <br>
   <?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                    <a href="<?php echo base_url() ?>web/useraccount?redirect=<?php echo $actual_link ?>" class="btn btn-md btn--warning btn--wide"></a>
    </div>

<?php } ?>
            </div>

        </section>

        <div class="clearfix"></div>

        <div class="booking-pagination">
                <!--<a href="book2.html" class="booking-pagination__prev">
                    <p class="arrow__text arrow--prev" onclick="window.history.back()">prev step</p>
                    <span class="arrow__info">choose a sit</span>
                </a>-->
                 <button type="button" onclick="window.history.back()" class="booking-pagination__prev">
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </button>
                <a href="#" class="booking-pagination__next hide--arrow">

                    <p class="arrow__text arrow--next">next step</p>
                    <span class="arrow__info"></span>
                </a>
        </div>
        
        <div class="clearfix"></div>
