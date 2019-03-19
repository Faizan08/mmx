
        
   <br><br>
        
        <!-- Main content -->
        <section class="container">
            <div class="col-sm-12">
                <h2 class="page-heading"><?php echo $title; ?></h2>

                  <div class="post">
                   

              
                    
                    <br>


</div>
<br><br>
<p style="background: rgba(238, 238, 238, 0.29);padding: 15px;border-left: 4px solid;"><span><b><i>Note:- 
&nbsp;&nbsp;<b>Due to heavy traffic on our website, our online Booking is temporarily <span style="color: red;"><strong>Closed</strong></span> till <span style="color: red;">28 February 2019</span> <span> Mega Multiplex Cinemas</span></b></i></b></span></p>
<p class="box fade-in three" style="background: rgba(238, 238, 238, 0.29);padding: 15px;border-left: 4px solid;">For more information and booking for the ticket kindly contact on our customer services number <strong>"<span style="color: red;">021-34596616/18</span>"</strong> or visit Mega Multiplex Cinema.</br>
<!--<span align="center"><strong>Eid Mubarak</strong> to you and your family.. From <strong>Mega Multiplex Cinema</strong></span>-->
</p>
<div class="clearfix"></div>
</div>
        </section>
        <section class="container" style="visibility: hidden;">
            <div class="col-sm-12">
                <h2 class="page-heading"><?php echo $title; ?></h2>

                  <div class="post">
                   

              
                    
                    <br>


</div>


</div>
<div class="container">
  <div class="box fade-in one">
    look at me fade in
  </div>

  <div class="box fade-in two">
    Oh hi! i can fade too!
  </div>

  <div class="box fade-in three">
    Oh hi! i can fade three!
  </div>
</div>        </section>
        
        <div class="clearfix"></div>
<?php include 'footer.php'; ?>
        <script type="text/javascript">
        
            $(document).ready(function() {
                init_SinglePage();
            });
            window.setTimeout(function() {
                window.location.href = 'https://megamultiplex.com.pk';
            },15000);
        </script>
        <!--box script-->
        <script>
            $(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},500);
                    
            }
            
        }); 
    
    });
    
});

        </script>
<style>
 /* make keyframes that tell the start state and the end state of our object */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fade-in {
  opacity:0;  /* make things invisible upon start */
  -webkit-animation:fadeIn ease-in 1;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fade-in.one {
  -webkit-animation-delay: 0.7s;
  -moz-animation-delay: 0.7s;
  animation-delay: 0.7s;
}

.fade-in.two {
  -webkit-animation-delay: 1.2s;
  -moz-animation-delay:1.2s;
  animation-delay: 1.2s;
}

.fade-in.three {
  -webkit-animation-delay: 1.6s;
  -moz-animation-delay: 1.6s;
  animation-delay: 1.6s;
}

/*---make a basic box ---*/

</style>
</body>
</html>