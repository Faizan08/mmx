<style type="text/css">
  li.slide.fading-slide{
     width: 100%;
     height: 100%;
     overflow: hidden;
     visibility: visible;
     left: 0px;
     top: -5px !important;
     z-index: 20;
     background-image: url('https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_960_720.jpg');
     opacity: 1;
  }
  .wrapper{
    background-image: url('<?php echo base_url() ?>assets/images/3.jpg');
    /* overflow: hidden; */
    /* position: relative; */
    /* background-repeat: no-repeat; */
    background-attachment: fixed;
    background-size: cover;
    /* background-position: center; */
  }
</style>

        <!-- Slider -->
<div class="bannercontainer">
    <div class="banner">
        <ul>
            <?php foreach ($sliders as $slider): ?>
                <?php if ($slider['is_video']==1): ?>
                    <li data-transition="fade" data-slotamount="7" class="slide fading-slide" data-slide=''>
                        <!-- <img alt='' src="<?php echo base_url() ?>uploads/slider/namaloom.jpg"> -->
                        <img alt='' src="">
                         <div class="caption slide__video" data-x="0" data-y="0" data-autoplay='true'>
                           <video class="media-element" width="1280" height="500"  style="margin-top: 1px;"  autoplay="autoplay" preload='none' loop="loop" muted="" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>" >
                                <source type="video/webm" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                                <source type="video/mp4" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                                <source type="video/ogg" src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                            </video>
                        </div>

                         <div class="caption slide__name slide__name--smaller" 
                             data-x="left" 
                             data-y="160" 

                             data-splitin="chars"
                             data-elementdelay="0.1"

                             data-speed="700" 
                             data-start="1400" 
                             data-easing="easeOutBack"

                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"

                            data-frames="{ typ :lines;
                                         elementdelay :0.1;
                                         start:1650;
                                         speed:500;
                                         ease:Power3.easeOut;
                                         animation:x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                         },
                                         { typ :lines;
                                         elementdelay :0.1;
                                         start:2150;
                                         speed:500;
                                         ease:Power3.easeOut;
                                         animation:x:0;y:0;z:0;rotationX:00;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:1;transformPerspective:600;transformOrigin:50% 50%;
                                         }
                                         "


                            data-splitout="lines"
                            data-endelementdelay="0.1"
                            data-customout="x:-230;y:0;z:0;rotationX:0;rotationY:0;rotationZ:90;scaleX:0.2;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%"
                            data-endspeed="500"
                           
                            data-endeasing="Back.easeIn"
                             >
                            
                        </div>

                        <div class="caption slide__time position-center postion-place--one sfr stl" 
                             data-x="left" 
                              
                             data-y="242" 
                             data-speed="300" 
                             data-start="2100" 
                             data-easing="easeOutBack"
                             data-endspeed="300"
                             
                             data-endeasing="Back.easeIn">
                             
                         </div>
                        <div class="caption slide__date position-center postion-place--two lfb ltb" 
                             data-x="left"                                       
                             data-y="242" 
                             data-speed="500" 
                             data-start="2400" 
                             data-easing="Power4.easeOut"
                             data-endspeed="400"
                             
                             data-endeasing="Back.easeIn">
                             
                         </div>
                        <div class="caption slide__time position-center postion-place--three sfr stl" 
                             data-x="left" 
                             data-y="242" 
                             data-speed="300" 
                             data-start="2100" 
                             data-easing="easeOutBack"
                             data-endspeed="300"
                             
                             data-endeasing="Back.easeIn">
                             
                         </div>
                        <div class="caption slide__date position-center postion-place--four lfb ltb" 
                             data-x="left"
                             data-y="242" 
                             data-speed="500" 
                             data-start="2800" 
                             data-easing="Power4.easeOut" 
                             data-endspeed="400"
                             
                             data-endeasing="Back.easeIn">
                            
                         </div>

                         <div class="caption lfb slider-wrap-btn ltb" 
                             data-x="left"
                             data-y="310" 
                             data-speed="400" 
                             data-start="3300" 
                             data-easing="Power4.easeOut"
                             data-endspeed="500"
                             
                             data-endeasing="Power4.easeOut" >
                             
                         </div>
                    </li>
                <?php endif ?>
            <?php if ($slider['is_video']==0): ?>
                    <li data-transition="fade" data-slotamount="7" class="slide" data-slide=''>
                    <img alt='' src="<?php echo base_url() ?>uploads/slider/<?php echo $slider['image'] ?>">
                    <?php endif ?>
                    </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

        <!--end slider -->
        
        
        <!-- Main content -->
