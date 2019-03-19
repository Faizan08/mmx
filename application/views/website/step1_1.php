<br>
<!-- Main content -->

<section class="container" style=" margin-top: -44px;">
    <div class="order-container" style="    margin-top: 13px">
        <div class="order">
            <img class="order__images" alt='' src="images/tickets.png">
            <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
            <div class="order__control">
                <a href="#" class="order__control-btn active">Purchase</a>
                <!-- <a href="#" class="order__control-btn">Reserve</a> -->
            </div>
        </div>
    </div>
    <div class="order-step-area" style="margin-top: -68px;">
        <div class="order-step first--step">1. Where &amp; When</div>
    </div>

    <h2 class="page-heading heading--outcontainer">
        <?php echo $detail['title'] ?>
    </h2>
</section>
<div class="choose-film">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="container">
                <!--First Slide-->
                <div id="click_movie">
                    <!-- <a onclick="get_showtime(<?php echo $key['productID'] ?>)"> -->

                    <div class="film-images">
                        <div class="col-md-4">
                            <img alt='' width="200" src="<?php  echo base_url() ?>uploads/product/<?php echo $detail['image']?>" class="">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="movie__time">
                                <?php echo $detail['length'] ?> min</p>

                            <p class="movie__option"><strong>Country: </strong>
                                <a href="#">
                                    <?php echo $detail['country'] ?>
                                </a>
                            </p>
                            <p class="movie__option"><strong>Year: </strong>
                                <a href="#">
                                    <?php echo $detail['year'] ?>
                                </a>
                            </p>
                            <p class="movie__option"><strong>Category: </strong>
                                <a href="#">
                                    <?php echo $detail['categoryID'] ?>
                                </a>
                            </p>
                            <p class="movie__option"><strong>Release date: </strong>
                                <a href="#">
                                    <?php echo $detail['release_date'] ?>
                                </a>
                            </p>
                            <p class="movie__option"><strong>Director: </strong>
                                <a href="#">
                                    <?php echo $detail['director'] ?>
                                </a>
                            </p>
                            

                                </div>
                                <div class="col-md-6">
                                    
         
         
          <div class="main_form" style="padding: 3px;background:#eee;">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="<?php echo $detail['trailer'] ?>"></iframe>
          </div>
          </div>
          
                                </div>
                            </div>

<p class="movie__option"><strong>Actors: </strong>
                                <a href="#">
                                    <?php echo $detail['actors'] ?>
                                </a>
                            </p>
                            <p class="movie__option"><strong>Age restriction: </strong>
                                <a href="#">
                                    <?php echo $detail['age_restriction'] ?>
                                </a>
                            </p>
                            <p class="movie__option"><strong>Box office: </strong>
                                <a href="#">
                                    <?php echo $detail['box_office'] ?>
                                </a>
                            </p>
                        </div>
                    </div>


                    <!-- <p class="choose-film__title"><?php echo $detail['title']?></p> -->
                    <!-- </a> -->
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($showtime): ?>

<?php //echo $result[0]['showdate'];
    $array = array();
    foreach ($showtime as $row) {
       $array[] = $row['showdate'];
    }
    $array = array_unique($array);
    sort($array);
    //print_r($array);
    

