<?php 
// print_r($list);
// $key = array_search("A-6",$list); 
// print_r($key);
// echo '<br>';
// print_r(array_key_exists($key,$list));die;
//error_reporting('-1');
//$cinema=($show['cinema_name']);
$cinema=explode("_",$_GET['time']);
//echo array_search("r-ed",$a);

//print_r($list);die();

 ?>
 <br>
 
<style type="text/css">
.old {
    display: none;
}

@media screen and (min-width: 1080px) {
    .screen_img{

    }
}
@media screen and (max-width: 1100px) {
    .screen_img{

    }
}
@media screen and (max-width: 1024px) {
    .screen_img{

    }
}
@media screen and (max-width: 767px) {
    .screen_img{

    }
}
@media screen and (max-width: 700px) {
    .screen_img{
            margin-top: 45px !important;
    }
}
@media screen and (max-width: 699px) and (min-width: 490px) {
    .screen_img{
            margin-top: 45px !important;
    }
}
@media screen and (max-width: 487px) {
    .screen_img{
            margin-top: 101px !important;
    }
}


@media screen and (max-width: 360px) {
    .screen_img{
            margin-top: 97px !important;
    }

}
</style>
        <!-- Main content -->
        <div class="place-form-area">
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                       <!-- <a href="#" class="order__control-btn">Reserve</a>-->
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step">2. Choose a seat</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price sits-price--cheap">Available</li>
                        
                    </ul>
                </div>
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-state sits-state--not">Not available</li>
                        
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        
                        <li class="sits-state sits-state--your">Your choice</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">

                <?php if ($movies_data['screen_id']=="1"): ?>
                     <div class="sits-area">
                    
   
                    <div class="sits">
                        <aside class="sits__line"><br><br><br>
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">H</span>
                            <span class="sits__indecator additional-margin">I</span>
                            <span class="sits__indecator">J</span>
                            <span class="sits__indecator">K</span>
                            <span class="sits__indecator">L</span>
                            <span class="sits__indecator">M</span>
                            
                        </aside>
                                           
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                            <span class="sits__indecator">10</span>
                            <span class="sits__indecator">11</span>
                        </footer>
                        <br>
                            <div class="sits__row">
                                 <?php 
                                    $key = array_search("A-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" style="<?php  echo "color:$seatColor;" ?>" data-place='A-1' data-price='10'>A-1</span>
                                 <?php 
                                    $key = array_search("A-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" style="<?php  echo "color:$seatColor;" ?>" data-place='A-2' data-price='10'>A-2</span>


                                <?php 
                                    $key = array_search("A-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-3' data-price='10'>A-3</span>


                                 <?php 
                                    $key = array_search("A-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-4' data-price='10'>A-4</span>
                                 <?php 
                                    $key = array_search("A-5",$list); 
                                    print_r(array_key_exists($key,$list));
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-5' data-price='10'>A-5</span>
                                <?php 
                                    $key = array_search("A-6",$list); 
                                    $class = '';
                                    echo $key;
                                    if($key > -1){
                                        if (array_key_exists($key,$list)){
                                            $class = 'sits-state--not';
                                        }
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-6' data-price='10'>A-6</span>
                                <?php 
                                    $key = array_search("A-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap  <?php echo $class ?>" data-place='A-7' data-price='10'>A-7</span>
                                <?php 
                                    $key = array_search("A-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-8' data-price='10'>A-8</span>
                                <?php 
                                    $key = array_search("A-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-9' data-price='10'>A-9</span>
                                <?php 
                                    $key = array_search("A-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A1-0' data-price='10'>A-10</span>
                                <?php 
                                    $key = array_search("A-11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A1-1' data-price='10'>A-11</span>
                            </div>
                            
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("B-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-1' data-price='10'>B-1</span>
                                <?php 
                                    $key = array_search("B-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-2' data-price='10'>B-2</span>
                                <?php 
                                    $key = array_search("B-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-3' data-price='10'>B-3</span>
                                <?php 
                                    $key = array_search("B-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-4' data-price='10'>B-4</span>
                                <?php 
                                    $key = array_search("B-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-5' data-price='10'>B-5</span>
                                <?php 
                                    $key = array_search("B-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-6' data-price='10'>B-6</span>
                                <?php 
                                    $key = array_search("B-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-7' data-price='10'>B-7</span>
                                <?php 
                                    $key = array_search("B-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-8' data-price='10'>B-8</span>
                                <?php 
                                    $key = array_search("B-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-9' data-price='10'>B-9</span>
                                <?php 
                                    $key = array_search("B-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B1-0' data-price='10'>B-10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("C-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-1' data-price='10'>C-1</span>
                                <?php 
                                    $key = array_search("C-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-2' data-price='10'>C-2</span>
                                <?php 
                                    $key = array_search("C-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-3' data-price='10'>C-3</span>
                                <?php 
                                    $key = array_search("C-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-4' data-price='10'>C-4</span>
                                <?php 
                                    $key = array_search("C-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-5' data-price='10'>C-5</span>
                                <?php 
                                    $key = array_search("C-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-6' data-price='10'>C-6</span>
                                <?php 
                                    $key = array_search("C-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-7' data-price='10'>C-7</span>
                                <?php 
                                    $key = array_search("C-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-8' data-price='10'>C-8</span>
                                <?php 
                                    $key = array_search("C-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-9' data-price='10'>C-9</span>
                                <?php 
                                    $key = array_search("C-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C1-0' data-price='10'>C-10</span>
                                <?php 
                                    $key = array_search("C-11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C1-1' data-price='10'>C-11</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("D-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-1' data-price='10'>D-1</span>
                                <?php 
                                    $key = array_search("D-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-2' data-price='10'>D-2</span>
                                <?php 
                                    $key = array_search("D-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-3' data-price='10'>D-3</span>
                                <?php 
                                    $key = array_search("D-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-4' data-price='10'>D-4</span>
                                <?php 
                                    $key = array_search("D-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-5' data-price='10'>D-5</span>
                                <?php 
                                    $key = array_search("D-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-6' data-price='10'>D-6</span>
                                <?php 
                                    $key = array_search("D-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-7' data-price='10'>D-7</span>
                                <?php 
                                    $key = array_search("D-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-8' data-price='10'>D-8</span>
                                <?php 
                                    $key = array_search("D-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-9' data-price='10'>D-9</span>
                                <?php 
                                    $key = array_search("D-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D1-0' data-price='10'>D-10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("E-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-1' data-price='20'>E-1</span>
                                <?php 
                                    $key = array_search("E-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-2' data-price='20'>E-2</span>
                                <?php 
                                    $key = array_search("E-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-3' data-price='20'>E-3</span>
                                <?php 
                                    $key = array_search("E-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-4' data-price='20'>E-4</span>





                                <?php 
                                    $key = array_search("E-5",$API_Data['seatNumber']); 
                                    if (array_key_exists($key,$API_Data['seatNumber'])){
                                        $class = 'sits-state--not';

                                    }

                                    else{
                                        $class = '';
                                        
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-5' data-price='20'>E-5</span>






                                <?php 

                                    $key = array_search("E-6",$API_Data['seatNumber']); 
                                    echo $API_Data['seatNumber'];
                                    if (array_key_exists($key,$API_Data['seatNumber'])){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-6' data-price='20'>E-6</span>
                                <?php 
                                    $key = array_search("E-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-7' data-price='20'>E-7</span>
                                <?php 
                                    $key = array_search("E-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-8' data-price='20'>E-8</span>
                                <?php 
                                    $key = array_search("E-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-9' data-price='20'>E-9</span>
                                <?php 
                                    $key = array_search("E-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-10' data-price='20'>E-10</span>
                                <?php 
                                    $key = array_search("E-11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-11' data-price='20'>E-11</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("F-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-1' data-price='20'>F-1</span>
                                <?php 
                                    $key = array_search("F-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-2' data-price='20'>F-2</span>
                                <?php 
                                    $key = array_search("F-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-3' data-price='20'>F-3</span>
                                <?php 
                                    $key = array_search("F-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-4' data-price='20'>F-4</span>
                                <?php 
                                    $key = array_search("F-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-5' data-price='20'>F-5</span>
                                <?php 
                                    $key = array_search("F-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-6' data-price='20'>F-6</span>
                                <?php 
                                    $key = array_search("F-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-7' data-price='20'>F-7</span>
                                <?php 
                                    $key = array_search("F-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-8' data-price='20'>F-8</span>
                                <?php 
                                    $key = array_search("F-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-9' data-price='20'>F-9</span>
                                <?php 
                                    $key = array_search("F-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-10' data-price='20'>F-10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("G-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-1' data-price='20'>G-1</span>
                                <?php 
                                    $key = array_search("G-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-2' data-price='20'>G-2</span>
                                <?php 
                                    $key = array_search("G-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-3' data-price='20'>G-3</span>
                                <?php 
                                    $key = array_search("G-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-4' data-price='20'>G-4</span>
                                <?php 
                                    $key = array_search("G-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-5' data-price='20'>G-5</span>
                                <?php 
                                    $key = array_search("G-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-6' data-price='20'>G-6</span>
                                <?php 
                                    $key = array_search("G-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-7' data-price='20'>G-7</span>
                                <?php 
                                    $key = array_search("G-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-8' data-price='20'>G-8</span>
                                <?php 
                                    $key = array_search("G-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-9' data-price='20'>G-9</span>
                                <?php 
                                    $key = array_search("G-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-10' data-price='20'>G-10</span>
                                <?php 
                                    $key = array_search("G-11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-11' data-price='20'>G-11</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("H-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-1' data-price='20'>H-1</span>
                                <?php 
                                    $key = array_search("H-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-2' data-price='20'>H-2</span>
                                <?php 
                                    $key = array_search("H-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-3' data-price='20'>H-3</span>
                                <?php 
                                    $key = array_search("H-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-4' data-price='20'>H-4</span>
                                <?php 
                                    $key = array_search("H-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-5' data-price='20'>H-5</span>
                                <?php 
                                    $key = array_search("H-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-6' data-price='20'>H-6</span>
                                <?php 
                                    $key = array_search("H-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-7' data-price='20'>H-7</span>
                                <?php 
                                    $key = array_search("H-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-8' data-price='20'>H-8</span>
                                <?php 
                                    $key = array_search("H-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-9' data-price='20'>H-9</span>
                                <?php 
                                    $key = array_search("H-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap" data-place='H-10' data-price='20'>H-10</span>
                            </div>

                            <div class="sits__row additional-margin">
                                <?php 
                                    $key = array_search("I-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-1' data-price='30'>I1</span>
                                <?php 
                                    $key = array_search("I-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-2' data-price='30'>I-2</span>
                                <?php 
                                    $key = array_search("I-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-3' data-price='30'>I-3</span>
                                <?php 
                                    $key = array_search("I-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-4' data-price='30'>I-4</span>
                                <?php 
                                    $key = array_search("I-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-5' data-price='30'>I-5</span>
                                <?php 
                                    $key = array_search("I-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-6' data-price='30'>I-6</span>
                                <?php 
                                    $key = array_search("I-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-7' data-price='30'>I-7</span>
                                <?php 
                                    $key = array_search("I-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-8' data-price='30'>I-8</span>
                                <?php 
                                    $key = array_search("I-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-9' data-price='30'>I-9</span>
                                <?php 
                                    $key = array_search("I-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-10' data-price='30'>I-10</span>
                                <?php 
                                    $key = array_search("I-11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-11' data-price='30'>I-11</span>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("J-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-1' data-price='30'>J-1</span>
                                <?php 
                                    $key = array_search("J-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-2' data-price='30'>J-2</span>
                                <?php 
                                    $key = array_search("J-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-3' data-price='30'>J-3</span>
                                <?php 
                                    $key = array_search("J-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-4' data-price='30'>J-4</span>
                                <?php 
                                    $key = array_search("J-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-5' data-price='30'>J-5</span>
                                <?php 
                                    $key = array_search("J-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-6' data-price='30'>J-6</span>
                                <?php 
                                    $key = array_search("J-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-7' data-price='30'>J-7</span>
                                <?php 
                                    $key = array_search("J-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-8' data-price='30'>J-8</span>
                                <?php 
                                    $key = array_search("J-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-9' data-price='30'>J-9</span>
                                <?php 
                                    $key = array_search("J-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-10' data-price='30'>J-10</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("K-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-1' data-price='30'>K-1</span>
                                <?php 
                                    $key = array_search("K-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-2' data-price='30'>K-2</span>
                                <?php 
                                    $key = array_search("K-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-3' data-price='30'>K-3</span>
                                <?php 
                                    $key = array_search("K-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-4' data-price='30'>K-4</span>
                                <?php 
                                    $key = array_search("K-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-5' data-price='30'>K-5</span>
                                <?php 
                                    $key = array_search("K-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-6' data-price='30'>K-6</span>
                                <?php 
                                    $key = array_search("K-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-7' data-price='30'>K-7</span>
                                <?php 
                                    $key = array_search("K-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-8' data-price='30'>K-8</span>
                                <?php 
                                    $key = array_search("K-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-9' data-price='30'>K-9</span>
                                <?php 
                                    $key = array_search("K-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-10' data-price='30'>K-10</span>
                                <?php 
                                    $key = array_search("K-11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='K-11' data-price='30'>K-11</span>
                            </div>
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("L-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-1' data-price='30'>L-1</span>
                                <?php 
                                    $key = array_search("L-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-2' data-price='30'>L-2</span>
                                <?php 
                                    $key = array_search("L-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-3' data-price='30'>L-3</span>
                                <?php 
                                    $key = array_search("L-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-4' data-price='30'>L-4</span>
                                <?php 
                                    $key = array_search("L-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-5' data-price='30'>L-5</span>
                                <?php 
                                    $key = array_search("L-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-6' data-price='30'>L-6</span>
                                <?php 
                                    $key = array_search("L-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-7' data-price='30'>L-7</span>
                                <?php 
                                    $key = array_search("L-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-8' data-price='30'>L-8</span>
                                <?php 
                                    $key = array_search("L-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-9' data-price='30'>L-9</span>
                                <?php 
                                    $key = array_search("L-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='L-10' data-price='30'>L-10</span>
                            </div>
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("M-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-1' data-price='30'>M-1</span>
                                <?php 
                                    $key = array_search("M-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-2' data-price='30'>M-2</span>
                                <?php 
                                    $key = array_search("M-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-3' data-price='30'>M-3</span>
                                <?php 
                                    $key = array_search("M-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-4' data-price='30'>M-4</span>
                                <?php 
                                    $key = array_search("M-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-5' data-price='30'>M-5</span>
                                <?php 
                                    $key = array_search("M-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-6' data-price='30'>M-6</span>
                                <?php 
                                    $key = array_search("M-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-7' data-price='30'>M-7</span>
                                <?php 
                                    $key = array_search("M-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-8' data-price='30'>M-8</span>
                                <?php 
                                    $key = array_search("M-9",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-9' data-price='30'>M-9</span>
                                <?php 
                                    $key = array_search("M-10",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-10' data-price='30'>M-10</span>
                                <?php 
                                    $key = array_search("M-11",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='M-11' data-price='30'>M-11</span>
                            </div>

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result old">
                                $0
                            </div>
                        </aside>
                       
                    </div>
                </div>
            </div>
                <?php endif ?>
               
                <?php if ($cinema[0]=="Cinema 2"): ?>
                     <div class="sits-area ">
                    
                    
                    <div class="sits">
                        <aside class="sits__line"><br><br><br>
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">H</span>
                            <span class="sits__indecator additional-margin">I</span>
                            
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            
                        </footer>
                        <br>

                            <div class="sits__row">
                                 <?php 
                                    $key = array_search("A-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" style="<?php  echo "color:$seatColor;" ?>" data-place='A-1' data-price='10'>A-1</span>
                                <?php 
                                    $key = array_search("A-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-2' data-price='10'>A-2</span>
                                 <?php 
                                    $key = array_search("A-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-3' data-price='10'>A-3</span>
                                <?php 
                                    $key = array_search("A-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-4' data-price='10'>A-4</span>
                                <?php 
                                    $key = array_search("A-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-5' data-price='10'>A-5</span>
                                <?php 
                                    $key = array_search("A-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-6' data-price='10'>A-6</span>
                                <?php 
                                    $key = array_search("A-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-7' data-price='10'>A-7</span>
                                <?php 
                                    $key = array_search("A-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='A-8' data-price='10'>A-8</span>
                            </div>
                            
                            <div class="sits__row">
                                <?php 
                                    $key = array_search("B-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-1' data-price='10'>B-1</span>
                                <?php 
                                    $key = array_search("B-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-2' data-price='10'>B-2</span>
                                <?php 
                                    $key = array_search("B-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-3' data-price='10'>B-3</span>
                                <?php 
                                    $key = array_search("B-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-4' data-price='10'>B-4</span>
                                <?php 
                                    $key = array_search("B-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-5' data-price='10'>B-5</span>
                                <?php 
                                    $key = array_search("B-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-6' data-price='10'>B-6</span>
                                <?php 
                                    $key = array_search("B-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='B-7' data-price='10'>B-7</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("C-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-1' data-price='10'>C-1</span>
                                <?php 
                                    $key = array_search("C-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-2' data-price='10'>C-2</span>
                                <?php 
                                    $key = array_search("C-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-3' data-price='10'>C-3</span>
                                <?php 
                                    $key = array_search("C-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-4' data-price='10'>C-4</span>
                                <?php 
                                    $key = array_search("C-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-5' data-price='10'>C-5</span>
                                <?php 
                                    $key = array_search("C-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-6' data-price='10'>C-6</span>
                                <?php 
                                    $key = array_search("C-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-7' data-price='10'>C-7</span>
                                <?php 
                                    $key = array_search("C-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='C-8' data-price='10'>C-8</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("D-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-1' data-price='10'>D-1</span>
                                <?php 
                                    $key = array_search("D-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-2' data-price='10'>D-2</span>
                                <?php 
                                    $key = array_search("D-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-3' data-price='10'>D-3</span>
                                <?php 
                                    $key = array_search("D-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-4' data-price='10'>D-4</span>
                                <?php 
                                    $key = array_search("D-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-5' data-price='10'>D-5</span>
                                <?php 
                                    $key = array_search("D-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-6' data-price='10'>D-6</span>
                                <?php 
                                    $key = array_search("D-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='D-7' data-price='10'>D-7</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("E-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-1' data-price='20'>E-1</span>
                                <?php 
                                    $key = array_search("E-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-2' data-price='20'>E-2</span>
                                <?php 
                                    $key = array_search("E-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-3' data-price='20'>E-3</span>
                                <?php 
                                    $key = array_search("E-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-4' data-price='20'>E-4</span>
                                <?php 
                                    $key = array_search("E-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-5' data-price='20'>E-5</span>
                                <?php 
                                    $key = array_search("E-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-6' data-price='20'>E-6</span>
                                <?php 
                                    $key = array_search("E-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-7' data-price='20'>E-7</span>
                                <?php 
                                    $key = array_search("E-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='E-8' data-price='20'>E-8</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("F-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-1' data-price='20'>F-1</span>
                                <?php 
                                    $key = array_search("F-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-2' data-price='20'>F-2</span>
                                <?php 
                                    $key = array_search("F-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-3' data-price='20'>F-3</span>
                                <?php 
                                    $key = array_search("F-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-4' data-price='20'>F-4</span>
                                <?php 
                                    $key = array_search("F-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-5' data-price='20'>F-5</span>
                                <?php 
                                    $key = array_search("F-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-6' data-price='20'>F-6</span>
                                <?php 
                                    $key = array_search("F-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='F-7' data-price='20'>F-7</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("G-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-1' data-price='20'>G-1</span>
                                <?php 
                                    $key = array_search("G-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-2' data-price='20'>G-2</span>
                                <?php 
                                    $key = array_search("G-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-3' data-price='20'>G-3</span>
                                <?php 
                                    $key = array_search("G-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-4' data-price='20'>G-4</span>
                                <?php 
                                    $key = array_search("G-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-5' data-price='20'>G-5</span>
                                <?php 
                                    $key = array_search("G-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-6' data-price='20'>G-6</span>
                                <?php 
                                    $key = array_search("G-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-7' data-price='20'>G-7</span>
                                <?php 
                                    $key = array_search("G-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='G-8' data-price='20'>G-8</span>
                            </div>

                            <div class="sits__row">
                                <?php 
                                    $key = array_search("H-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-1' data-price='20'>H-1</span>
                                <?php 
                                    $key = array_search("H-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-2' data-price='20'>H-2</span>
                                <?php 
                                    $key = array_search("H-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-3' data-price='20'>H-3</span>
                                <?php 
                                    $key = array_search("H-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-4' data-price='20'>H-4</span>
                                <?php 
                                    $key = array_search("H-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-5' data-price='20'>H-5</span>
                                <?php 
                                    $key = array_search("H-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-6' data-price='20'>H-6</span>
                                <?php 
                                    $key = array_search("H-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='H-7' data-price='20'>H-7</span>
                            </div>

                            <div class="sits__row additional-margin">
                                <?php 
                                    $key = array_search("I-1",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-1' data-price='30'>I1</span>
                                <?php 
                                    $key = array_search("I-2",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-2' data-price='30'>I-2</span>
                                <?php 
                                    $key = array_search("I-3",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-3' data-price='30'>I-3</span>
                                <?php 
                                    $key = array_search("I-4",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-4' data-price='30'>I-4</span>
                                <?php 
                                    $key = array_search("I-5",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-5' data-price='30'>I-5</span>
                                <?php 
                                    $key = array_search("I-6",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-6' data-price='30'>I-6</span>
                                <?php 
                                    $key = array_search("I-7",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='I-7' data-price='30'>I-7</span>
                                <?php 
                                    $key = array_search("I-8",$list); 
                                    if (array_key_exists($key,$list)){
                                        $class = 'sits-state--not';
                                    }

                                    else{
                                        $class = '';
                                    }
                                ?>
                                <span class="sits__place sits-price--cheap <?php echo $class ?>" data-place='J-8' data-price='30'>I-8</span>

                     
                       

                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result old">
                                $0
                            </div>
                        </aside>
                        
                    </div>
                </div>
            </div>
                <?php endif ?>
               
            
  
            <br> <br>
                
                    <img class="screen_img" style="width: 61%; max-width: 100%; z-index: 999;
    margin-top: -10px;" src="<?php echo base_url() ?>assets/images/seatlayout-bg.png"><br><br><div class="sits-anchor" style="font-size: 25px; margin-top: -20px; ">screen</div>
             </div>

            </div>
        </section>
        </div>
        
        

        <div class="clearfix"></div>
         <form id='contact-info' method='post' action="<?php echo base_url() ?>web/pause_booking" novalidate="" class="form contact-info">
        <!--<form id='contact-info' method='post' action="<?php echo base_url() ?>web/step3" novalidate="" class="form contact-info">-->
                  
     <input type="text" name="productID" value="<?php echo $_GET['movie_id'] ?>">
     <input type="text" name="movie_name" value="<?php echo $_GET['movie_name'] ?>">
        <input type="text" name="date_time" value="<?php echo $_GET['date_time'] ?>">
        <input type="text" name="cinema_name" value="<?php echo $movies_data['screen_id'] ?>">
        <input type="text" name="show_time" value="<?php echo $movies_data['time'] ?>"> 
            <input type='text' name='choosen-cost' class="choosen-cost">
            <input type='text' name='choosen-sits' class="choosen-sits">


            <div class="booking-pagination booking-pagination--margin">
                    <button type="button" onclick="window.history.back()" class="booking-pagination__prev">
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </button>
                    <button type="submit" id="check" class="booking-pagination__next">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">checkout</span>
                    </button>
            </div>
        </form>
        
        <div class="clearfix"></div>

    </div>

    <!-- open/close -->
        <div class="overlay overlay-hugeinc">
            
            <section class="container">

                <div class="col-sm-4 col-sm-offset-4">
                    <button type="button" class="overlay-close">Close</button>
                    <form id="login-form" class="login" method='get' novalidate=''>
                        <p class="login__title">sign in <br><span class="login-edition">welcome to Megamultiplex</span></p>

                        <div class="social social--colored">
                                <a href='#' class="social__variant fa fa-facebook"></a>
                                <a href='#' class="social__variant fa fa-twitter"></a>
                                <a href='#' class="social__variant fa fa-tumblr"></a>
                        </div>

                        <p class="login__tracker">or</p>
                        
                        <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                         </div>
                        
                        <div class="login__control">
                            <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                            <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                        </div>
                    </form>
                </div>

            </section>
        </div>



<?php include 'footer.php'; ?>

        <script type="text/javascript">
            $(document).ready(function() {
                init_BookingTwo();
            });

        </script>