<section class="container">
    <div class="movie-best" id="">
       <div class="row">
            <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Today Best choice</div>
       </div>
        <div class="col-sm-12 change--col">
            <?php foreach ($best_choice as $movie): ?>
                <div class="movie-beta__item ">
                    <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>">
                    <img alt='' style="    height: 279px;
                    " src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                    </a>
                    <span class="best-rate"><?php echo $movie['imd_rating'] ?></span>
                    <ul class="movie-beta__info">
                        <li>
                            <p class="movie__time">169 min</p>
                            <p><?php echo $movie['categoryID'] ?> </p>
                            <p>38 comments</p>
                        </li>
                        <li class="last-block">
                            <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="slide__link">more</a>
                        </li>
                    </ul>
                </div>     
            <?php endforeach ?>
        </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="col-sm-12">
        <h2 class="page-heading">Book Tickets</h2>
        <div class="row" >
            <div class="col-sm-12">
                <div class="row" style="background-color: rgba(249, 246, 246, 0.14); color:#fff; font: 14px 'aleobold', sans-serif; border-radius: 9px;">
                <div class="col-sm-12"><br>
                     <form action="<?php echo base_url() ?>web/step2" method="get">
                                <div class="form-group row">
                                    
                                    <div class="col-sm-3">
                                        <select class="form-control movies" name="productID" required="" type="text" id="example-text-input">
                                            <option value="">Select Movie</option>
                                            <?php 

                                                foreach ($movies as $m) {

                                                    echo '<option value="'.$m['productID'].'">'.$m['title'].'</option>';
                                                    
                                                }

                                            ?> 
                                           
                                            <!-- <option value="One">One</option>
                                            <option value="Two">Two</option> -->
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control date" name="date_time" required="" type="text" id="example-text-input">
                                            <option value="">Select Date</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control cinema" name="cinema" required="" type="text" id="example-text-input">
                                            <option value="">Select Cinema</option>
                                        </select> 
                                    </div>
                                    <div class="col-sm-3">
                                        <select class="form-control time" name="time" required="" type="text" id="example-text-input">
                                            <option value="">Select Time</option>
                                        </select>
                                    </div>
                                </div>
                               
                               
                              
                               

                                

                               

                               <!--  <div class="form-group row col-md-12">
                                    <input type="submit" value="Submit" class="btn btn-primary pull-right">
                                </div> -->

                </form>
                </div>
          
                </div>
            </div>
        </div> 
    </div>
    <div class="clearfix"></div>
    
    <div class="col-sm-12">
        <h2 class="page-heading">Show Time</h2>
        <div class="row" >
            <div class="col-sm-12">
                <div class="row" style="    background-color: rgba(249, 246, 246, 0.14); color:#fff; font: 14px 'aleobold', sans-serif; border-radius: 9px;">
                    <h5><center><?php echo date('l d, F Y') ?></center></h5>
                    <div class="col-sm-6">
                        <table class="table " >
                           
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d') && $t['cinema_name'] == 'Cinema 1') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                            $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                               
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>

                                </tr>
                                            
                                <?php
                                    }
                                 }
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="table" >
                           
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d') && $t['cinema_name'] == 'Cinema 2') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                                 $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                               
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>

                                </tr>
                                <?php 
                            }}

                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="row" style="background-color: rgba(249, 246, 246, 0.14); color:#fff; font: 14px 'aleobold', sans-serif; border-radius: 9px;">
                    <h5><center><?php echo date('l d, F Y', strtotime('+1 day')) ?></center></h5>
                    <div class="col-sm-6">
                        <table class="table" >
                           
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 1</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d', strtotime('+1 day')) && $t['cinema_name'] == 'Cinema 1') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                                    $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>

                                </tr>
                                <?php }}
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6">
                        <table class="table" >
                            <tbody>
                                <tr style="display: none;">
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <tr>
                                <th  colspan="2"><center>Cinema 2</center></th>

                                </tr>
                                <?php 
                                    foreach ($table as $t) {
                                        if ($t['showdate'] == date('Y-m-d', strtotime('+1 day')) && $t['cinema_name'] == 'Cinema 2') {
                                            $title = explode(';', $t['title']);
                                            $time = explode(';', $t['showtime']);
                                            for ($i=0; $i < sizeof($title); $i++) { 
                                            //echo $title[$i]. ' ' . $time[$i];
                                                   $onetime = explode(',', $time[$i]);
                                            for ($j=0; $j < sizeof($onetime); $j++) { 
                                ?>
                                <tr>
                                    <td style="border: 2px solid;"><?php echo $title[$i] ?></td>
                                    <td style="border: 2px solid;"><?php echo $onetime[$j] ?></td>

                                </tr>
                                <?php }}
                                            }
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        

    <div class="col-sm-12">
        <div class="mega-select-present mega-select-top mega-select--full">
            <div class="mega-select-marker">
                <div class="marker-indecator film-category" style="display: block;">
                    <p class="select-marker"><span>find movie by</span> <br> Category</p>
                </div>

                <div class="marker-indecator actors" style="display: none;">
                    <p class="select-marker"><span> find movie by</span> <br>Actor</p>
                </div>

                <div class="marker-indecator director" style="display: none;">
                    <p class="select-marker"><span>admire personalities - find </span> <br>director</p>
                </div>

                <div class="marker-indecator country" style="display: none;">
                    <p class="select-marker"><span>search for movie by </span> <br>country?</p>
                </div>
            </div>
            <div class="mega-select pull-right">
              <span class="mega-select__point">Search by</span>
              <ul class="mega-select__sort">
                  
                  
                  <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active" data-filter="film-category">Category</a></li>
                  <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter="actors">Actors</a></li>
                  <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter="director">Director</a></li>
                  <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter="country">Country</a></li>
              </ul>
<form method="post" action="<?php echo base_url('web/search') ?>">
              <input name="search" type="text" class="select__field">
              
              <div class="select__btn">
                <!-- <input type="submit" name="city" value="location" class="btn btn-md btn--danger location" style="display: none;"> -->
                <input type="submit" name="city" value="cinema" data-attr="cinema" class="btn btn-md btn--danger cinema" style="display: none;">
<input type="submit" name="city" value="categoryID" data-attr="film-category" class="btn btn-md btn--danger film-category" style="display: none;">
<input type="submit" name="city" value="actors" data-attr="actors" class="btn btn-md btn--danger actors" style="display: none;">
<input type="submit" name="city" value="director" data-attr="director" class="btn btn-md btn--danger director" style="display: none;">
<input type="submit" name="city" value="country" data-attr="country" class="btn btn-md btn--danger country" style="display: none;">

                <a href="#" class="btn btn-md btn--danger cinema" data-attr="cinema" style="display: none;">Search <span class="hidden-exrtasm">suitable cimema</span></a>
                <a href="#" class="btn btn-md btn--danger film-category" data-attr="film-category" style="display: inline-block;">Search <span class="hidden-exrtasm">best category</span></a>
                <a href="#" class="btn btn-md btn--danger actors" data-attr="actors" style="display: none;">Search <span class="hidden-exrtasm">talented actors</span></a>
                <a href="#" class="btn btn-md btn--danger director" data-attr="director" style="display: none;">Search <span class="hidden-exrtasm">favorite director</span></a>
                <a href="#" class="btn btn-md btn--danger country" data-attr="country" style="display: none;">Search <span class="hidden-exrtasm">produced country</span></a>
              </div>
</form>
             
            </div>
        </div>
    </div>
          
    <div class="clearfix"></div>
        <h2 id='target' class="page-heading heading--outcontainer">Now in the cinema</h2>
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-8 col-md-9">
                <!-- Movie variant with time -->    
               <?php foreach ($movies as $movie): ?>
                    <div class="col-md-6">
                        <div class="movie movie--test2 movie--test--dark movie--test--left" style="height: 279px;">
                            <div class="movie__images">
                                <a href="<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>" class="movie-beta__link">
                                    <img alt=''  style="height: 279px;" src="<?php echo base_url() ?>uploads/product/<?php echo $movie['image'] ?>">
                                </a>
                            </div>
                            <div class="movie__info">
                                <a href='<?php echo base_url() ?>web/details/<?php echo $movie['productID'] ?>' class="movie__title"><?php echo $movie['title'] ?> (<?php echo $movie['year'] ?>)  </a>

                                <p class="movie__time"><?php echo $movie['length'] ?> min</p>

                                <p class="movie__option"><a href="#"><?php echo $movie['categoryID'] ?></a> </p>
                                
                                <div class="movie__rate">
                                    <span class="movie__rating"><?php echo $movie['imd_rating'] ?></span>
                                </div>               
                            </div>
                        </div>
                    </div>
               <?php endforeach ?>
            </div>
            <aside class="col-sm-4 col-md-3">
                <div class="sitebar first-banner--left">
                    <div class="banner-wrap first-banner--left">
                        <img alt='banner' src="<?php echo base_url() ?>assets/images/movie forfamily.jpg">
                    </div>

                     <div class="banner-wrap">
                        <img alt='banner' src="<?php echo base_url() ?>assets/images/lobby.jpg">
                    </div>

                     <div class="banner-wrap banner-wrap--last">
                        <img alt='banner' src="<?php echo base_url() ?>assets/images/advance booking.jpg">
                    </div>
                </div>
            </aside>
        </div>
    </div>
    
    <div class="col-sm-12">
        <h2 class="page-heading">Latest news</h2>
        <?php foreach ($newss as $news): ?>
            <div class="col-sm-4 similar-wrap col--remove">
                <div class="post post--preview post--preview--wide">
                    <div class="post__image">
                        <img alt='' src="<?php echo base_url() ?>uploads/news/<?php echo $news['image'] ?>">
                        <div class="social social--position social--hide">
                            <span class="social__name">Share:</span>
                            <a href='#' class="social__variant social--first fa fa-facebook"></a>
                            <a href='#' class="social__variant social--second fa fa-twitter"></a>
                            <a href='#' class="social__variant social--third fa fa-vk"></a>
                        </div>
                    </div>
                    <p class="post__date"><?php echo $news['date_time'] ?> </p>
                    <a href="#" class="post__title"><?php echo $news['title'] ?></a>
                    <a href="<?php echo base_url() ?>/web/newspage" class="btn read-more post--btn">read more</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<div class="clearfix"></div>

<?php include "footer.php"; ?>

<script type="text/javascript">
    $('.select__btn a').click(function(){
        var atr = $(this).attr('data-attr')
        $('input[data-attr="'+atr+'"]').click()
    })
</script>
<script type="text/javascript">
    function get_showing(productID) {
        $.ajax({
            url:"<?php echo base_url() ?>web/get_showing",
            type:"post",
            data:{productID:productID},
            success:function(resp){
               $('#showing_showtime').html(resp);
            }
        });
    }
</script>
<script type="text/javascript">
    $('.movies').change(function() {
        var id = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_dates/'+id,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                $('.date option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.date').append('<option value="'+response[i].showdate+'">'+response[i].showdate+'</option>')
                }
            }
        })
    })
    $('.date').change(function() {
        var id = $('.movies').val()
        var date = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_ciname/'+id+'/'+date,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                $('.cinema option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.cinema').append('<option value="'+response[i].cinema_name+'">'+response[i].cinema_name+'</option>')
                }
            }
        })
    })
    $('.cinema').change(function() {
        var id = $('.movies').val()
        var date = $('.date').val()
        var cinema = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_time/'+id+'/'+date+'/'+cinema,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                //console.log(response)
                //var times = response.split(',')
                ///console.log(times)
                $('.time option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.time').append('<option value="'+cinema+'_'+response[i]+'">'+response[i]+'</option>')
                }
            }
        })
    })
    $('.time').change(function() {
        var id = $('.movies').val()
        var date = $('.date').val()
        var cinema = $('.cinema').val()
        var time = $(this).val()
        jQuery.ajax({
            url: '<?php echo base_url() ?>/web/get_movies_seats/'+id+'/'+date+'/'+cinema+'/'+time,
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            method: 'GET',
            type: 'GET', // For jQuery < 1.9
            success: function(response){
                console.log(response)
                var res = response
                $('.seats option').not('option:first').remove()
                for (var i = 0; i < response.length; i++) {
                    $('.seats').append('<option value="'+response[i]+'">'+response[i]+'</option>')
                }
            }
        })
    })
</script>