?>
<form method="get0" action="<?php echo base_url() ?>web/step2">
    <section class="container">
        <div class="col-sm-12">
            <div class="choose-indector choose-indector--film">
                <strong>Choosen: </strong><span class="choosen-area"><?php echo $detail['title'] ?></span>
            </div>
            <input type="hidden" name="movie_name" value="<?php echo $detail['title'] ?>">
            <h2 class="page-heading">Select Date</h2>

            <div class="choose-container choose-container--short">
                <input type="hidden" name="productID" value="<?php echo $detail['productID']?>">
                <div class="col-sm-3">
                    <select class="form-control sel" name="date_time" id="sel">
                        <option >Select Date</opton>
                        <?php 
                            for ($i=0; $i < sizeof($array); $i++) { 
                                echo '<option value="'.$array[$i].'" data="'.$array[$i].'">'.$array[$i].'</option>';
                            }
                        ?>
                        <!-- <?php
                    
                         foreach ($showtime as $show){
                            echo '<option value="'.$show['showdate'].'" data="'.$show['showdate'].'">'.$show['showdate'].'</option>';
                        } ?> -->
                    </select>
                </div>
                <!--   -->
            </div>
            <br>

            <h2 class="page-heading">Pick time</h2>

            <div class="time-select time-select--wide " id="show_showtime">
                <div class="time-select__group group--first cinema_1" style="height: 75px;">
                    
                    <div class="col-sm-3">
                        <p class="time-select__place">
                            Cinema 1
                        </p>
                    </div>
                    <div class="col-sm-9">
                        <p class="not-found" style="display:none ;   margin-top: 25px; 
    font-size: 17px !important;
    color: red;
    font: 13px 'Roboto', sans-serif;

    -webkit-transition: 0.3s;
    transition: 0.3s;
    font-weight: 600;">No No Show Time Avalible</p>
                        <p class="time-select__place">
                            <?php
                            $con = 1;
                             foreach ($showtime as $show) {
                                if ($show['cinema_name'] == 'Cinema 1') {
                                   $time = explode(",", $show['showtime']);
                                   for ($i=0; $i < sizeof($time) ; $i++) { 
                                    $con++;
                                      //echo $time[$i].' ';
                                    echo "<label for='time_".$con."' id='".$show['showtimeID']."' class='time-select__item time_show ".$show['showtimeID']."' style='display:none;' data-id='".$show['showdate']."' >".$time[$i]."</label>";
                                    
                                      echo '<input type="radio" name="time" value="'.$show['cinema_name'].'_'.$time[$i].'"   id="time_'.$con.'">'; 

                                   }
                                }
                                
                            } ?>
                        </p>
                    </div>
                    
                </div>
                <div class="time-select__group group--first cinema_2" style="height: 75px;">
                    
                    <div class="col-sm-3">
                        <p class="time-select__place">
                            Cinema 2
                        </p>
                    </div>
                    <div class="col-sm-9">
                        <p class="not-found" style="display:none ;   margin-top: 25px; 
    font-size: 17px !important;
    color: red;
    font: 13px 'Roboto', sans-serif;

    -webkit-transition: 0.3s;
    transition: 0.3s;
    font-weight: 600;">No Show Time Avalible</p>
                        <p class="time-select__place">
                            <?php foreach ($showtime as $show) {

                                if ($show['cinema_name'] == 'Cinema 2') {
                                   $time = explode(",", $show['showtime']);
                                   for ($i=0; $i < sizeof($time) ; $i++) { 
                                    $con++;
                                      echo "<label for='time_".$con."' id='".$show['showtimeID']."' class='time-select__item time_show ".$show['showtimeID']."' style='display:none;' data-id='".$show['showdate']."' >".$time[$i]."</label>";
                                      echo ' <input type="radio" name="time" value="'.$show['cinema_name'].'_'.$time[$i].'"   id="time_'.$con.'">';
                                   }
                                }

                            } ?>
                        </p>
                    </div>
                    
                </div>
            </div>
            <div class="choose-indector choose-indector--time">
                <strong>Choosen: </strong><span class="choosen-area"></span>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <div class="booking-pagination">
        <a href="#" class="booking-pagination__prev hide--arrow">
            <span class="arrow__text arrow--prev"></span>
            <span class="arrow__info"></span>
        </a>
        <button type="submit" class="booking-pagination__next">
            <span class="arrow__text arrow--next">next step</span>
            <span class="arrow__info">choose a seat</span>
        </button>
    </div>
</form>
<?php endif ?>
<div class="container">
    <?php if (!$showtime): ?>
    <p>No Showtime Added..</p>
    <?php endif ?>
</div>
<div class="clearfix"></div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
        init_BookingOne();
    });



    function get_showtime(productID) {
        $.ajax({
            url: "<?php echo base_url() ?>admin/get_showtime",
            type: "post",
            data: {
                productID: productID
            },
            success: function(resp) {

                $('#show_showtime').html(resp);
                // init_BookingOne();

            }
        });
    }
</script>
<script type="text/javascript">
    $(function() {
        $('#sel').change(function() {
            $('.time_show').hide();
            //alert($('#sel option:selected').attr('data'));
            var show = $('#sel option:selected').attr('data');
            $('[data-id="'+show+'"]').show()
            var set = 0
            $('.cinema_1 label').each(function() {
            	if($(this).css('display') != 'none'){
            		set = 1
            	}
            })
            if(set == 0){
            	$('.cinema_1 .not-found').show()
            }
            else{
            	$('.cinema_1 .not-found').hide()
            }
            var set = 0
            $('.cinema_2 label').each(function() {
            	if($(this).css('display') != 'none'){
            		set = 1
            	}
            })
            if(set == 0){
            	$('.cinema_2 .not-found').show()
            }
            else{
            	$('.cinema_2 .not-found').hide()
            }
            //alert($(this).data('id'));
        });
    });
</script>